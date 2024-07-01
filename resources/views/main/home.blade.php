@include('layouts.mainsite.header')
<script>
	$('.home_page').addClass('current_menu');
</script>

<section class="head__section head__section_main lzy_img_bl">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-5 col-lg-6 offer">
				<p class="offer__label ff_tt">
					<img src="{{asset('')}}main/images/offer_label.svg" width="50" alt="" />
					<span>Vanguard Elite</span>
				</p>
				<h1>
					<img src="{{asset('')}}main/images/head_text_icon.svg" alt="" />
					<span> cloud mining service </span>
				</h1>
				<p class="offer__subtitle">
					Our platform provides remote equipment for cryptocurrency mining. Start earning on mining.
				</p>
				<div class="offer__btns d-flex flex-column flex-sm-row align-items-center">
				    
				    
					
					<a href="/signup" class="btn btn_dark me-sm-3 mb-3 mb-sm-0">
						Start Mining
					</a>
					<a href="/signup" class="btn">
						<div class="btn__icon">
							<img src="{{asset('')}}main/images/head_btn_icon.png" width="32" height="32" alt="" />
							<img src="{{asset('')}}main/images/head_btn_icon.png" width="32" height="32" alt="" />
						</div>

						Sign up 
					</a>

									    

				</div>
			</div>
			<div class="col-lg-6 col-xl-7 d-flex justify-content-lg-end justify-content-center">
				<img src="{{asset('')}}main/images/head_img.png" class="offer__img" width="643" alt="MintBit.io" />
			</div>
		</div>
	</div>
</section>
<section class="video pt_60">
	<div class="container">
		<div class="video__wrap pos_rel">
			<div class="video__btn pos_rel gotovideo">
				<div class="video_bg">
					<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
				</div>
				<img src="{{asset('')}}main/images/video_icon_dark.svg" alt="" />
				<p>Live-video</p>
			</div>
			<div class="video__block">
				<p>
					Watch the <br />
					online broadcast now
				</p>
				<div class="video__elem bg__style lzy_bg gotovideo" data-image="{{asset('')}}main/images/video_elem_bg.jpg">
					<p class="video__live">Live</p>
					<!--video src=""></video-->
					
		                  <iframe style="margin-left: -110px;margin-top: -20px;" loading="lazy" width="590" height="345" src="https://public.ivideon.com/camera/100-waN56OvdX43Lft96Vrpkrd/65536/?lang=en" ;="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="videoramka"></iframe>
					<button class="video__play">
						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
							<path
								d="M30.2632 14.9098C34.3567 17.4246 34.3567 23.7116 30.2632 26.2264L19.2105 33.0164C15.117 35.5312 10 32.3877 10 27.3581L10 13.7782C10 8.74858 15.117 5.60509 19.2105 8.11989L30.2632 14.9098Z"
								fill="#BABAFF" />
						</svg>
					</button>
				</div>
			</div>
			<a href="">
    			<p class="video__watch">
    				<img src="{{asset('')}}main/images/video_icon_btn.svg" alt="" />
    				Watch video now
    			</p>
			</a>
		</div>
	</div>
