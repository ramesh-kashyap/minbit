
@include('partials.notify')



<div class="social-right">
    <a href="https://t.me/mintbit_support" target="_blank"><i></i></a>
    <a href="https://t.me/+N0PipUltKz5lMDIy" target="_blank"><i></i></a>
</div>

<style>

.social-right a i::before
{
  content: '';
  display: inline-block;
  position: absolute;
  left: -1px;
  top: 1px;
  width: 100%;
  height: 100%;
  background: url('images/telegram.svg') center/20px no-repeat;
}

.social-right a:nth-child(2) i::before
{
  background: url('images/group.svg') center/22px no-repeat;
  left: 0px;
  top: 0px;
}

.social-right a
{
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.social-right a i
{
  width: 40px;
  height: 40px;
  min-width: 40px;
  background: rgba(126, 126, 226, 0.4);
  border-radius: 35px;
  color: #fff;
  position: relative;
}

.social-right {

  position: fixed;
  right: 20px;
  bottom: 50%;
  z-index: 12;
  display: flex;
  flex-flow: column;
  border-radius: 25px;
  color: #fff;
  align-items: center;
  cursor: pointer;
  margin-top: 55px;
  
}

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="{{asset('')}}main/js/rangeslider.min.js"></script>
<script src="{{asset('')}}main/js/gsap.min.js"></script>

<script src="{{asset('')}}main/js/scripts.js"></script>
<script src="{{asset('')}}main/js/slick.min.js"></script>
<script src="{{asset('')}}main/js/mainscript.js"></script>
<script src="{{asset('')}}main/js/mains.js"></script>
<script src="{{asset('')}}main/js/counter.js"></script>
<script src="{{asset('')}}main/js/aos.js"></script>
<script src="{{asset('')}}main/js/life.js"></script>




<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{asset('')}}main//js/scroll-out.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script>
<script src="{{asset('')}}main//js/smooth-scrollbar.js"></script>
<script src="{{asset('')}}main//js/jquery.spincrement.min.js"></script>
<script src="{{asset('')}}main/s/js/main.js?ver=1.0.24"></script>




<script>

if(typeof $("#your-element-selector").html() != "undefined"){

    VANTA.DOTS({
    el: "#your-element-selector",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x4feb8e,
    color2: 0x2ce838,
    backgroundColor: 0x010001,
    size: 1.60,
    spacing: 26.00
    })
}

</script>
 
