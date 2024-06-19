<!doctype html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #keywords -->
    <meta name="keywords" content="boot, Bootstrap, Forex and Stock Trading platform">
    <!-- #description -->
    <meta name="description" content="Forex and Stock Trading platform">
    <!-- #title -->
    <title>{{siteName()}} - Register</title>
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{asset('')}}main/assets/images/fav.png" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
    <link rel="stylesheet" href="{{asset('')}}main/assets/css/style.min.css">
</head>
<body>
     <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center rounded" aria-label="scroll Bar Button"><i class="mat-icon fs-four nb4-color ti ti-arrow-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- Contact start -->
    <section class="sign nb4-bg h-100 d-flex align-items-center position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="{{asset('')}}main/assets/images/star.png" alt="vector" class="position-absolute push_animat">
        </div>
        <div class="container ">
            <div class="row align-items-center justify-content-center justify-content-xl-start">
                <div class="col-12 col-sm-10 col-md-6">
                    <div class="welcome alt-color text-center text-md-start pt-120 pb-120 position-relative z-0">
                        <h1 class="display-one">Welcome Back!</h1>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xxl-5 offset-xxl-1 text-center ms-xl-auto">
                    <div class="sign__content ms-md-5 ms-xxl-0 pt-120 pb-120">
                        <div class="head_part">
                            <a href="{{route('Index')}}"> <img src="{{asset('')}}main/assets/images/logo.png" alt="Logo"></a>
                            <h5 class="mt-5 mt-lg-6">Sign up to Your Account</h5>
                        </div>
                        <form method="POST" action="{{route('registers')}}" autocomplete="off" id="frmContactus" class="contact__form mt-8 mt-lg-10  text-start">
                        {{ csrf_field() }}
                            <div class="d-flex flex-column gap-5 gap-lg-6 ">
                                <div class="row g-5 g-lg-6">
                                   
                               @php
                                $sponsor =@$_GET['ref'];
                                $name= \App\Models\User::where('username',$sponsor)->first();
                            @endphp
                            
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="cpassword">Sponsor ID</label>
                                    <div class="input-pass">
                                        <input type="text" class="fs-six-up bg_transparent pe-13 check_sponsor_exist" data-response="sponsor_res" value="<?=($sponsor)?$sponsor:""?>" name="sponsor" id="cpassword" placeholder="Sponsor Id" required>
                                    
                                    </div>
                                     <span id="sponsor_res"><?=($name)?$name->name:"";?></span>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="cpassword">Full Name</label>
                                    <div class="input-pass">
                                        <input type="text" class="fs-six-up bg_transparent pe-13" name="name" id="cpassword" placeholder="Name" required>
                                      
                                    </div>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="cpassword">Email </label>
                                    <div class="input-pass">
                                        <input type="email" class="fs-six-up bg_transparent pe-13" name="email" id="cpassword" placeholder="Email" required>
                                       
                                    </div>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="cpassword">Mobile Number</label>
                                    <div class="input-pass">
                                        <input type="text" class="fs-six-up bg_transparent pe-13" name="phone" id="cpassword" placeholder="Mobile Number" required>
                                       
                                    </div>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="email">Password</label>
                                    <input type="password" class="fs-six-up bg_transparent" name="password" id="email" placeholder="password" required>
                                    <span class="password-eye-icon"></span>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="email">Confirm Password</label>
                                    <input type="password" class="fs-six-up bg_transparent" name="password_confirmation" id="email" placeholder="Retype Password" required>
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                            <label class="checkbox-single d-flex align-items-center nw1-color mt-3">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                I accept the privacy policy
                            </label>
                            <div class=" mt-7 mt-lg-8">
                                <button type="submit" class="cmn-btn py-3 px-5 px-lg-6 mt-7 mt-lg-8 w-100 d-center" name="submit" id="submit">Sign Up</button>
                            </div>
                        </form>
                        <span class="or-option d-center w-100 mt-7 mt-lg-8 position-relative z-0"><span class="px-3 nb4-bg">Or sign in with</span></span>
                       
                        <div class="mt-8 mt-lg-10">
                            <p>Already have an account? <a href="{{route('login')}}">Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->
@include('partials.notify')

  <script src="https://code.jquery.com//jquery-3.3.1.min.js"> </script>     

 <script>
      
       $('.no_space').keyup(function (e) {         
         var TCode = $(this).val();
        var res_area = $(this).attr('data-response');
        // alert(res_area);
        if( /[^a-zA-Z0-9\-\/@#\$%\^\&*]/.test( TCode ) ) {
            $(this).val('');
            
            $('#'+res_area).html('Space Not Allowed.').css('color','red');
            return false;
        }                
    });
    
      $('.check_sponsor_exist').change(function (e) { 
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();      
        // alert(sponsor);  
        $.ajax({
          type: "post",
          url: "{{route('getUserName')}}",
          data: {"user_id":sponsor, "_token": "{{ csrf_token() }}",},            
          success: function (response) {  
         if(response!=1){
              // alert("hh");
              $('#'+res_area).html(response).css('color','#fff').css('font-weight','800').css('margin-buttom','10px');
            }else{
              // alert("hi");
              $('#'+res_area).html("Introducer Not exists!").css('color','red').css('margin-buttom','10px');
            }
          }
        });
    });
</script>
    <!-- ==== js dependencies start ==== -->
    <script src="{{asset('')}}main/assets/js/plugins/plugins.js"></script>
    <script src="{{asset('')}}main/assets/js/plugins/plugin-custom.js"></script>
    <script src="{{asset('')}}main/assets/js/main.js"></script>
</body>

</html>