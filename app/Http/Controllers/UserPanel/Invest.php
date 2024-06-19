<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
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

    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
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

    public function confirmDeposit(Request $request)
    {
   try{
     $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:30',
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

   
       
    if ($amount<$min_amount || $amount>$max_amount) 
    {
      return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
    }
    $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    $last_package=($invest_check)?$invest_check->amount:0;
        $plan ='BEGINNER';
      if ($last_package>$amount)
      {
        return Redirect::back()->withErrors(array('Please choose amount above last package ₹ '.$amount));
      }
  
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



    public function fundActivation(Request $request)
    {

      // dd("hiii");
  try{
    $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:10000',
        'paymentMode' => 'required',
        'icon_image'=>'max:4096|mimes:jpeg,png,jpg,svg',
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
       $joining_amt =$request->amount;
        $plan ='BEGINNER';
       if ($joining_amt>=10000 && $joining_amt<=50000) 
       {
        $plan ='BEGINNER';
       }
       elseif($joining_amt>=51000 && $joining_amt<=100000)
       {
        $plan ='BRONZE';
       }
       elseif($joining_amt>=110000 && $joining_amt<=250000)
       {
        $plan ='SILVER';
       }
       elseif($joining_amt>=251000 && $joining_amt<=1000000)
       {
        $plan ='PLATINUM';
       } 
       elseif($joining_amt>=1100000 && $joining_amt<=3000000)
       {
        $plan ='DAIMOND';
       }
       elseif($joining_amt>=3100000 )
       {
        $plan ='CROWN DAIMOND';
       }

       



       $icon_image = $request->file('icon_image');
       $imageName = time().'.'.$icon_image->extension();
       $request->icon_image->move(public_path('slip/'),$imageName);

      $last_package = ($invest_check)?$invest_check->amount:0;
      $invoice = substr(str_shuffle("0123456789"), 0, 7);

        
           $data = [
                'plan' => $plan,
                'orderId' => $invoice,
                'transaction_id' =>md5(uniqid(rand(), true)),
                'user_id' => $user_detail->id,
                'user_id_fk' => $user_detail->username,
                'amount' => $request->amount,
                'payment_mode' =>$request->paymentMode,
                'slip' => 'public/slip/'.$imageName,
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