</section>
<section class="about" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-xl-6 pos_rel order-1 order-lg-0">
				<div class="about__img">
					<img src="{{asset('')}}main/images/abouticon.png" alt="" />
				</div>
			</div>
			<div class="col-lg-7 col-xl-6">
				<div class="section__title">
					<img src="{{asset('')}}main/images/about_icon.svg" alt="" />
					<span> About Us </span>
				</div>
				<div class="text__content mb_30">
					<p>                        
					Vanguard Elite is a dynamic and innovative multilevel marketing platform dedicated to helping individuals achieve financial independence and success. Founded on the principles of integrity, transparency, and mutual growth, we are committed to creating a supportive environment where our members can thrive.
                    </p>
					<p>                        
                    Our mission is to empower entrepreneurs with the tools, resources, and community support they need to build prosperous network marketing businesses. At Vanguard Elite, we believe in the power of collective effort and the potential of each individual to reach new heights.
                    </p>
					<p>                        
                    Our comprehensive training programs, cutting-edge marketing tools, and tiered commission structure are designed to ensure that every member has the opportunity to succeed. Join us at Vanguard Elite and become a part of a family that values your growth and celebrates your achievements. Together, we can reach new pinnacles of success.
                    </p>
                    <p><a href="/about"> And more!</a></p>
				</div>
				<div class="about__social">
					<a href="" target="_blank" rel="noopener noreferrer">
						<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M7.5 18.8706C3.25 18.1206 0 14.4206 0 9.97058C0 5.02058 4.05 0.970581 9 0.970581C13.95 0.970581 18 5.02058 18 9.97058C18 14.4206 14.75 18.1206 10.5 18.8706L10 18.4706H8L7.5 18.8706Z"
								fill="#272443" />
							<path
								d="M12.5 12.4705L12.9 9.97046H10.5V8.22046C10.5 7.52046 10.75 6.97046 11.85 6.97046H13V4.67046C12.35 4.57046 11.65 4.47046 11 4.47046C8.95 4.47046 7.5 5.72046 7.5 7.97046V9.97046H5.25V12.4705H7.5V18.8205C8 18.9205 8.5 18.9705 9 18.9705C9.5 18.9705 10 18.9205 10.5 18.8205V12.4705H12.5Z"
								fill="#DFDFFF" />
						</svg>

						<span> Facebook </span>
						<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543"
								stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
					<a href="" target="_blank" rel="noopener noreferrer">
						<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M11.6849 8.59958L18.3869 0.970581H16.7993L10.9775 7.59338L6.3311 0.970581H0.970703L7.9985 10.9864L0.970703 18.9856H2.5583L8.7023 11.9902L13.6103 18.9856H18.9707M3.1313 2.14298H5.5703L16.7981 17.8708H14.3585"
								fill="#272443" />
						</svg>

						<span>Twitter</span>
						<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543"
								stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
					<a href="" target="_blank" rel="noopener noreferrer">
						<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M9.00005 2.5922C11.4031 2.5922 11.6878 2.60138 12.6368 2.64468C13.5143 2.68469 13.9909 2.83131 14.308 2.95456C14.7281 3.11783 15.0279 3.31286 15.3428 3.62778C15.6578 3.94273 15.8528 4.24254 16.0161 4.66264C16.1393 4.97977 16.2859 5.45632 16.326 6.33381C16.3693 7.28282 16.3784 7.56748 16.3784 9.97056C16.3784 12.3737 16.3693 12.6583 16.326 13.6074C16.2859 14.4848 16.1393 14.9614 16.0161 15.2785C15.8528 15.6986 15.6578 15.9984 15.3429 16.3133C15.0279 16.6283 14.7281 16.8233 14.308 16.9866C13.9909 17.1099 13.5143 17.2565 12.6368 17.2965C11.6879 17.3398 11.4033 17.349 9.00005 17.349C6.59675 17.349 6.31215 17.3398 5.36325 17.2965C4.48575 17.2565 4.00921 17.1099 3.69207 16.9866C3.27197 16.8233 2.97216 16.6283 2.65724 16.3133C2.34232 15.9984 2.14726 15.6986 1.98399 15.2785C1.86074 14.9614 1.71412 14.4848 1.67411 13.6074C1.63081 12.6583 1.62162 12.3737 1.62162 9.97056C1.62162 7.56748 1.63081 7.28282 1.67411 6.33381C1.71412 5.45632 1.86074 4.97977 1.98399 4.66264C2.14726 4.24254 2.34228 3.94273 2.65724 3.62781C2.97216 3.31286 3.27197 3.11783 3.69207 2.95456C4.00921 2.83131 4.48575 2.68469 5.36325 2.64468C6.31226 2.60138 6.59692 2.5922 9.00005 2.5922ZM9.00005 0.970581C6.55577 0.970581 6.24928 0.980941 5.28933 1.02474C4.33138 1.06843 3.67714 1.22059 3.10467 1.44305C2.51284 1.67305 2.01093 1.98079 1.51055 2.48113C1.01021 2.9815 0.702474 3.48341 0.472508 4.07524C0.250008 4.64771 0.0978526 5.30195 0.0541601 6.25989C0.0103604 7.21984 0 7.52633 0 9.97056C0 12.4148 0.0103604 12.7213 0.0541601 13.6813C0.0978526 14.6392 0.250008 15.2935 0.472508 15.8659C0.702474 16.4578 1.01021 16.9597 1.51055 17.46C2.01093 17.9604 2.51284 18.2681 3.10467 18.4981C3.67714 18.7206 4.33138 18.8727 5.28933 18.9164C6.24928 18.9602 6.55577 18.9706 9.00005 18.9706C11.4443 18.9706 11.7508 18.9602 12.7107 18.9164C13.6687 18.8727 14.3229 18.7206 14.8954 18.4981C15.4872 18.2681 15.9891 17.9604 16.4895 17.46C16.9898 16.9597 17.2976 16.4578 17.5276 15.8659C17.75 15.2935 17.9022 14.6392 17.9459 13.6813C17.9897 12.7213 18.0001 12.4148 18.0001 9.97056C18.0001 7.52633 17.9897 7.21984 17.9459 6.25989C17.9022 5.30195 17.75 4.64771 17.5276 4.07524C17.2976 3.48341 16.9898 2.9815 16.4895 2.48113C15.9891 1.98079 15.4872 1.67305 14.8954 1.44305C14.3229 1.22059 13.6687 1.06843 12.7107 1.02474C11.7508 0.980941 11.4443 0.970581 9.00005 0.970581Z"
								fill="#272443" />
							<path
								d="M9.00398 5.35327C6.45148 5.35327 4.38232 7.42242 4.38232 9.97487C4.38232 12.5274 6.45148 14.5965 9.00398 14.5965C11.5564 14.5965 13.6256 12.5274 13.6256 9.97487C13.6256 7.42242 11.5564 5.35327 9.00398 5.35327ZM9.00398 12.9749C7.34709 12.9749 6.00395 11.6318 6.00395 9.97487C6.00395 8.31803 7.34709 6.97489 9.00398 6.97489C10.6608 6.97489 12.004 8.31803 12.004 9.97487C12.004 11.6318 10.6608 12.9749 9.00398 12.9749Z"
								fill="#272443" />
							<path
								d="M14.888 5.16779C14.888 5.76423 14.4045 6.24778 13.808 6.24778C13.2116 6.24778 12.728 5.76423 12.728 5.16779C12.728 4.57131 13.2116 4.08777 13.808 4.08777C14.4045 4.08777 14.888 4.57131 14.888 5.16779Z"
								fill="#272443" />
						</svg>

						<span>Instagram</span>
						<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543"
								stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
					<a href="" target="_blank" rel="noopener noreferrer">
						<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M2.42401 8.71954C8.32957 6.17934 12.2675 4.50469 14.2379 3.69558C19.8637 1.3854 21.0327 0.984102 21.7947 0.97071C21.9622 0.967936 22.3369 1.00894 22.5797 1.20338C22.7846 1.36755 22.841 1.58934 22.868 1.745C22.895 1.90066 22.9286 2.25525 22.9018 2.53232C22.597 5.69477 21.2778 13.3692 20.6067 16.9112C20.3228 18.41 19.7636 18.9125 19.2223 18.9617C18.0459 19.0685 17.1526 18.1941 16.0132 17.4567C14.2302 16.3029 13.2229 15.5846 11.4923 14.4586C9.4922 13.1574 10.7888 12.4422 11.9286 11.2734C12.2269 10.9675 17.4102 6.31293 17.5105 5.89069C17.5231 5.83788 17.5347 5.64103 17.4163 5.53709C17.2978 5.43315 17.123 5.4687 16.9968 5.49697C16.818 5.53703 13.9697 7.39568 8.45197 11.0729C7.64349 11.621 6.9112 11.888 6.25509 11.874C5.53178 11.8586 4.14042 11.4703 3.10609 11.1383C1.83745 10.7312 0.829151 10.5159 0.916951 9.8245C0.962682 9.46435 1.46503 9.09603 2.42401 8.71954Z"
								fill="#272443" />
						</svg>

						<span>Telegrram</span>
						<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543"
								stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
					<a href="" target="_blank" rel="noopener noreferrer">
						<svg width="22" height="22" fill="#272443" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        	 viewBox="0 0 24 24" xml:space="preserve">
                        <style type="text/css">
                        	.st0{fill:none;}
                        </style>
                        <path d="M21,11c0,6.7-4.3,6.4-4.8,6.4c-0.6,0-1.1-0.1-1.6-0.4c-0.4-0.3-0.8-0.6-1-1.1c-0.4,0.5-0.8,0.9-1.3,1.1
                        	c-0.5,0.3-1,0.4-1.6,0.4c-0.5,0-1-0.1-1.4-0.3c-0.4-0.2-0.8-0.6-1-1c-0.3-0.4-0.5-0.9-0.6-1.5c-0.1-0.6-0.1-1.3-0.1-2
                        	c0.1-0.9,0.3-1.7,0.6-2.5c0.3-0.7,0.7-1.4,1.1-1.9c0.4-0.5,0.9-0.9,1.5-1.2c0.6-0.3,1.2-0.4,1.8-0.4c2,0,3.1,1,3.3,1.2L15.4,14
                        	c0,0.4-0.2,1.8,1.1,1.8c0.4,0,2.4-0.5,2.4-4.7c0-0.1,0.9-7-6.6-7C6.3,4,5,9.9,5,12c0,8.4,5.3,8,7,8c2,0,3.1-0.4,3.3-0.5l0.4,1.8
                        	C15.5,21.5,14.5,22,12,22c-3.1,0-9-0.1-9-10c0-1.4,0.8-10,9.5-10C20.8,2,21,9.6,21,11z M10.1,12.6c-0.1,0.9,0,1.7,0.2,2.2
                        	c0.2,0.5,0.6,0.7,1.2,0.7c1.1,0,1.7-1.4,1.8-1.8l0.5-5.1c-0.1,0-0.7-0.1-0.9-0.1c-0.8,0-1.5,0.4-1.9,1.1
                        	C10.5,10.2,10.2,11.2,10.1,12.6z"/>
                        <rect class="st0" width="24" height="24"/>
                        </svg>

						<span>Email</span>
						<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M1.02227 8.85968L8.80045 1.0815M8.80045 1.0815L2.72765 1.49745M8.80045 1.0815L8.3845 7.1543"
								stroke="#272443" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="benefits" id="benefits">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-4 col-sm-6">
				<div class="benefits__item benefits__item_1 mb_30">
					<div class="d-flex align-items-xl-center">
						<p class="benefits__number">01</p>
						<div class="benefits__content">
							<p class="benefits__name">Target bonus</p>
							<p class="d-flex benefits__subscribe">
								<img src="{{asset('')}}main/images/target_icon.svg" alt="" />
								<span>Hover over the card to learn more.</span>
							</p>
							<span></span>
							<span class="last"></span>
						</div>
					</div>
					<img src="{{asset('')}}main/images/target_item_bg.png" class="benefits__bg" alt="" />
				</div>
				<div class="benefits__item benefits__item_2 mb_30">
					<div class="d-flex align-items-xl-center">
						<p class="benefits__number">02</p>
						<div class="benefits__content">
							<p class="benefits__name">Target bonus</p>
							<p class="d-flex benefits__subscribe">
								<img src="{{asset('')}}main/images/target_icon.svg" alt="" />
								<span>Hover over the card to learn more.</span>
							</p>
							<span></span>
							<span class="last"></span>
						</div>
					</div>
					<img src="{{asset('')}}main/images/target_item_bg.png" class="benefits__bg" alt="" />
				</div>
				<div class="benefits__item benefits__item_3 mb_30 ms-lg-auto">
					<div class="d-flex align-items-xl-center">
						<p class="benefits__number">03</p>
						<div class="benefits__content">
							<p class="benefits__name">Target bonus</p>
							<p class="d-flex benefits__subscribe">
								<img src="{{asset('')}}main/images/target_icon.svg" alt="" />
								<span>Hover over the card to learn more.</span>
							</p>
							<span></span>
							<span class="last"></span>
						</div>
					</div>
					<img src="{{asset('')}}main/images/target_item_bg.png" class="benefits__bg" alt="" />
				</div>
			</div>
			<div class="col-lg-4 col-sm-6" style="margin: auto 0;">
				<div class="benefits__item benefits__item_4 mb_30 ms-lg-auto">
					<div class="d-flex align-items-xl-center">
						<p class="benefits__number">04</p>
						<div class="benefits__content">
							<p class="benefits__name">Target bonus</p>
							<p class="d-flex benefits__subscribe">
								<img src="{{asset('')}}main/images/target_icon.svg" alt="" />
								<span>Hover over the card to learn more.</span>
							</p>
							<span></span>
							<span class="last"></span>
						</div>
					</div>
					<img src="{{asset('')}}main/images/target_item_bg.png" class="benefits__bg" alt="" />
				</div>
				<div class="benefits__item benefits__item_5 mb_30" style="transform: translateX(90px);">
					<div class="d-flex align-items-xl-center">
						<p class="benefits__number">05</p>
						<div class="benefits__content">
							<p class="benefits__name">Target bonus</p>
							<p class="d-flex benefits__subscribe">
								<img src="{{asset('')}}main/images/target_icon.svg" alt="" />
								<span>Hover over the card to learn more.</span>
							</p>
							<span></span>
							<span class="last"></span>
						</div>
					</div>
					<img src="{{asset('')}}main/images/target_item_bg.png" class="benefits__bg" alt="" />
				</div
				<div class="benefits__item benefits__item_5 mb_30 ms-lg-auto" style="transform: translateX(30px);">
					<div class="d-flex align-items-xl-center">
						<p class="benefits__number"></p>
						<div class="benefits__content">
							<p class="benefits__name"></p>
							<p class="d-flex benefits__subscribe">
								<img src="{{asset('')}}main/images/target_icon.svg" alt="" />
								<span></span>
							</p>
							<span></span>
							<span class="last"></span>
						</div>
					</div>
					<img src="{{asset('')}}main/images/target_item_bg.png" class="benefits__bg" alt="" />
				</div>
			</div>
		</div>
	</div>
	<div class="benefits__center">
		<span class="benefits_circle1"></span>
		<span class="benefits_circle2"></span>
		<span class="benefits_circle3"></span>
		<p class="benefits__center_text">
			Vanguard <br />
			Program
		</p>
		<div class="benefits__info text_center" id="benefits__info1"
		
		data-text="We are pleased to announce the launch of a new Bonus program on the MintBit cryptocurrency mining platform! You can now earn bonuses by creating informative videos about MintBit and making them available to everyone!

            To become a member of the Bonus Program, you need to create a review video about MintBit that is at least 5 minutes long and publish it on your YouTube channel. In this video, you should inform new users about the benefits of the platform and explain why MintBit is the best choice for cryptocurrency mining.
            
            You must include your referral link in the video description, which you can find in your personal account on the MintBit website. After publishing the video, send the link to our support team. Only one video per week is allowed.
            
            As soon as our operator processes your link, you will automatically receive a bonus of 30MH/s ($5) credited to your account! This is a great opportunity not only to share your experience with others, but also to receive additional income. This bonus can only be received once a week.
            
            Join the MintBit Rewards Program now and start earning bonuses for informational videos! Don't miss your chance to become part of our friendly and profitable community.
		
		";
		
		>
			<img src="{{asset('')}}main/images/target_logo.svg" width="50" height="auto" alt="" />
			<h3>Leadership Bonus</h3>
			<div class="text__content">
				<p>
				Daily Leadership Bonus<br><br> 
					