<script>
	$('.exchange__run__curs').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	centerMode: true,
	autoplay: true,
	arrows: false,
	dots: false, 
	variableWidth: true,
	centerMode:true,
		autoplaySpeed: 0,
	speed: 6000,
	cssEase:'linear'
	});

    
    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>

	
	<script src="{{asset('')}}main/js/slick.min.js"></script>

		<div class="modal__overflow-layer">
			<div class="modal__body reinvest-block">
				<div class="modal__inner">
					<form id="reinvest" method="POST" class="contact__form">
						<div class="modal__header">
							<h2 class="modal__title" style="max-width: 400px">Do you confirm the Reinvestment&nbsp;of&nbsp;<h id="reivest_short">Bitcoin</h>?</h2>
							<span class="modal__close"></span>
						</div>
						<div class="modal__item-input">
							<div class="modal__deposit-cover-row">
								<input type="text" value="" placeholder="" id="reivest_amount" name="amount">
							</div>
						</div>

						<input style="display: none;" name="reinvest" id="reivest_cur" type="text" value="" placeholder="">
						<input id="_token" type="hidden" name="_token" value="499754f476571278263b6eb3d652a6a2a05f87d68d3d04ae41c18f626de3fe1d">

						<div class="exchange__btns d-flex justify-content-between">
							<button class="btn open__popup" data-popup="enter_success">
								Yes
							</button>
							<a class="btn btn_tr modal__cancel">No</a>
						</div>

					</form>
				</div>
			</div>

			<div class="modal__body modal__bonuspage">
				<div class="modal__inner">
					<div class="modal__header">
						<h2 class="modal__title">Bonuses</h2>
						<div class="modal__sub-title">Get a random bonuses from 1 to VH/s every six hours. <h id="timer" data-time="21600000" data-ready="true">START</h></div>
						<div class="modal__bonus-text">The bonus will be instantly credited to the power balance in your account. </div>
						<div class="modal__button-bonus" id="bonus_button">Get bonus</div>
						<span class="modal__close"></span>

						<script>
							$(window).on("load", function() {
								timer($("#timer"));

								$("#bonus_button").click(function(event){
									getBonus();
								}); 	
							}); 	
						</script>

					</div>
					<div class="bonus__modal-article">
						<div class="bma__title">Bountly</div>
						<div class="bma_sub-title">Youtube review campaign</div>
						<ul class="bma__list">
							<li>Your channel and videos must be public.</li>
							<li>You must have at least 100 subscribers.</li>
							<li>Somewhere in the title name use the word "INSPHERA"</li>
							<li>We can reject your review for various reasons: poor video/sound etc.</li>
							<li>We will consider key points like, number of views, likes and comments or without HUMAN voice.</li>
							<li>Repeat the process as much as you want to earn Refferral commission.</li>
							<li>ONLY 1 submission allowed for this task per month.</li>
							<li>Maximum of 1 account on INSPHERA for each user.</li>
						</ul>
						<div class="bma__bottom-title">Make video and get reward 20&nbsp;VH/s - 8000&nbsp;VH/s</div>
						<div class="dashboard__header-navigation">
							<a href="https://t.me/mintbit_support"><i></i> <span>Support</span></a>
							<a href="https://t.me/+N0PipUltKz5lMDIy"><i></i> <span>Groupe</span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="modal__body modal__withdraw">
				<div class="modal__inner">
					<div class="modal__header">
						<h2 class="modal__title">Withdraw</h2>
						<span class="modal__close"></span>
					</div>
					<div class="modal__item-input">
						<div class="modal__input-title">Amount:</div>
						<div class="amount__item-line-row drop__down">
							<ul id="withdrawlist" class="amount__drop-list">
								<li class="amount__drop-item check" data-currency="btc" data-amount="">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="btc__logo"></i></div>
										<div class="amount__cryp-name">Bitcoin</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="bch" data-amount="">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon">
											<i class="bch__logo"></i></div>
										<div class="amount__cryp-name">BitCash</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="zec">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="zec__logo"></i></div>
										<div class="amount__cryp-name">ZCash</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="trx">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="trx__logo"></i></div>
										<div class="amount__cryp-name">Tron</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="usdt.trc20">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="usdt__logo"></i></div>
										<div class="amount__cryp-name">Tether TRC20</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="usdt.bep20">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="usdt__logo"></i></div>
										<div class="amount__cryp-name">Tether BEP20</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="ltc">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="ltc__logo"></i></div>
										<div class="amount__cryp-name">Litecoin</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="shib">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="shib__logo"></i></div>
										<div class="amount__cryp-name">Shiba</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="ada">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="ada__logo"></i></div>
										<div class="amount__cryp-name">Cardano</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="doge">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="doge__logo"></i></div>
										<div class="amount__cryp-name">Doge</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="eth">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="eth__logo"></i></div>
										<div class="amount__cryp-name">Ethereum</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="etc">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="etc__logo"></i></div>
										<div class="amount__cryp-name">Ethereum Classic</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="dot">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="dot__logo"></i></div>
										<div class="amount__cryp-name">Polkadot</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="xrp">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="xrp__logo"></i></div>
										<div class="amount__cryp-name">Ripple</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="link">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="link__logo"></i></div>
										<div class="amount__cryp-name">Chainlink</div>
									</div>
								</li>
								<li class="amount__drop-item" data-currency="bnb">
									<div class="amount__drop-body">
										<div class="amount__crypti-icon"><i class="bnb__logo"></i></div>
										<div class="amount__cryp-name">Binance Coin BEP20</div>
									</div>
								</li>

							</ul>
						</div>
					</div>

					<form id="withdraw_form" action="">

						<div class="modal__item-input">
							<div class="modal__input-title">You wallet:</div>
							<input id="withdraw_wallet" type="text" name="wallet" value="" placeholder="Enter withdraw address">
						</div>
						<div class="modal__item-input" id="wd_tag">
							<div class="modal__input-title">You tag:</div>
							<input id="withdraw_tag" type="text" name="wallet" value="" placeholder="Enter withdraw tag">
						</div>
						<div class="modal__item-input">
							<div class="modal__input-title">Withdraw amount:</div>
							<input id="withdraw_amount" type="text" name="amount" value="" placeholder="Enter withdraw address">
						</div>
						<input style="display: none;" id="withdraw_cur" type="text" name="email" value="" placeholder="Enter withdraw cur">
						<div class="withdraw__mdl-info">
							<span class="wmdl__label">Avaible to withdraw</span>
							<div class="wmdl__data" id="summ">0.000000000000 BCH</div>
						</div>
						<div class="modal__button">
							<button>Withdraw</button>
						</div>

					</form>


				</div>
			</div>
		</div>




	<script>
		$(".reinvest").click(function(event) {
			$(".modal__overflow-layer").addClass("visible");
			$(".reinvest-block").addClass("visible");
			$("#reivest_short").text($(this).data('full'));
			$("#reivest_cur").val($(this).data('currency'));

			let am = $(this).data('amount');
			if (am < 0) {
				am = "0.00000000"
			}

			$("#reivest_amount").val(am);
		});

		$(".modal__close, .modal__cancel").click(function(e) {

			e.preventDefault();

			$(".modal__overflow-layer").removeClass("visible");
			$(".reinvest-block").removeClass("visible");

		});

		$("#reinvest_button").click(function(event) {
			//$("#reinvest").submit();
		});

		$('#reinvest').submit(function(event) {
			event.preventDefault();
			reinvest();
		});

		$("#withdraw_button").click(function(event) {
			//$("#withdraw_form").submit();
		});


		$(".mn__withdrawal-btn").click(function(event) {
			$(".modal__overflow-layer").addClass("visible");
			$(".modal__withdraw").addClass("visible");

			let cur = $(this).data('currency');
			let am = $(this).data('amount');

			if (cur == "usdt") {
				cur = "usdt.trc20"
			}

			if (am < 0) {
				am = "0.00000000"
			}

			$("#withdrawlist li").removeClass('check');
			$("#withdrawlist li[data-currency='" + cur + "']").addClass("check");
			$("#summ").text(am + " " + cur.toUpperCase());
			$("#withdraw_amount").val(am);

			$("#withdraw_cur").val(cur);

			if (cur == 'xrp') {
				$('#wd_tag').show();
			} else {
				$('#wd_tag').hide();
			}
		});


		$(".amount__drop-list li").click(function() {
			$(".amount__drop-list li").removeClass("check");
			$(this).toggleClass("check");

			var amount = $(".mn__withdrawal-btn[data-currency='" + $(this).data('currency') + "']").data('amount');

			$("#withdraw_cur").val($(this).data('currency'));

			$("#summ").text(amount + " " + $(this).data('currency').toUpperCase());
			$("#withdraw_amount").val(amount);

			if ($(this).data('currency') == 'xrp') {
				$('#wd_tag').show();
			} else {
				$('#wd_tag').hide();
			}

		});

		$(".drop__down").click(function(){  
			$(".drop__down").toggleClass("visible");     
		});



	</script>

	<script>
		loadTransactionsData();
	</script>


