@include('layouts.mainsite.header')

<script>
	$('.signin_page').addClass('current_menu');
</script>
<section class="enter enter_signin">
    <div class="container-fluid">
        <div class="enter_page__bg">
            <img src="{{asset('')}}main/images/calc_left.svg" alt="">
        </div>
        <div class="enter_page__bg enter_page__bg_right">
            <img src="{{asset('')}}main/images/calc_right.svg" alt="">
        </div>
        <img src="{{asset('')}}main/images/icon_signin_title.png" width="53" alt="" class="enter_page__logo">

        <h1 class="enter_page__title text_center">
            Nice to see you again!
        </h1>

        <script>
            var last_login = localStorage.getItem('login');

            if(last_login){
                $(".enter_page__title").html("Nice to see you again, "+last_login+"!");
            }
        </script>


        
        <p class="mx-auto enter_page__subtitle text_center">
            To successfully log in, you need to provide your email or login and password.
        </p>
        <div class="enter_page__nav">
            <a href="/">
                <img src="{{asset('')}}main/images/icon_home.svg" alt="">
                Back to home
            </a>
            <a href="/forget">
                <img src="{{asset('')}}main/images/icon_enter_user.svg" alt="">
                Forget password?
            </a>
        </div>

        <form id="Login" class="contact__form"  id="{{route('login')}}" method="POST" autocomplete="off" id="frmContactus">
         {{ csrf_field() }}
        <div class="enter__row">


                <div class="enter__item">
                    <div class="enter__group">
                        <img src="{{asset('')}}main/images/icon_input_mail.svg" alt="">
                        <p class="enter__input_name">Enter your email or login</p>
                        <div class="enter__input placeholder__group_input">
                            <input id="login-email"  name="username" id="uname" type="text" class="order__input placeholder__input">
                            <p class="place_span">
                                <img src="{{asset('')}}main/images/icon_placeholder.svg" alt=""> Please enter
                                your username
                            </p>
                        </div>
                    </div>
                </div>

                <div class="enter__item">
                    <div class="enter__group">
                        <img src="{{asset('')}}main/images/icon_input_pass.svg" alt="">
                        <p class="enter__input_name">Enter your pass</p>
                        <div class="enter__input placeholder__group_input">
                            <input id="login-pass"  name="password" id="password" type="password" class="order__input placeholder__input order__input_pass">
                            <p class="place_span">
                                <img src="{{asset('')}}main/images/icon_placeholder.svg" alt=""> Please enter
                                your pass...
                            </p>
                            <button class="show_pass"></button>
                        </div>
                    </div>
                </div>

                
                    <script src="https://www.hCaptcha.com/1/api.js" async="" defer=""></script>

                    <div class="modal__item-input" style="width: 100%;margin: auto;">
                        <!-- <div class="captcha" style="margin: auto;width: fit-content;">
                            <div class="h-captcha" data-theme="" data-sitekey="2827a667-6929-4a6f-a25b-66a7531f0ebc"></div>
                        </div> -->
                    </div>

                


                <div class="enter__item">
                    <button type="submit" name="submit" id="submit" class="enter__btn open__popup" data-popup="enter__popup">
                        <img src="{{asset('')}}main/images/icon_confirm_arrow.svg" alt="">
                        Confirm
                    </button>
                </div>

            

        </div>

        </form>

    </div>
</section>


<script>

    $(".show_pass").click(function(e) {
        e.preventDefault();
    });

    

</script>



	<script>
		$(".get__bonus__button").click(function() {
			$('.modal__overflow-layer').toggleClass('visible');
  			$('.modal__sign-up').addClass('visible');
		});
	</script>
@include('layouts.mainsite.footer')