As a leader in our network, you'll receive a daily leadership bonus from your team's daily returns. This bonus is designed to reward your efforts in building and supporting your network.
                    <br><br>
				    Click to learn more!
				</p>
			</div>
		</div>
		<div class="benefits__info text_center" id="benefits__info2"
		
		data-text="We are excited to announce the launch of a new and engaging Bonus Program on the MintBit cryptocurrency mining platform! Now you have a unique opportunity to earn additional bonuses simply by creating a topic on the forum and actively participating in it. BONUS 20 MH/s  = $3.5
            
            To participate in the Bonus Program, create a new topic on forum dedicated to discussing the MintBit platform and its features. Your topic should be informative, interesting, and engaging for other forum participants.
            
            Actively engage in discussions within your topic, answer questions from other participants, share your experience and knowledge about MintBit. The more you interact with other participants, the more chances you have to earn additional bonuses!
            
            Your topic must include your referral link to the MintBit platform. This is necessary to confirm your identity and credit bonuses.
            
            Once you have created a topic on the forum and actively participated in it, send us the link to your topic to our technical support. Once our operator processes your link, you will automatically receive a bonus credited to your balance 20 Mh/s  = $3.5 ! This bonus can only be received once a week.
            
            Join the MintBit Bonus Program now and start earning additional bonuses for active participation on the forum! Don't miss your chance to become part of our friendly and profitable community.

		
		";
		
		>
			<img src="{{asset('')}}main/images/target_logo.svg" width="50" height="auto" alt="" />
			<h3>Referral Bonus</h3>
			<div class="text__content">
				<p>Direct Referral Bonus<br><br>
				For example, if your direct referral invests $10,000 and earns $100 daily, you will receive $30 (30% of $100) daily. This bonus continues as long as your referral earns a daily return.
                    <br><br>
				    Click to learn more!
				</p>
			</div>
		</div>

		<div class="benefits__info text_center" id="benefits__info3"
		
		data-text="We are excited to announce the launch of our new Bonus Program on the MintBit cryptocurrency mining platform! Now you can earn additional bonuses for your activity on social media. BONUS 6 MH/s = 1$

            Participating in the Bonus Program is very simple. You just need to follow our official account on social media platforms, and then regularly post our news and retweet our messages.
            
            The more active you are on social media, the more bonuses you can earn! Each of your posts and retweets will be evaluated and rewarded.
            
            Don't miss the chance to earn extra bonuses for your activity on social media! Join our Bonus Program now and start earning even more with MintBit!
            
            Stay tuned for our news on social media and participate in the Bonus Program today!
		
		";
		>
			<img src="{{asset('')}}main/images/target_logo.svg" width="50" height="auto" alt="" />
			<h3>Extended Referral</h3>
			<div class="text__content">
				<p>Extended Referral Bonuses<br><br>
				Your Referrals: Earn 30% of their daily returns.
