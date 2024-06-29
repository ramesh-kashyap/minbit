<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\GeneralSetting;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;
use Helper;
class Invest extends Controller
{

  private $downline = "";

    public function index(Request $request)
    {
        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id)->orderBy('sdate','DESC');
       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
           $q->Where('sdate', 'LIKE', '%' . $search . '%')
             ->orWhere('amount', 'LIKE', '%' . $search . '%')
             ->orWhere('status', 'LIKE', '%' . $search . '%');  
        });

       }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['data'] =$notes;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
        
    }  


    public function invest_view(Request $request)
    {
        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id)->orderBy('sdate','DESC');
       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
           $q->Where('sdate', 'LIKE', '%' . $search . '%')
             ->orWhere('amount', 'LIKE', '%' . $search . '%')
             ->orWhere('status', 'LIKE', '%' . $search . '%');  
        });
       }
        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);
      $this->data['search'] =$search;
      $this->data['data'] =$notes;
        $this->data['page'] = 'user.invest.reivest';
        return $this->dashboard_layout();
        
    }  
    


    public function deposit()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit2';
        return $this->dashboard_layout();
    }

    

public function cancel_payment($id)

{
    
         Investment::where('orderId',$id)->update(['status' => 'Decline']);
     
        $notify[] = ['success','Deposit canceled successfully'];
        return redirect()->route('user.invest')->withNotify($notify);
    
}


// public function showAddress()
// {
//     // Fetch the usdtBep20 address from the general_settings table
//     $adminAddress = GeneralSetting::first()->usdtBep20;
//     return $adminAddress;
// }

    public function confirmDeposit(Request $request)
    {
   try{
     $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:1000',
        'PSys' => 'required',
     ]);


    //  dd($request->all());
    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }




    $user=Auth::user();
    $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();
   

    if ($invest_check) 
    {
      return redirect()->route('user.invest')->withErrors(array('your deposit already pending please cancel it if you dont want to pay this transaction'));
    }
   

    $min_amount = $request->minimum_amount;
    $max_amount = $request->maximum_amount;
    $plan = $request->plan;
    $paymentMode = $request->PSys;
    $amount = $request->Sum;

   
       
    // if ($amount<$min_amount || $amount>$max_amount) 
    // {
    //   return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
    // }
    $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    // $last_package=($invest_check)?$invest_check->amount:0;
    //     $plan ='BEGINNER';
    //   if ($last_package>$amount)
    //   {
    //     return Redirect::back()->withErrors(array('Please choose amount above last package $ '.$amount));
    //   }
  
    $amountTotal= $request->Sum;
    $invoice = substr(str_shuffle("0123456789"), 0, 7);
    $this->data['paymentMode'] =$paymentMode;
    $this->data['orderId'] =$invoice;
    $this->data['amount'] =$amount;
    $this->data['page'] = 'user.invest.confirmDeposit';
    return $this->dashboard_layout();


  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }







public function reinvest(Request $request)
{
    try {
        $validation = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1',
            'paymentMode' => 'required',
            'transaction_id' => 'required',
        ]);

        if ($validation->fails()) {
            Log::info($validation->getMessageBag()->first());
            return redirect()->route('user.re_invest')->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user = Auth::user();

        $balance = round($user->available_balance(), 2);

        // Check if the user has enough available balance
        if ($balance < $request->amount) {
            $notify[] = ['error', 'Insufficient balance.'];
            return redirect()->route('user.re_invest')->withNotify($notify)->withInput();
        }
        if ($request->transaction_id != $user->tpassword) {
          return redirect()->route('user.re_invest')->withErrors('Transaction ID does not match your transaction password.')->withInput();
      }

        $plan = "1";

        $user_detail = User::where('username', $user->username)->orderBy('id','desc')->limit(1)->first();
        $invest_check = Investment::where('user_id', $user_detail->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();
        $invoice = substr(str_shuffle("0123456789"), 0, 7);

        if ($balance >= $request->amount) {
            $data = [
                'plan' => $plan,
                'transaction_id' => $request->transaction_id ,
                'user_id' => $user_detail->id,
                'user_id_fk' => $user_detail->username,
                'amount' => $request->amount,
                'payment_mode' => $request->paymentMode,
                'status' => 'Pending',
                 'walletType'=>1,
                'sdate' => date("Y-m-d"),
                'active_from' => $user->username,
            ];

            $payment = Investment::insert($data);

            // Deduct the amount from the user's available balance


            // Call the add_level_income function
            

            $notify[] = ['success', 'Deposit request submitted successfully'];
            return redirect()->route('user.re_invest')->withNotify($notify);
        }

    } catch (\Exception $e) {
        Log::info('error here');
        Log::info($e->getMessage());
        return redirect()->route('user.re_invest')->withErrors('error', $e->getMessage())->withInput();
    }
}


 
 


// user reinvest
public function fundActivation(Request $request)
{

try{

$validation =  Validator::make($request->all(), [
    'amount' => 'required|numeric|min:1000',
    'paymentMode' => 'required',
   //  'transaction_id' => 'required|unique:investments,transaction_id',
]);

if($validation->fails()) {
    Log::info($validation->getMessageBag()->first());

    return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
}



   $user=Auth::user();
   
   $plan="1";

   $user_detail=User::where('username',$user->username)->orderBy('id','desc')->limit(1)->first();
   $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
   $invoice = substr(str_shuffle("0123456789"), 0, 7);
  

    
       $data = [
            'plan' => $plan,
            'transaction_id' =>$request->transaction_id,
            'user_id' => $user_detail->id,
            'user_id_fk' => $user_detail->username,
            'amount' => $request->amount,
            'payment_mode' =>$request->paymentMode,
            'status' => 'Pending',
            'sdate' => Date("Y-m-d"),
            'active_from' => $user->username,
        ];
        $payment =  Investment::insert($data);
        

    $notify[] = ['success','Deposit request submitted successfully'];
    return redirect()->route('user.invest')->withNotify($notify);



}
catch(\Exception $e){
Log::info('error here');
Log::info($e->getMessage());
print_r($e->getMessage());
die("hi");
return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
  }

}


        public function invest_list(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }
        public function my_deposit()
        {


          $this->data['page'] = 'user.invest.my_deposit';
          return $this->dashboard_layout();
        }
        

        public function open_deposit()
        {


          $this->data['page'] = 'user.invest.open_deposit';
          return $this->dashboard_layout();
        }


       
}