<!-- <footer class="footer">
	<div class="container">
		<div class="footer__row d-flex align-items-center flex-wrap">
			<div class="col-xl-auto col-12 d-flex justify-content-center">
				<a href="" class="footer__logo">
					<img src="{{asset('')}}main/images/logo.svg" alt="">
				</a>
			</div>

			<div class="line"></div>
			<ul class="footer__menu">
				<li>
					<a href="/video">
						<div class="video_bg">
							<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
						</div>
						<img src="{{asset('')}}main/images/video_icon.svg" alt="">
						Live-video
					</a>
				</li>
				<li class="">
					<a href="/news"> News </a>
				</li>
				<li class="">
					<a href="/faq"> FaQ </a>
				</li>
			</ul>
			<div class="footer__social">
			    <a href="mailto:support@mail.mintbit.co" target="_blank" rel="noopener noreferrer">
					<span>support@mail.mintbit.co</span>
				</a>
				<a href="https://facebook.com/profile.php/?id=61557032113574&amp;name=xhp_nt__fb__action__open_user" target="_blank" rel="noopener noreferrer">
					<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.5 18.8706C3.25 18.1206 0 14.4206 0 9.97058C0 5.02058 4.05 0.970581 9 0.970581C13.95 0.970581 18 5.02058 18 9.97058C18 14.4206 14.75 18.1206 10.5 18.8706L10 18.4706H8L7.5 18.8706Z" fill="#272443"></path>
						<path d="M12.5 12.4705L12.9 9.97046H10.5V8.22046C10.5 7.52046 10.75 6.97046 11.85 6.97046H13V4.67046C12.35 4.57046 11.65 4.47046 11 4.47046C8.95 4.47046 7.5 5.72046 7.5 7.97046V9.97046H5.25V12.4705H7.5V18.8205C8 18.9205 8.5 18.9705 9 18.9705C9.5 18.9705 10 18.9205 10.5 18.8205V12.4705H12.5Z" fill="#DFDFFF"></path>
					</svg>

					<span> Facebook </span>
					<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543" stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
				<a href="https://twitter.com/MintBit_co" target="_blank" rel="noopener noreferrer">
					<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.6849 8.59958L18.3869 0.970581H16.7993L10.9775 7.59338L6.3311 0.970581H0.970703L7.9985 10.9864L0.970703 18.9856H2.5583L8.7023 11.9902L13.6103 18.9856H18.9707M3.1313 2.14298H5.5703L16.7981 17.8708H14.3585" fill="#272443"></path>
					</svg>

					<span>Twitter</span>
					<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543" stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
				<a href="https://instagram.com/mintbit.co.official/" target="_blank" rel="noopener noreferrer">
					<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.00005 2.5922C11.4031 2.5922 11.6878 2.60138 12.6368 2.64468C13.5143 2.68469 13.9909 2.83131 14.308 2.95456C14.7281 3.11783 15.0279 3.31286 15.3428 3.62778C15.6578 3.94273 15.8528 4.24254 16.0161 4.66264C16.1393 4.97977 16.2859 5.45632 16.326 6.33381C16.3693 7.28282 16.3784 7.56748 16.3784 9.97056C16.3784 12.3737 16.3693 12.6583 16.326 13.6074C16.2859 14.4848 16.1393 14.9614 16.0161 15.2785C15.8528 15.6986 15.6578 15.9984 15.3429 16.3133C15.0279 16.6283 14.7281 16.8233 14.308 16.9866C13.9909 17.1099 13.5143 17.2565 12.6368 17.2965C11.6879 17.3398 11.4033 17.349 9.00005 17.349C6.59675 17.349 6.31215 17.3398 5.36325 17.2965C4.48575 17.2565 4.00921 17.1099 3.69207 16.9866C3.27197 16.8233 2.97216 16.6283 2.65724 16.3133C2.34232 15.9984 2.14726 15.6986 1.98399 15.2785C1.86074 14.9614 1.71412 14.4848 1.67411 13.6074C1.63081 12.6583 1.62162 12.3737 1.62162 9.97056C1.62162 7.56748 1.63081 7.28282 1.67411 6.33381C1.71412 5.45632 1.86074 4.97977 1.98399 4.66264C2.14726 4.24254 2.34228 3.94273 2.65724 3.62781C2.97216 3.31286 3.27197 3.11783 3.69207 2.95456C4.00921 2.83131 4.48575 2.68469 5.36325 2.64468C6.31226 2.60138 6.59692 2.5922 9.00005 2.5922ZM9.00005 0.970581C6.55577 0.970581 6.24928 0.980941 5.28933 1.02474C4.33138 1.06843 3.67714 1.22059 3.10467 1.44305C2.51284 1.67305 2.01093 1.98079 1.51055 2.48113C1.01021 2.9815 0.702474 3.48341 0.472508 4.07524C0.250008 4.64771 0.0978526 5.30195 0.0541601 6.25989C0.0103604 7.21984 0 7.52633 0 9.97056C0 12.4148 0.0103604 12.7213 0.0541601 13.6813C0.0978526 14.6392 0.250008 15.2935 0.472508 15.8659C0.702474 16.4578 1.01021 16.9597 1.51055 17.46C2.01093 17.9604 2.51284 18.2681 3.10467 18.4981C3.67714 18.7206 4.33138 18.8727 5.28933 18.9164C6.24928 18.9602 6.55577 18.9706 9.00005 18.9706C11.4443 18.9706 11.7508 18.9602 12.7107 18.9164C13.6687 18.8727 14.3229 18.7206 14.8954 18.4981C15.4872 18.2681 15.9891 17.9604 16.4895 17.46C16.9898 16.9597 17.2976 16.4578 17.5276 15.8659C17.75 15.2935 17.9022 14.6392 17.9459 13.6813C17.9897 12.7213 18.0001 12.4148 18.0001 9.97056C18.0001 7.52633 17.9897 7.21984 17.9459 6.25989C17.9022 5.30195 17.75 4.64771 17.5276 4.07524C17.2976 3.48341 16.9898 2.9815 16.4895 2.48113C15.9891 1.98079 15.4872 1.67305 14.8954 1.44305C14.3229 1.22059 13.6687 1.06843 12.7107 1.02474C11.7508 0.980941 11.4443 0.970581 9.00005 0.970581Z" fill="#272443"></path>
						<path d="M9.00398 5.35327C6.45148 5.35327 4.38232 7.42242 4.38232 9.97487C4.38232 12.5274 6.45148 14.5965 9.00398 14.5965C11.5564 14.5965 13.6256 12.5274 13.6256 9.97487C13.6256 7.42242 11.5564 5.35327 9.00398 5.35327ZM9.00398 12.9749C7.34709 12.9749 6.00395 11.6318 6.00395 9.97487C6.00395 8.31803 7.34709 6.97489 9.00398 6.97489C10.6608 6.97489 12.004 8.31803 12.004 9.97487C12.004 11.6318 10.6608 12.9749 9.00398 12.9749Z" fill="#272443"></path>
						<path d="M14.888 5.16779C14.888 5.76423 14.4045 6.24778 13.808 6.24778C13.2116 6.24778 12.728 5.76423 12.728 5.16779C12.728 4.57131 13.2116 4.08777 13.808 4.08777C14.4045 4.08777 14.888 4.57131 14.888 5.16779Z" fill="#272443"></path>
					</svg>

					<span>Instagram</span>
					<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543" stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
				<a href="https://t.me/+N0PipUltKz5lMDIy" target="_blank" rel="noopener noreferrer">
					<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.42401 8.71954C8.32957 6.17934 12.2675 4.50469 14.2379 3.69558C19.8637 1.3854 21.0327 0.984102 21.7947 0.97071C21.9622 0.967936 22.3369 1.00894 22.5797 1.20338C22.7846 1.36755 22.841 1.58934 22.868 1.745C22.895 1.90066 22.9286 2.25525 22.9018 2.53232C22.597 5.69477 21.2778 13.3692 20.6067 16.9112C20.3228 18.41 19.7636 18.9125 19.2223 18.9617C18.0459 19.0685 17.1526 18.1941 16.0132 17.4567C14.2302 16.3029 13.2229 15.5846 11.4923 14.4586C9.4922 13.1574 10.7888 12.4422 11.9286 11.2734C12.2269 10.9675 17.4102 6.31293 17.5105 5.89069C17.5231 5.83788 17.5347 5.64103 17.4163 5.53709C17.2978 5.43315 17.123 5.4687 16.9968 5.49697C16.818 5.53703 13.9697 7.39568 8.45197 11.0729C7.64349 11.621 6.9112 11.888 6.25509 11.874C5.53178 11.8586 4.14042 11.4703 3.10609 11.1383C1.83745 10.7312 0.829151 10.5159 0.916951 9.8245C0.962682 9.46435 1.46503 9.09603 2.42401 8.71954Z" fill="#272443"></path>
					</svg>

					<span>Telegrram</span>
					<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543" stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
			</div>
			<div class="line"></div>
			<p class="copyright">© 2023 MintBit</p>
		</div>
	</div>
</footer> -->

		
</body></html>