Their Referrals: Earn 10% of their daily returns.
And Theirs: Earn 2.5% of their daily returns.
And Theirs: Earn 2.5% of their daily returns.
And Theirs: Earn 2.5% of their daily returns.
                    <br><br>
				    Click to learn more!
				</p>
			</div>
		</div>
		<div class="benefits__info text_center" id="benefits__info4"
		
		data-text="Guaranteed and Free Bonus +$3
            		
            We are pleased to announce the launch of a new and exciting Bonus Program on our MintBit cryptocurrency mining platform! Starting from today, every participant on our platform has the opportunity to earn additional bonuses by inviting new users and making them active members of our community.
            
            One of the key advantages of our Bonus Program is a guaranteed bonus of +$3 for each active first-level referral. To become an active referral, a new participant must make a minimum deposit on the platform. After that, as the inviting member, you will receive +$3. This means that your profit will proportionally increase with each active first-level referral you invite.
            
            We aim to make the process of earning from cryptocurrency mining even more accessible and attractive for our participants. Therefore, our Bonus Program is designed with the interests and needs of each user in mind.
            
            Don't miss the opportunity to increase your profit and become part of our successful team! Join the MintBit Bonus Program right now and start earning more with us!

		
		";>
			<img src="{{asset('')}}main/images/target_logo.svg" width="50" height="auto" alt="" />
			<h3>Target bonus 4</h3>
			<div class="text__content">
				<p>Unlimited Width
					<br><br>
                    Your leadership bonuses are not limited to a specific number of referrals. You can build your network as wide as you wish, and you will continue to earn from each referral's daily returns.
					<br><br>
				    Click to learn more!
				</p>
			</div>
		</div>
		
		<div class="benefits__info text_center" id="benefits__info5"
		
		data-text="📣 Promotional materials - double bonus! 🚀

        Place our banners and get a double bonus! 💰💰
        
        You can find all banners by logging into your account and going to the `Affiliate Program` page and clicking on the `Promo material` button
        
        👉👉👉 The conditions are simple:
        
        1️⃣. Place the MintBit.co platform banner on any platforms you will receive a bonus of 30Mh/s ($5).💰💰💰
        
        2️⃣.You are guaranteed to receive +$3 for each active referral who registers using your referral link from the banner and makes a minimum deposit.💰💰💰
        
        
        To receive a bonus, simply send a link to the resource where you placed the banner to our technical support in telegram <a href='https://t.me/mintbit_support'>https://t.me/mintbit_support</a>
        
        Don't miss a great chance to double your profits.✅✅✅

		
		";>
			<img src="{{asset('')}}main/images/target_logo.svg" width="50" height="auto" alt="" />
			<h3>Target bonus 5</h3>
			<div class="text__content">
				<p>
					📣 Additional Bonus 🚀
					<br><br>
                    Additional Bonus 💰💰
                    <br><br>
                    Earn an additional $2 from the daily returns of even further levels of referrals, ensuring continuous growth and earnings.
					<br><br>
				    Click to learn more!
				</p>
			</div>
		</div>
	</div>
</section>
<section class="affiliate lzy_bg_container" id="affiliate" style="padding-top: 140px;">
	<img src="{{asset('')}}main/images/affilate_bg_line.svg" class="affilate_bg_line" alt="" />
	<div class="container">
		<div class="affiliate__offer">
			<img src="{{asset('')}}main/images/affiliate_title_img.png" class="affiliate__title_bg" alt="" />
			<h2>Affiliate Program</h2>
			<p class="text_right">New opportunities</p>
		</div>
		<div class="col-xl-10 mx-auto">
			<div class="row">
		    	<div class="col-lg-2 d-flex">
			    </div>
				<div class="col-lg-8 d-flex mb-3 mb-lg-0">
					<div class="bg__style lzy_bg affiliate__item" data-image="{{asset('')}}main/images/affilate_bgtest.png">
						<h3 class="affiliate__name">Referral levels</h3>
						<p class="affiliate__subname">
							We are excited to introduce our innovative Аffiliate program that consists of SIX levels, providing generous rewards.

						</p>
						<div class="affiliate__swiper swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="affiliate__slide bg__style lzy_bl"
										data-image="{{asset('')}}main/images/affilate_slide_bg.jpg">
										<p class="affiliate__level">1 level</p>
										<p class="affiliate__percent">30<span>%</span></p>
										<p style="font-size: 16px;color: #7e7ee2;border-radius: 25px;height: 24px;display: flex;align-items: center;padding-bottom: 10px;width: max-content;margin: 0 auto; font-weight: 700;">Earn $100 fron your DIrect referrals</p>
										<button class="affiliate__invite">Invite</button>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="affiliate__slide bg__style lzy_bl"
										data-image="{{asset('')}}main/images/affilate_slide_bg.jpg">
										<p class="affiliate__level">2 level</p>
										<p class="affiliate__percent" style="margin: 10px;">10<span>%</span></p>
										<button class="affiliate__invite">Invite</button>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="affiliate__slide bg__style lzy_bl"
										data-image="{{asset('')}}main/images/affilate_slide_bg.jpg">
										<p class="affiliate__level">3 level</p>
										<p class="affiliate__percent" style="margin: 10px;">2.5<span>%</span></p>
										<button class="affiliate__invite">Invite</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 d-flex">
			    </div>
				
				<script data-cfasync="false" src="{{asset('')}}main/js/email-decode.min.js"></script><script>
				
				    $(".affiliate__invite").click( function(e) {
				        
    					                            window.location.href = "/register";
    					    				        
				    });
				
				</script>
				
				<div class="col-lg-6 d-flex" style="display: none !important;">
					<div class="bg__style lzy_bg affiliate__item" data-image="{{asset('')}}main/images/affilate_bgtest.png">
						<h3 class="affiliate__name">New allocation system</h3>
						<p class="affiliate__subname">
							Our platform provides remote equipment for cryptocurrency
							mining. Start earning on mining without the need to purchase
						</p>
						<div class="allocation__block">
							<img src="{{asset('')}}main/images/allocation_bg.png" class="allocation_bg" alt="" />
							<div class="allocation__top">
								<div class="allocation__item">
									<p>You'll get</p>
									<p>100<span>%</span></p>
								</div>
								<div class="allocation__item">
									<p>Friends get</p>
									<p>0<span>%</span></p>
								</div>
							</div>
							<div class="allocation__percent">
								<button>0%</button>
								<button>10%</button>
								<button>25%</button>
								<button>50%</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


		
<!-- <section class="calculate lzy_bg_container" id="calculator">
	<div class="container">
		<div class="calculate__bg">
			<img src="{{asset('')}}main/images/calc_left.svg" alt="" />
		</div>
		<div class="calculate__bg calculate__bg_right">
			<img src="{{asset('')}}main/images/calc_right.svg" alt="" />
		</div>
		<img src="{{asset('')}}main/images/calc_icon.svg" class="calculate__icon" alt="" />
		<h2 class="section__title text_center">Profit Сalculator</h2>
		<p class="fz_14 text_center calculate__subname">
            In the Profit Calculator, you can select a cryptocurrency from the list, enter the desired investment amount in that currency, and specify the number of days for which you want to calculate your profit. Immediately after that, you will receive the ready result on your screen - simply and quickly!
            <br>
            This tool will help you make informed decisions about your investments by providing you with accurate data on potential profits. We aim to make your experience on the MintBit platform even more transparent and profitable.
		</p>
		<div class="calculate__wrap">
			<div class="calculate__top row">
				<div class="col-lg-4">
					<div class="top__item" data-image="http://127.0.0.1:8000/main/images/calc_bg1.png" style="background-image: url(&quot;http://127.0.0.1:8000/main/images/calc_bg1.png&quot;);">
						<p class="top__name">Select currency:</p>
						<button class="chose__btn open_currency">
							<img class="selected_icon" src="http://127.0.0.1:8000/main/images/usdt.png" alt="">
							<span class="selected_name">usdt</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
								<path d="M4.4705 11.9339C5.33917 8.23067 8.23068 5.33916 11.9339 4.4705C14.6083 3.84317 17.3917 3.84317 20.0661 4.4705C23.7693 5.33916 26.6608 8.23068 27.5295 11.9339C28.1568 14.6083 28.1568 17.3917 27.5295 20.0661C26.6608 23.7693 23.7693 26.6608 20.0661 27.5295C17.3917 28.1568 14.6083 28.1568 11.9339 27.5295C8.23068 26.6608 5.33917 23.7693 4.4705 20.0661C3.84317 17.3917 3.84317 14.6083 4.4705 11.9339Z" stroke="#7E7EE2" stroke-width="2"></path>
								<path d="M19.3334 14.6667L16.0001 18L12.6667 14.6667" stroke="#7E7EE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</button>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="top__item" data-image="http://127.0.0.1:8000/main/images/calc_bg2.png" style="background-image: url(&quot;http://127.0.0.1:8000/main/images/calc_bg2.png&quot;);">
						<p class="top__name">Enter the amount:</p>
						<div class="d-flex align-items-center calc_input__wrap">
							<svg xmlns="http://www.w3.org/2000/svg" width="34" height="32" viewBox="0 0 34 32" fill="none">
								<path d="M2.56846 11.0105C3.6335 6.7214 7.03444 3.40512 11.3483 2.44923L12.0669 2.28999C15.3162 1.57 18.6836 1.57 21.9329 2.28999L22.6515 2.44923C26.9654 3.40512 30.3663 6.72141 31.4314 11.0105C32.245 14.2871 32.245 17.7129 31.4314 20.9895C30.3663 25.2786 26.9654 28.5949 22.6515 29.5508L21.9329 29.71C18.6836 30.43 15.3162 30.43 12.0669 29.71L11.3483 29.5508C7.03444 28.5949 3.6335 25.2786 2.56846 20.9895C1.75485 17.7129 1.75485 14.2871 2.56846 11.0105Z" stroke="#7E7EE2" stroke-width="2.375"></path>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17.0004 8.08325C17.6058 8.08325 18.0965 8.54557 18.0965 9.11586V9.96066H18.2179C20.2565 9.96066 21.75 11.6302 21.75 13.4966C21.75 14.0669 21.2592 14.5292 20.6538 14.5292C20.0485 14.5292 19.5577 14.0669 19.5577 13.4966C19.5577 12.5979 18.87 12.0259 18.2179 12.0259H18.0965V15.2767L19.5765 15.7837C20.9214 16.2444 21.75 17.4974 21.75 18.8243C21.75 20.5133 20.3964 22.0391 18.5305 22.0391H18.0965V22.884C18.0965 23.4543 17.6058 23.9166 17.0004 23.9166C16.395 23.9166 15.9042 23.4543 15.9042 22.884V22.0391H15.7821C13.7435 22.0391 12.25 20.3696 12.25 18.5032C12.25 17.9329 12.7408 17.4705 13.3462 17.4705C13.9515 17.4705 14.4423 17.9329 14.4423 18.5032C14.4423 19.4018 15.13 19.9738 15.7821 19.9738H15.9042V16.7233L14.4235 16.216C13.0786 15.7553 12.25 14.5024 12.25 13.1754C12.25 11.4864 13.6036 9.96066 15.4695 9.96066H15.9042V9.11586C15.9042 8.54557 16.395 8.08325 17.0004 8.08325ZM15.9042 12.0259H15.4695C14.99 12.0259 14.4423 12.4541 14.4423 13.1754C14.4423 13.727 14.7834 14.1418 15.1727 14.2751L15.9042 14.5257V12.0259ZM18.0965 17.4742V19.9738H18.5305C19.01 19.9738 19.5577 19.5456 19.5577 18.8243C19.5577 18.2727 19.2166 17.8579 18.8273 17.7246L18.0965 17.4742Z" fill="#7E7EE2"></path>
							</svg>
							<div class="placeholder__group_input">
								<input type="text" class="calc_input placeholder__input" id="invest_ammount">
								<p class="place_span fixed_span">Please enter amount...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="top__item mb-0" data-image="./images/calc_bg3.png" style="background-image: url(&quot;./images/calc_bg3.png&quot;);">
						<p class="top__name">Enter the days:</p>
						<div class="d-flex align-items-center calc_input__wrap">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32" fill="none">
								<path d="M2.06919 21.1434L3.22667 20.8781L2.06919 21.1434ZM2.06919 11.8093L3.22667 12.0746L2.06919 11.8093ZM27.9305 11.8093L26.773 12.0746L27.9305 11.8093ZM27.9305 21.1434L26.773 20.8781L27.9305 21.1434ZM19.5601 29.71L19.8373 30.8647L19.5601 29.71ZM10.4396 29.71L10.7168 28.5553L10.4396 29.71ZM10.4396 3.24276L10.7168 4.39745L10.4396 3.24276ZM19.5601 3.24276L19.8373 2.08806V2.08806L19.5601 3.24276ZM9.96496 1.75C9.96496 1.09416 9.4333 0.5625 8.77746 0.5625C8.12163 0.5625 7.58996 1.09416 7.58996 1.75H9.96496ZM7.58996 5.7301C7.58996 6.38593 8.12163 6.9176 8.77746 6.9176C9.4333 6.9176 9.96496 6.38593 9.96496 5.7301H7.58996ZM22.4097 1.75C22.4097 1.09416 21.878 0.5625 21.2222 0.5625C20.5664 0.5625 20.0347 1.09416 20.0347 1.75H22.4097ZM20.0347 5.7301C20.0347 6.38593 20.5664 6.9176 21.2222 6.9176C21.878 6.9176 22.4097 6.38593 22.4097 5.7301H20.0347ZM3.22667 20.8781C2.56311 17.983 2.56311 14.9697 3.22667 12.0746L0.9117 11.544C0.168105 14.7883 0.168105 18.1644 0.9117 21.4087L3.22667 20.8781ZM26.773 12.0746C27.4366 14.9697 27.4366 17.983 26.773 20.8781L29.088 21.4087C29.8316 18.1644 29.8316 14.7883 29.088 11.544L26.773 12.0746ZM19.2829 28.5553C16.4656 29.2316 13.534 29.2316 10.7168 28.5553L10.1624 30.8647C13.3441 31.6285 16.6556 31.6285 19.8373 30.8647L19.2829 28.5553ZM10.7168 4.39745C13.534 3.72113 16.4656 3.72113 19.2829 4.39745L19.8373 2.08806C16.6556 1.32426 13.3441 1.32426 10.1624 2.08806L10.7168 4.39745ZM10.7168 28.5553C7.01362 27.6663 4.10284 24.7009 3.22667 20.8781L0.9117 21.4087C1.98399 26.0871 5.55904 29.7596 10.1624 30.8647L10.7168 28.5553ZM19.8373 30.8647C24.4406 29.7596 28.0157 26.0871 29.088 21.4087L26.773 20.8781C25.8968 24.7009 22.9861 27.6663 19.2829 28.5553L19.8373 30.8647ZM19.2829 4.39745C22.9861 5.28645 25.8968 8.25183 26.773 12.0746L29.088 11.544C28.0157 6.86558 24.4406 3.19316 19.8373 2.08806L19.2829 4.39745ZM10.1624 2.08806C5.55904 3.19316 1.98399 6.86557 0.9117 11.544L3.22667 12.0746C4.10284 8.25182 7.01362 5.28645 10.7168 4.39745L10.1624 2.08806ZM2.55509 11.2957H27.4446V8.9207H2.55509V11.2957ZM7.58996 1.75V5.7301H9.96496V1.75H7.58996ZM20.0347 1.75V5.7301H22.4097V1.75H20.0347Z" fill="#7E7EE2"></path>
								<path d="M17.283 19.0461C17.9242 18.5901 18.3232 17.9061 18.3232 16.9798C18.3232 15.0561 16.8412 14.0586 15.0885 14.0586C13.3357 14.0586 11.8395 15.0561 11.8395 16.9798C11.8395 17.9061 12.2527 18.5901 12.8797 19.0461C12.0105 19.5733 11.5117 20.4426 11.5117 21.4543C11.5117 23.2926 12.8655 24.4326 15.0885 24.4326C17.2972 24.4326 18.6652 23.2926 18.6652 21.4543C18.6652 20.4426 18.1665 19.5733 17.283 19.0461ZM15.0885 15.9111C15.8295 15.9111 16.371 16.3386 16.371 17.0796C16.371 17.8063 15.8295 18.2623 15.0885 18.2623C14.3475 18.2623 13.806 17.8063 13.806 17.0796C13.806 16.3386 14.3475 15.9111 15.0885 15.9111ZM15.0885 22.5801C14.148 22.5801 13.464 22.0956 13.464 21.1978C13.464 20.3143 14.148 19.8298 15.0885 19.8298C16.029 19.8298 16.713 20.3143 16.713 21.1978C16.713 22.0956 16.029 22.5801 15.0885 22.5801Z" fill="#7E7EE2"></path>
							</svg>
							<div class="placeholder__group_input">
								<input type="text" class="calc_input placeholder__input" id="calc_days_val">
								<p class="place_span">Please enter days...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="line"></div>
			<div class="profit row">
				<div class="col-lg-4 d-flex mb-3 mb-lg-0">
					<div class="profit__item">
						<p class="profit__name">Your profit:</p>
						<img class="profit__icon selected_icon" src="http://127.0.0.1:8000/main/images/usdt.png" alt="">
						<p class="profit__first text_center fz_24 ff_tt selected_name_full">TETHER</p>
						<p class="profit__second text_center fz_24 ff_tt" id="retcalc_profit">0</p>
					</div>
				</div>
				<div class="col-lg-4 d-flex mb-3 mb-lg-0">
					<div class="profit__item">
						<p class="profit__name">MH/s profit:</p>
						<img src="http://127.0.0.1:8000/main/images/profit_item_icon2.svg" alt="" class="profit__icon">
						<p class="profit__first text_center fz_24 ff_tt" id="retcalc_perday">1%</p>
						<p class="profit__second profit__second_light text_center fz_24 ff_tt">
							Your <g id="calc_days_amount">1</g>-day profit
						</p>
					</div>
				</div>
				<div class="col-lg-4 d-flex mb-3 mb-lg-0">
					<div class="profit__item">
						<p class="profit__name">Your level in mining:</p>
						<img src="http://127.0.0.1:8000/main/images/profit_item_icon3.png" alt="" class="profit__icon">
						<p class="profit__first text_center fz_24 ff_tt">Within the <g id="retcalc_level">1</g> lvl</p>
						<p class="profit__second text_center fz_24 ff_tt">
							<g id="retcalc_hash">Minimal Deposit $10!</g>
						</p>
					</div>
				</div>
			</div>
			<div class="currency_variant open_currency d-flex flex-column">
				<button class="currency_close">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z" stroke="#7E7EE2" stroke-width="1.5"></path>
						<path d="M13.768 10.2322L10.2324 13.7677M13.768 13.7677L10.2324 10.2322" stroke="#7E7EE2" stroke-width="1.5" stroke-linecap="round"></path>
					</svg>
				</button>
				<p class="text_center fw_bold ff_tt fz_24 mb_20 currency_variant__title">
					Currency choice
				</p>
				<input type="text" class="currency__search" placeholder="Search  for a coins...">
				<div class="line"></div>
				<div class="currency__scroll" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
					<div class="currency__list row">


						
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="BTC" type-full="Bitcoin">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/btc.png" alt=""><span class="short__name">BTC</span><span class="full_name">Bitcoin</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="MATIC" type-full="Matic">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/matic.png" alt=""><span class="short__name">MATIC</span><span class="full_name">Matic</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="ADA" type-full="Cardano">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/ada.png" alt=""><span class="short__name">ADA</span><span class="full_name">Cardano</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="BCH" type-full="BitCash">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/bch.png" alt=""><span class="short__name">BCH</span><span class="full_name">BitCash</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="TRX" type-full="Tron">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/trx.png" alt=""><span class="short__name">TRX</span><span class="full_name">Tron</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="DOGE" type-full="Doge">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/doge.png" alt=""><span class="short__name">DOGE</span><span class="full_name">Doge</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="LTC" type-full="Litecoin">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/ltc.png" alt=""><span class="short__name">LTC</span><span class="full_name">Litecoin</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="BNB" type-full="Binance Coin">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/bnb.png" alt=""><span class="short__name">BNB</span><span class="full_name">Binance Coin</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="SHIB" type-full="Shiba">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/shib.png" alt=""><span class="short__name">SHIB</span><span class="full_name">Shiba</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="ETH" type-full="Ethereum">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/eth.png" alt=""><span class="short__name">ETH</span><span class="full_name">Ethereum</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="ETC" type-full="Ethereum Classic">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/etc.png" alt=""><span class="short__name">ETC</span><span class="full_name">Ethereum Classic</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="XRP" type-full="Ripple">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/xrp.png" alt=""><span class="short__name">XRP</span><span class="full_name">Ripple</span>
								</div>
							</div>

							
							<div class="col-lg-3 col-sm-6 mb_10 csll__item check" type-name="USDT" type-full="Tether">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/usdt.png" alt=""><span class="short__name">USDT</span><span class="full_name">Tether</span>
								</div>
							</div>

						
							<div class="col-lg-3 col-sm-6 mb_10 csll__item" type-name="DASH" type-full="Dash">
								<div class="currency__item">
									<img src="http://127.0.0.1:8000/main/images/dash.png" alt=""><span class="short__name">DASH</span><span class="full_name">Dash</span>
								</div>
							</div> 

												</div>
				</div><div class="scrollbar-track scrollbar-track-x" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 915.027px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 224.581px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
			</div>
		</div>
	</div>
</section> -->



<div class="calc__profit-button aos-init" data-aos="animation" style="display: none;">

	<span id="invest_curr" class="short-name">matic</span>
	<span style="display: none;" id="mining_curr" class="short-name">matic</span>

	<div class="cptid__data" id="retcalc_hash">600</div>
	<input type="text" value="" placeholder="Enter USD amount" id="invest_usd_ammount">
</div>

<div class="exchange__rates-section" style="display: none;">
	<ul class="exchange__run__curs">
		

	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="BTC__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">BTC/USD <d id="BTC_price">65660.68637613</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.37%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="ADA__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">ADA/USD <d id="ADA_price">0.37916131</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.35%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="BCH__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">BCH/USD <d id="BCH_price">393.34673838</div>
				<div class="exrc__bottom-data fall"><i></i> (-0.27%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="TRX__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">TRX/USD <d id="TRX_price">0.11495717</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.33%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="DOGE__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">DOGE/USD <d id="DOGE_price">0.12267137</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.74%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="LTC__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">LTC/USD <d id="LTC_price">73.36917459</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.16%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="BNB__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">BNB/USD <d id="BNB_price">593.16177801</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.14%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="SHIB__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">SHIB/USD <d id="SHIB_price">0.00001820</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.86%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="LINK__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">LINK/USD <d id="LINK_price">13.73208591</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.70%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="ETH__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">ETH/USD <d id="ETH_price">3444.80086922</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.29%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="ETC__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">ETC/USD <d id="ETC_price">23.03645424</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.20%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="XRP__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">XRP/USD <d id="XRP_price">0.50009854</div>
				<div class="exrc__bottom-data climb"><i></i> (+2.20%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="DOT__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">DOT/USD <d id="DOT_price">5.85543433</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.57%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="USDT__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">USDT/USD <d id="USDT_price">0.99913349</div>
				<div class="exrc__bottom-data climb"><i></i> (0.00%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="ZEC__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">ZEC/USD <d id="ZEC_price">20.33754426</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.34%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="MATIC__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">MATIC/USD <d id="MATIC_price">0.55190903</div>
				<div class="exrc__bottom-data climb"><i></i> (+1.07%)</div>
			</div>
		</div>
	</li> 



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="SOL__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">SOL/USD <d id="SOL_price">136.60122183</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.62%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="DASH__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">DASH/USD <d id="DASH_price">23.09441872</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.69%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="XMR__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">XMR/USD <d id="XMR_price">171.77496261</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.40%)</div>
			</div>
		</div>
	</li>



	<li>
		<div class="exrc__item">
			<div class="exrc__icon"><i class="BNB__logo"></i></div>
			<div class="exrc__details">
				<div class="exrc__top-data">BNB/USD <d id="BNB_price">593.16177801</div>
				<div class="exrc__bottom-data climb"><i></i> (+0.14%)</div>
			</div>
		</div>
	</li>

	</ul>
</div>

<script>

	$('.currency__search').on('keyup', function() {
		var searchVal = $(this).val();
		var filterItems = $('.csll__item');

		if ( searchVal != '' ) {
			filterItems.hide();//slideDown('slow');
			$('.csll__item[type-name*="' + searchVal.toLowerCase() + '"i]').show();
			$('.csll__item[type-full*="' + searchVal.toLowerCase() + '"i]').show();
			//alert('dsa');
		} else {
			filterItems.show();
		}
	});


	$(document).ready(function() {
		getHashTable($('.profitLevelsList'));
	});

	$('#calc_days_val').keyup(function() {

		days = parseInt($('#calc_days_val').val());

		if(!days){
			days = '1';
		}
		
		$("#calc_days_amount").text(days);

		calculateProfit();
	});

	$('#invest_ammount').keyup(function() {
	    
	    var currentValue = $(this).val();
        var newValue = currentValue.replace(/,/g, '.');
        $(this).val(newValue);

		inv = '#'+$('#invest_curr').text().toUpperCase()+"_price";
		price = parseFloat($(inv).text())

		if(!price){
			price = 1;
		}

        $('#invest_usd_ammount').val($('#invest_ammount').val()*price);
        
        if($('#invest_ammount').val()*price > 10){
            calculateProfit();
        }
        else{
            $("#retcalc_hash").text("Minimal Deposit $10!");
            $("#retcalc_level").text("1");
            $("#retcalc_perday").text("1%");
            $("#retcalc_profit").text("0");
        }
	});

	$('#invest_usd_ammount').keyup(function() {

		inv = '#'+$('#invest_curr').text().toUpperCase()+"_price";
		price = parseFloat($(inv).text());

		if(!price){
			price = 1;
		}

        $('#invest_ammount').val($('#invest_usd_ammount').val()/price);
		calculateProfit();
	});

	$(".csll__item").click(function() {


        $('#invest_ammount').focus();
		var short_name = $(this).attr('type-name').toLowerCase();
		var full_name = $(this).attr('type-full').toLowerCase();
		var image_link = $(this).find("img").attr("src")

		$('.currency_variant').removeClass("open");

		$('.selected_name').text(short_name);
		$('.selected_name_full').text(full_name.toUpperCase());
		$(".selected_icon").attr("src", image_link);

		$('#mining_curr').text(short_name);

		$('#invest_curr').text(short_name);
		$('#calcName').text($(this).attr('type-full'));

		inv = '#'+$('#invest_curr').text().toUpperCase()+"_price";
		price = parseFloat($(inv).text())

		if(!price){
			price = 1;
		}

        $('#invest_ammount').val($('#invest_usd_ammount').val()/price);
        
        if($('#invest_ammount').val()*price > 10){
            calculateProfit();
        }
        else{
            $("#retcalc_level").text("1");
            $("#retcalc_hash").text("Minimal Deposit $10!");
            $("#retcalc_perday").text("1%");
            $("#retcalc_profit").text("0");
        }

		//calculateProfit();
	});

</script>


<style>

.image-container {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    padding-bottom: 20px;
}

.image-container.image-reviews img{
    max-width: 200px;
}

.video .video__wrap .video__elem .video__live{
    color: #fff;
}


/* For large screens (4 images in a row) */
@media screen and (max-width: 1200px) {
    .image-container {
        justify-content: space-between;
    }
}

/* For medium screens (2 images in a row) */
@media screen and (max-width: 768px) {
    .image-container {
        justify-content: center;
        padding-bottom: 220px;
    }
    
}

/* For small screens (1 image centered) */
@media screen and (max-width: 480px) {
    .image-container {
        justify-content: center;
    }
}

/* Style individual images (adjust as needed) */
.image-container img {
    max-width: 100%;
    height: auto;
    margin: 10px; /* Add spacing between images */
}

</style>


	<script>
		$(".get__bonus__button").click(function() {
			$('.modal__overflow-layer').toggleClass('visible');
  			$('.modal__sign-up').addClass('visible');
		});
	</script>

@include('layouts.mainsite.footer')