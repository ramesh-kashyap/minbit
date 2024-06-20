<html data-scroll-dir-x="0" data-scroll-dir-y="0"><head><style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  display: flow-root;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style></head><body class="cabinetPage" style="overflow:hidden;" data-aos-easing="ease-in-out-sine" data-aos-duration="400" data-aos-delay="0">


    <title>{{ siteName() }} | Dashboard</title>

    <script src="{{asset('')}}main/js/jquery-3.5.1.min.js"></script>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#10131a">
    <meta property="og:title" content="MINTBIT - cloud mining service. Our platform provides remote equipment for cryptocurrency mining. Start earning on mining without the need to purchase and purchase ">
    <meta property="og:description" content="MINTBIT - cloud mining service. Our platform provides remote equipment for cryptocurrency mining. Start earning on mining without the need to purchase and purchase ">
    <meta property="og:url" content="MINTBIT">
    <meta property="og:image" content="{{asset('')}}main/images/social.png">
    <meta property="og:site_name" content="MINTBIT">
    <meta property="og:locale" content="en_EN">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#474747">
    <meta name="theme-color" content="#ffffff">


    
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}main/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('')}}main/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('')}}main/images/favicon-16x16.png">
    <link rel="manifest" href="{{asset('')}}main/images/site.webmanifest">
    <link rel="mask-icon" href="{{asset('')}}main/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('')}}main/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="{{asset('')}}main/images/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('')}}main/css/vendor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('')}}main/css/main.css">
    <link rel="stylesheet" href="{{asset('')}}main/css/net.css">
    <link rel="stylesheet" href="{{asset('')}}main/css/modals.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700&amp;family=Space+Grotesk:wght@600;700&amp;display=swap" rel="stylesheet">



<section class="dashboard">
	<div class="container-fluid">
		<div class="dashboard__row d-flex justify-content-lg-between">

						<div class="dashboard__sidebar">
				<div class="sidebar__wrap">
					<div class="sidebar__top d-flex justify-content-between">
						<a href="/" class="logo">
							<img src="{{asset('')}}main/images/logo.svg" alt="">
						</a>
						<a href="dashboard" class="sidebar__home d-none d-xl-flex">
							<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M30.035 14.5785C30.035 13.971 29.5425 13.4785 28.935 13.4785C28.3275 13.4785 27.835 13.971 27.835 14.5785H30.035ZM8.16499 14.5785C8.16499 13.971 7.6725 13.4785 7.06499 13.4785C6.45747 13.4785 5.96499 13.971 5.96499 14.5785H8.16499ZM21.7699 31.0607L21.517 29.9901L21.7699 31.0607ZM14.2301 31.0607L14.483 29.9901L14.2301 31.0607ZM22.2426 7.52134L21.4621 8.2964V8.2964L22.2426 7.52134ZM30.7194 17.6196C31.1475 18.0507 31.844 18.0532 32.2751 17.6251C32.7062 17.1971 32.7086 16.5006 32.2806 16.0695L30.7194 17.6196ZM13.7574 7.52134L14.5379 8.2964L13.7574 7.52134ZM3.71943 16.0695C3.29138 16.5006 3.29385 17.1971 3.72494 17.6251C4.15604 18.0532 4.85252 18.0507 5.28057 17.6196L3.71943 16.0695ZM14.5776 27.4805L13.4965 27.2775V27.2775L14.5776 27.4805ZM14.6066 27.3259L15.6878 27.5288V27.5288L14.6066 27.3259ZM21.3934 27.3259L20.3122 27.5288L20.3122 27.5288L21.3934 27.3259ZM21.4224 27.4805L22.5035 27.2775V27.2775L21.4224 27.4805ZM20.9877 30.8278L19.9944 30.3552L19.9944 30.3552L20.9877 30.8278ZM19.8192 30.7232C19.5582 31.2718 19.7913 31.9281 20.3398 32.1892C20.8884 32.4502 21.5447 32.2172 21.8058 31.6686L19.8192 30.7232ZM15.0123 30.8278L14.0191 31.3005L14.0191 31.3005L15.0123 30.8278ZM14.1942 31.6686C14.4553 32.2172 15.1116 32.4502 15.6602 32.1892C16.2088 31.9281 16.4418 31.2718 16.1808 30.7232L14.1942 31.6686ZM17.0416 24.6638L16.7475 23.6039H16.7475L17.0416 24.6638ZM18.9584 24.6638L19.2525 23.6039L18.9584 24.6638ZM27.835 14.5785V21.9561H30.035V14.5785H27.835ZM8.16499 21.9561V14.5785H5.96499V21.9561H8.16499ZM21.517 29.9901C19.2037 30.5366 16.7963 30.5366 14.483 29.9901L13.9772 32.1312C16.6231 32.7563 19.3769 32.7563 22.0228 32.1312L21.517 29.9901ZM14.483 29.9901C10.7868 29.117 8.16499 25.793 8.16499 21.9561H5.96499C5.96499 26.8033 9.27846 31.0212 13.9772 32.1312L14.483 29.9901ZM22.0228 32.1312C26.7215 31.0212 30.035 26.8033 30.035 21.9561H27.835C27.835 25.793 25.2132 29.117 21.517 29.9901L22.0228 32.1312ZM21.4621 8.2964L30.7194 17.6196L32.2806 16.0695L23.0232 6.74629L21.4621 8.2964ZM12.9768 6.74629L3.71943 16.0695L5.28057 17.6196L14.5379 8.2964L12.9768 6.74629ZM23.0232 6.74629C22.0452 5.76129 21.2352 4.94225 20.5075 4.3831C19.7548 3.8047 18.9609 3.4 18 3.4V5.6C18.2817 5.6 18.6092 5.69886 19.1671 6.12757C19.7501 6.57553 20.4401 7.26716 21.4621 8.2964L23.0232 6.74629ZM14.5379 8.2964C15.5599 7.26716 16.2499 6.57554 16.8329 6.12757C17.3908 5.69886 17.7183 5.6 18 5.6V3.4C17.0391 3.4 16.2452 3.8047 15.4925 4.3831C14.7648 4.94225 13.9548 5.76129 12.9768 6.74629L14.5379 8.2964ZM15.6588 27.6834L15.6878 27.5288L13.5255 27.123L13.4965 27.2775L15.6588 27.6834ZM20.3122 27.5288L20.3412 27.6834L22.5035 27.2775L22.4745 27.123L20.3122 27.5288ZM19.9944 30.3552L19.8192 30.7232L21.8058 31.6686L21.9809 31.3005L19.9944 30.3552ZM14.0191 31.3005L14.1942 31.6686L16.1808 30.7232L16.0056 30.3552L14.0191 31.3005ZM20.3412 27.6834C20.5112 28.5888 20.3895 29.525 19.9944 30.3552L21.9809 31.3005C22.5763 30.0494 22.7592 28.64 22.5035 27.2775L20.3412 27.6834ZM13.4965 27.2775C13.2408 28.64 13.4237 30.0494 14.0191 31.3005L16.0056 30.3552C15.6105 29.525 15.4888 28.5888 15.6588 27.6834L13.4965 27.2775ZM17.3357 25.7238C17.7705 25.6031 18.2295 25.6031 18.6643 25.7238L19.2525 23.6039C18.4328 23.3764 17.5672 23.3764 16.7475 23.6039L17.3357 25.7238ZM22.4745 27.123C22.1569 25.4313 20.9097 24.0637 19.2525 23.6039L18.6643 25.7238C19.5062 25.9574 20.1483 26.6553 20.3122 27.5288L22.4745 27.123ZM15.6878 27.5288C15.8517 26.6553 16.4938 25.9574 17.3357 25.7238L16.7475 23.6039C15.0903 24.0637 13.8431 25.4313 13.5255 27.123L15.6878 27.5288Z" fill="#7E7EE2"></path>
							</svg>
						</a>
						<button class="menu__close_dashboard d-flex d-xl-none" {{menuActive('user.dashboard')}}>
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z" stroke="#6E6E73" stroke-width="1.5"></path>
								<path d="M13.7677 10.2322L10.2322 13.7677M13.7677 13.7677L10.2322 10.2322" stroke="#6E6E73" stroke-width="1.5" stroke-linecap="round"></path>
							</svg>
						</button>
					</div>
					<div class="px-2 mb-3 d-lg-none">
						<div class="row align-items-center">
							<div class="user__info d-none d-md-flex col-6" >
								<div class="icon">
									<img src="{{asset('')}}main/images/icon_profit_dashboard.svg" alt="">
								</div>
								<div class="info">
									<p>Daily profit:</p>
									<p>1%</p>
								</div>
							</div>
							<div class="user__info d-none d-md-flex col-6">
								<div class="icon">
									<img src="{{asset('')}}main/images/icon_mining_dashboard.svg" alt="">
								</div>
								<div class="info">
									<p>Mining level:</p>
									<p>0</p>
								</div>
							</div>
							<div class="user__info d-none d-md-flex col-6">
								<div class="icon">
									<img src="{{asset('')}}main/images/icon_balance_dashboard.svg" alt="">
								</div>
								<div class="info">
									<p>Your Balance:</p>
									<p>0 MH/s</p>
								</div>
							</div>
							<div class="user__info d-none d-md-flex col-6">
								<div class="icon">
									<img src="{{asset('')}}main/images/icon_user_dashboard.svg" alt="">
								</div>
								<div class="info">
									<p>User account:</p>
									<p>sachink</p>
								</div>
							</div>
						</div>
					</div>
					<ul class="dashboard__menu">
						<li class="current" id="dashboard_page">
							<a {{menuActive('user.dashboard')}} href="dashboard">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="fill_hover" d="M3.35288 15.0496L2.6227 15.2209L3.35288 15.0496ZM3.35288 8.95043L2.6227 8.77915L3.35288 8.95043ZM20.6471 8.95044L19.9169 9.12171L20.6471 8.95044ZM20.6471 15.0496L19.9169 14.8783L20.6471 15.0496ZM15.0496 20.6471L14.8783 19.9169L15.0496 20.6471ZM8.95044 20.6471L9.12171 19.9169L8.95044 20.6471ZM8.95043 3.35288L9.12171 4.08306L8.95043 3.35288ZM15.0496 3.35288L14.8783 4.08306L15.0496 3.35288ZM7.85732 12.2227C7.54944 12.4998 7.52448 12.974 7.80157 13.2819C8.07867 13.5898 8.55289 13.6148 8.86077 13.3377L7.85732 12.2227ZM10.0656 11.2443L10.5673 11.8018L10.0656 11.2443ZM11.627 11.4405L12.2511 11.0245L11.627 11.4405ZM12.373 12.5595L11.7489 12.9755H11.7489L12.373 12.5595ZM13.9344 12.7557L13.4327 12.1982L13.9344 12.7557ZM16.1427 11.7773C16.4506 11.5002 16.4755 11.026 16.1984 10.7181C15.9213 10.4102 15.4471 10.3852 15.1392 10.6623L16.1427 11.7773ZM13.0746 13.2875L12.9811 14.0316L13.0746 13.2875ZM10.9254 10.7125L10.8319 11.4567H10.8319L10.9254 10.7125ZM4.08306 14.8783C3.63898 12.9851 3.63898 11.0149 4.08306 9.12171L2.6227 8.77915C2.12577 10.8976 2.12577 13.1024 2.6227 15.2209L4.08306 14.8783ZM19.9169 9.12171C20.361 11.0149 20.361 12.9851 19.9169 14.8783L21.3773 15.2208C21.8742 13.1024 21.8742 10.8976 21.3773 8.77916L19.9169 9.12171ZM14.8783 19.9169C12.9851 20.361 11.0149 20.361 9.12171 19.9169L8.77916 21.3773C10.8976 21.8742 13.1024 21.8742 15.2208 21.3773L14.8783 19.9169ZM9.12171 4.08306C11.0149 3.63898 12.9851 3.63898 14.8783 4.08306L15.2208 2.6227C13.1024 2.12577 10.8976 2.12577 8.77916 2.6227L9.12171 4.08306ZM9.12171 19.9169C6.62161 19.3305 4.6695 17.3784 4.08306 14.8783L2.6227 15.2209C3.33924 18.2756 5.72441 20.6608 8.77916 21.3773L9.12171 19.9169ZM15.2208 21.3773C18.2756 20.6608 20.6608 18.2756 21.3773 15.2208L19.9169 14.8783C19.3305 17.3784 17.3784 19.3305 14.8783 19.9169L15.2208 21.3773ZM14.8783 4.08306C17.3784 4.6695 19.3305 6.62161 19.9169 9.12171L21.3773 8.77916C20.6608 5.72441 18.2756 3.33924 15.2208 2.6227L14.8783 4.08306ZM8.77916 2.6227C5.72441 3.33924 3.33924 5.72441 2.6227 8.77915L4.08306 9.12171C4.6695 6.6216 6.62161 4.6695 9.12171 4.08306L8.77916 2.6227ZM8.86077 13.3377L10.5673 11.8018L9.56383 10.6869L7.85732 12.2227L8.86077 13.3377ZM11.003 11.8566L11.7489 12.9755L12.997 12.1434L12.2511 11.0245L11.003 11.8566ZM14.4362 13.3131L16.1427 11.7773L15.1392 10.6623L13.4327 12.1982L14.4362 13.3131ZM11.7489 12.9755C11.8915 13.1894 12.0413 13.4173 12.1919 13.5861C12.3566 13.7708 12.6072 13.9847 12.9811 14.0316L13.1681 12.5433C13.227 12.5508 13.277 12.572 13.31 12.5929C13.336 12.6094 13.3372 12.6167 13.3114 12.5878C13.2857 12.5589 13.2487 12.5118 13.1933 12.4333C13.1382 12.3552 13.0762 12.2623 12.997 12.1434L11.7489 12.9755ZM13.4327 12.1982C13.3266 12.2937 13.2435 12.3684 13.1708 12.4304C13.0977 12.4929 13.0503 12.5293 13.0181 12.551C12.9861 12.5725 12.989 12.5658 13.0183 12.5562C13.0554 12.5442 13.1091 12.5359 13.1681 12.5433L12.9811 14.0316C13.3549 14.0786 13.6507 13.9334 13.8559 13.7952C14.0436 13.6688 14.2451 13.4851 14.4362 13.3131L13.4327 12.1982ZM10.5673 11.8018C10.6734 11.7063 10.7565 11.6316 10.8291 11.5696C10.9023 11.5071 10.9497 11.4707 10.9819 11.449C11.0139 11.4275 11.011 11.4342 10.9817 11.4438C10.9446 11.4558 10.8909 11.4641 10.8319 11.4567L11.0189 9.96835C10.6451 9.92139 10.3493 10.0666 10.1441 10.2048C9.95642 10.3312 9.7549 10.5149 9.56383 10.6869L10.5673 11.8018ZM12.2511 11.0245C12.1085 10.8106 11.9587 10.5827 11.8081 10.4139C11.6434 10.2292 11.3928 10.0153 11.0189 9.96835L10.8319 11.4567C10.773 11.4492 10.723 11.428 10.69 11.4071C10.664 11.3906 10.6628 11.3833 10.6886 11.4122C10.7143 11.4411 10.7513 11.4882 10.8067 11.5668C10.8618 11.6448 10.9238 11.7377 11.003 11.8566L12.2511 11.0245Z" fill="#8B8B9D"></path>
								</svg>

								Dashboard
							</a>
						</li>
						<li class="" id="mining_page">
							<a  href="invest" class="sidebar-link ">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="stroke_hover" d="M12 4C15.5488 4 18.4665 6.52713 18.8086 9.76241C20.6853 10.5776 22 12.4665 22 14.6667C22 17.6122 19.6436 20 16.7368 20L6.73684 20C4.12076 20 2 17.851 2 15.2C2 13.1078 3.32099 11.3282 5.16392 10.671C5.15992 10.5811 5.15789 10.4908 5.15789 10.4C5.15789 6.86538 8.22121 4 12 4Z" stroke="#8B8B9D" stroke-width="1.5"></path>
								</svg>
								Deposit
							</a>
						</li>
						<li class="" id="deposit_page">
							<a href="{{route('user.Withdraw')}}" class="sidebar-link {{menuActive('user.Withdraw')}}">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="stroke_hover" d="M8 9L12 9" stroke="#8B8B9D" stroke-width="1.5" stroke-linecap="round"></path>
									<path class="fill_hover" d="M2.88539 15.1513L3.61329 14.9705L2.88539 15.1513ZM2.88539 8.84875L3.61329 9.02949L2.88539 8.84875ZM21.1146 8.84875L21.8425 8.66801L21.1146 8.84875ZM21.1146 15.1512L20.3867 14.9705L21.1146 15.1512ZM15.1156 20.659L14.9533 19.9267H14.9533L15.1156 20.659ZM8.88443 20.659L9.04668 19.9267L8.88443 20.659ZM8.88443 3.34105L9.04668 4.07329L8.88443 3.34105ZM15.1156 3.34105L15.2778 2.60881V2.60881L15.1156 3.34105ZM8.43056 20.5584L8.2683 21.2906L8.43056 20.5584ZM15.5694 20.5584L15.7317 21.2906H15.7317L15.5694 20.5584ZM15.5694 3.44162L15.4072 4.17386V4.17386L15.5694 3.44162ZM8.43056 3.44162L8.2683 2.70938V2.70938L8.43056 3.44162ZM18.6933 14.5037L18.5588 15.2415L18.5588 15.2415L18.6933 14.5037ZM18.6347 14.493L18.7693 13.7551L18.7693 13.7551L18.6347 14.493ZM18.6347 9.50703L18.7693 10.2449L18.7693 10.2449L18.6347 9.50703ZM18.6933 9.49635L18.5588 8.75851L18.5588 8.75851L18.6933 9.49635ZM21 10.4873C21.3795 10.6533 21.8217 10.4802 21.9877 10.1007C22.1537 9.72124 21.9807 9.27902 21.6012 9.11302L21 10.4873ZM21.6012 14.887C21.9807 14.721 22.1537 14.2788 21.9877 13.8993C21.8217 13.5198 21.3795 13.3467 21 13.5127L21.6012 14.887ZM16.5782 12.6282L15.857 12.8342L16.5782 12.6282ZM16.5782 11.3718L17.2993 11.5778L16.5782 11.3718ZM8.59281 4.17386L9.04668 4.07329L8.72218 2.60881L8.2683 2.70938L8.59281 4.17386ZM14.9533 4.07329L15.4072 4.17386L15.7317 2.70938L15.2778 2.60881L14.9533 4.07329ZM15.4072 19.8261L14.9533 19.9267L15.2778 21.3912L15.7317 21.2906L15.4072 19.8261ZM9.04668 19.9267L8.59281 19.8261L8.2683 21.2906L8.72218 21.3912L9.04668 19.9267ZM3.61329 14.9705C3.1289 13.0198 3.1289 10.9802 3.61329 9.02949L2.1575 8.668C1.61417 10.8561 1.61417 13.1439 2.1575 15.332L3.61329 14.9705ZM20.3867 9.0295C20.8711 10.9802 20.8711 13.0198 20.3867 14.9705L21.8425 15.332C22.3858 13.1439 22.3858 10.8561 21.8425 8.66801L20.3867 9.0295ZM14.9533 19.9267C13.008 20.3578 10.992 20.3578 9.04668 19.9267L8.72218 21.3912C10.8812 21.8696 13.1188 21.8696 15.2778 21.3912L14.9533 19.9267ZM9.04668 4.07329C10.992 3.64224 13.008 3.64224 14.9533 4.07329L15.2778 2.60881C13.1188 2.1304 10.8812 2.1304 8.72218 2.60881L9.04668 4.07329ZM8.59281 19.8261C6.14627 19.284 4.21736 17.4032 3.61329 14.9705L2.1575 15.332C2.89874 18.3171 5.26576 20.6253 8.2683 21.2906L8.59281 19.8261ZM15.7317 21.2906C18.7342 20.6253 21.1013 18.3171 21.8425 15.332L20.3867 14.9705C19.7826 17.4032 17.8537 19.284 15.4072 19.8261L15.7317 21.2906ZM15.4072 4.17386C17.8537 4.71598 19.7826 6.5968 20.3867 9.0295L21.8425 8.66801C21.1013 5.68288 18.7342 3.3747 15.7317 2.70938L15.4072 4.17386ZM8.2683 2.70938C5.26576 3.3747 2.89874 5.68288 2.1575 8.668L3.61329 9.02949C4.21736 6.59679 6.14627 4.71598 8.59281 4.17386L8.2683 2.70938ZM18.8279 13.7658L18.7693 13.7551L18.5002 15.2308L18.5588 15.2415L18.8279 13.7658ZM18.7693 10.2449L18.8279 10.2342L18.5588 8.75851L18.5002 8.7692L18.7693 10.2449ZM18.8279 10.2342C19.561 10.1005 20.3173 10.1886 21 10.4873L21.6012 9.11302C20.6449 8.69473 19.5856 8.57129 18.5588 8.75851L18.8279 10.2342ZM18.5588 15.2415C19.5856 15.4287 20.6449 15.3053 21.6012 14.887L21 13.5127C20.3173 13.8114 19.561 13.8995 18.8279 13.7658L18.5588 15.2415ZM17.2993 12.4222C17.2205 12.1463 17.2205 11.8537 17.2993 11.5778L15.857 11.1658C15.7013 11.711 15.7013 12.289 15.857 12.8342L17.2993 12.4222ZM18.5002 8.7692C17.2349 8.99991 16.2103 9.92901 15.857 11.1658L17.2993 11.5778C17.4958 10.8898 18.0657 10.3732 18.7693 10.2449L18.5002 8.7692ZM18.7693 13.7551C18.0657 13.6268 17.4958 13.1102 17.2993 12.4222L15.857 12.8342C16.2103 14.071 17.2349 15.0001 18.5002 15.2308L18.7693 13.7551Z" fill="#8B8B9D"></path>
								</svg>
								Withdraw
							</a>
						</li>
						<li class="" id="withdraw_page">
							<a href="{{route('user.referral-team')}}" class="sidebar-link {{menuActive('user.referral-team')}}">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="stroke_hover" d="M2.88539 8.84875C3.55805 6.13983 5.70602 4.04534 8.43056 3.44162L8.88443 3.34105C10.9366 2.88632 13.0634 2.88632 15.1156 3.34105L15.5694 3.44162C18.294 4.04534 20.442 6.13984 21.1146 8.84875C21.6285 10.9182 21.6285 13.0819 21.1146 15.1512C20.442 17.8602 18.294 19.9547 15.5694 20.5584L15.1156 20.659C13.0634 21.1137 10.9366 21.1137 8.88443 20.659L8.43056 20.5584C5.70601 19.9547 3.55805 17.8602 2.88539 15.1513C2.37154 13.0819 2.37154 10.9181 2.88539 8.84875Z" stroke="#8B8B9D" stroke-width="1.5"></path>
									<path class="fill_hover" fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 7C12.3826 7 12.6926 7.29199 12.6926 7.65217V8.18573H12.7692C14.0567 8.18573 15 9.24015 15 10.4189C15 10.7791 14.69 11.0711 14.3077 11.0711C13.9253 11.0711 13.6154 10.7791 13.6154 10.4189C13.6154 9.85137 13.1811 9.49008 12.7692 9.49008H12.6926V11.5432L13.6273 11.8634C14.4767 12.1544 15 12.9457 15 13.7838C15 14.8506 14.1451 15.8142 12.9666 15.8142H12.6926V16.3478C12.6926 16.708 12.3826 17 12.0002 17C11.6179 17 11.3079 16.708 11.3079 16.3478V15.8142H11.2308C9.94328 15.8142 9 14.7598 9 13.581C9 13.2208 9.30996 12.9288 9.69231 12.9288C10.0747 12.9288 10.3846 13.2208 10.3846 13.581C10.3846 14.1486 10.8189 14.5098 11.2308 14.5098H11.3079V12.4568L10.3727 12.1365C9.5233 11.8455 9 11.0542 9 10.2161C9 9.14934 9.85491 8.18573 11.0334 8.18573H11.3079V7.65217C11.3079 7.29199 11.6179 7 12.0002 7ZM11.3079 9.49008H11.0334C10.7306 9.49008 10.3846 9.76055 10.3846 10.2161C10.3846 10.5645 10.6001 10.8265 10.8459 10.9107L11.3079 11.0689V9.49008ZM12.6926 12.9312V14.5098H12.9666C13.2694 14.5098 13.6154 14.2394 13.6154 13.7838C13.6154 13.4355 13.3999 13.1735 13.1541 13.0893L12.6926 12.9312Z" fill="#8B8B9D"></path>
								</svg>
								Affiliate Program
							</a>
						</li>
						<li class="" id="affilate_page">
							<a href="{{route('user.roi-bonus')}}" class="sidebar-link {{menuActive('user.roi-bonus')}}">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="fill_hover" d="M3.47178 13.5544L4.19222 13.346L3.47178 13.5544ZM3.47178 6.90653L2.75134 6.69805H2.75134L3.47178 6.90653ZM20.5282 6.90654L21.2487 6.69806V6.69806L20.5282 6.90654ZM20.5282 13.5544L19.8078 13.346V13.346L20.5282 13.5544ZM16.8148 17.0075L16.6747 16.2707L16.8148 17.0075ZM7.18522 17.0075L7.32531 16.2707L7.18522 17.0075ZM7.18522 3.45344L7.04513 2.71664L7.18522 3.45344ZM16.8148 3.45344L16.9549 2.71664L16.8148 3.45344ZM3.52005 13.7212L2.79961 13.9297H2.79961L3.52005 13.7212ZM20.48 13.7212L21.2004 13.9297L21.2004 13.9297L20.48 13.7212ZM20.48 6.73973L19.7595 6.94822L19.7595 6.94822L20.48 6.73973ZM3.52005 6.73973L4.24049 6.94822L3.52005 6.73973ZM12.75 17.923C12.75 17.5088 12.4142 17.173 12 17.173C11.5858 17.173 11.25 17.5088 11.25 17.923H12.75ZM11.25 21C11.25 21.4142 11.5858 21.75 12 21.75C12.4142 21.75 12.75 21.4142 12.75 21H11.25ZM9.36386 20.25C8.94964 20.25 8.61386 20.5858 8.61386 21C8.61386 21.4142 8.94964 21.75 9.36386 21.75V20.25ZM14.6361 21.75C15.0504 21.75 15.3861 21.4142 15.3861 21C15.3861 20.5858 15.0504 20.25 14.6361 20.25V21.75ZM19.7595 6.94822L19.8078 7.11503L21.2487 6.69806L21.2004 6.53125L19.7595 6.94822ZM19.8078 13.346L19.7595 13.5128L21.2004 13.9297L21.2487 13.7629L19.8078 13.346ZM4.24049 13.5128L4.19222 13.346L2.75134 13.7629L2.79961 13.9297L4.24049 13.5128ZM4.19222 7.11502L4.24049 6.94822L2.79961 6.53125L2.75134 6.69805L4.19222 7.11502ZM4.19222 13.346C3.60259 11.3084 3.60259 9.15256 4.19222 7.11502L2.75134 6.69805C2.08289 9.00798 2.08289 11.453 2.75134 13.7629L4.19222 13.346ZM19.8078 7.11502C20.3974 9.15256 20.3974 11.3084 19.8078 13.346L21.2487 13.7629C21.9171 11.453 21.9171 9.00798 21.2487 6.69806L19.8078 7.11502ZM16.6747 16.2707C13.5875 16.8577 10.4125 16.8577 7.32531 16.2707L7.04513 17.7443C10.3175 18.3665 13.6825 18.3665 16.9549 17.7443L16.6747 16.2707ZM7.32531 4.19024C10.4125 3.60325 13.5875 3.60325 16.6747 4.19024L16.9549 2.71664C13.6825 2.09445 10.3175 2.09445 7.04513 2.71664L7.32531 4.19024ZM7.32531 16.2707C5.83267 15.9869 4.64581 14.9134 4.24049 13.5128L2.79961 13.9297C3.36686 15.8899 5.015 17.3583 7.04513 17.7443L7.32531 16.2707ZM16.9549 17.7443C18.985 17.3583 20.6331 15.8899 21.2004 13.9297L19.7595 13.5128C19.3542 14.9134 18.1673 15.9869 16.6747 16.2707L16.9549 17.7443ZM16.6747 4.19024C18.1673 4.47405 19.3542 5.5476 19.7595 6.94822L21.2004 6.53125C20.6331 4.57103 18.985 3.10264 16.9549 2.71664L16.6747 4.19024ZM7.04513 2.71664C5.015 3.10264 3.36686 4.57103 2.79961 6.53125L4.24049 6.94822C4.64581 5.5476 5.83267 4.47405 7.32531 4.19024L7.04513 2.71664ZM11.25 17.923V21H12.75V17.923H11.25ZM9.36386 21.75H14.6361V20.25H9.36386V21.75Z" fill="#8B8B9D"></path>
									<path class="stroke_hover" d="M8 11.25L10.0588 9.62866C10.4346 9.33272 10.6225 9.18475 10.8303 9.21113C11.0381 9.23752 11.1831 9.42777 11.473 9.80826L12.527 11.1917C12.8169 11.5722 12.9619 11.7625 13.1697 11.7889C13.3775 11.8153 13.5654 11.6673 13.9412 11.3713L16 9.75" stroke="#8B8B9D" stroke-width="1.5" stroke-linecap="round"></path>
								</svg>
								Transaction
							</a>
						</li>
						<li>
							<a href="{{route('user.profile')}}" class="sidebar-link {{menuActive('user.profile')}}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="stroke_hover" d="M13.7517 4.69329C13.7517 3.85839 13.1416 3.14883 12.3161 3.0238C12.1066 2.99207 11.8935 2.99207 11.6839 3.0238C10.8584 3.14883 10.2482 3.85839 10.2482 4.6933V5.87397C9.77662 6.00858 9.32734 6.19618 8.90726 6.42992L8.07205 5.59471C7.48168 5.00435 6.54849 4.93407 5.87637 5.42937C5.70578 5.55509 5.55509 5.70578 5.42937 5.87637C4.93407 6.54849 5.00434 7.4817 5.59471 8.07207L6.42992 8.90728C6.19617 9.32735 6.00857 9.77663 5.87397 10.2483H4.6933C3.85839 10.2483 3.14883 10.8584 3.0238 11.6839C2.99207 11.8935 2.99207 12.1066 3.0238 12.3161C3.14883 13.1416 3.85839 13.7518 4.69329 13.7518H5.87396C6.00857 14.2234 6.19617 14.6727 6.42992 15.0927L5.59471 15.9279C5.00434 16.5183 4.93407 17.4515 5.42937 18.1236C5.55509 18.2942 5.70578 18.4449 5.87638 18.5706C6.5485 19.0659 7.48169 18.9957 8.07205 18.4053L8.90726 17.5701C9.32734 17.8038 9.77662 17.9914 10.2482 18.126V19.3067C10.2482 20.1416 10.8584 20.8512 11.6839 20.9762C11.8934 21.0079 12.1066 21.0079 12.3161 20.9762C13.1416 20.8512 13.7517 20.1416 13.7517 19.3067V18.1261C14.2234 17.9914 14.6727 17.8038 15.0927 17.5701L15.9279 18.4053C16.5183 18.9957 17.4515 19.0659 18.1236 18.5706C18.2942 18.4449 18.4449 18.2942 18.5706 18.1236C19.0659 17.4515 18.9957 16.5183 18.4053 15.928L17.5701 15.0928C17.8038 14.6727 17.9914 14.2234 18.1261 13.7518H19.3067C20.1416 13.7518 20.8512 13.1416 20.9762 12.3161C21.0079 12.1066 21.0079 11.8935 20.9762 11.6839C20.8512 10.8584 20.1416 10.2483 19.3067 10.2483H18.126C17.9914 9.77662 17.8038 9.32734 17.5701 8.90726L18.4053 8.07205C18.9957 7.48168 19.0659 6.54849 18.5706 5.87637C18.4449 5.70578 18.2942 5.55509 18.1236 5.42937C17.4515 4.93407 16.5183 5.00434 15.9279 5.59471L15.0927 6.42992C14.6727 6.19617 14.2234 6.00857 13.7517 5.87396V4.69329Z" stroke="#8B8B9D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
									</path>
									<path class="stroke_hover" d="M9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12Z" stroke="#8B8B9D" stroke-width="1.5"></path>
								</svg>

								Setting
							</a>
						</li>
						<li class="">
							<a href="profile">
							<div class="video_bg">
									<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
								</div>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path class="stroke_hover" d="M15.3509 3L12.0003 6.17647L8.64973 3M8.66699 19.4118L7.55579 21M15.3342 19.4118L16.4454 21M4.80827 15.4094C4.39724 13.8668 4.39724 12.2508 4.80827 10.7083C5.33465 8.73282 6.98876 7.21126 9.07917 6.7796L9.57098 6.67805C11.1718 6.3475 12.8283 6.3475 14.429 6.67805L14.9208 6.7796C17.0112 7.21126 18.6654 8.73283 19.1917 10.7083C19.6028 12.2508 19.6028 13.8668 19.1917 15.4094C18.6654 17.3848 17.0112 18.9064 14.9208 19.338L14.429 19.4396C12.8283 19.7701 11.1717 19.7701 9.57098 19.4396L9.07917 19.338C6.98875 18.9064 5.33465 17.3848 4.80827 15.4094Z" stroke="#8B8B9D" stroke-width="1.44" stroke-linecap="round"></path>
								</svg>

								Logout
							</a>
						</li>
						
						
						<li style="display: flex;/*! padding: 20px; */width: 90%;border-radius: 26px 26px 80px 26px;border: 2px #8b8b9d63 solid;margin: 10px auto;overflow: hidden;">
							<a href="/affilate" style="width: 100%;height: fit-content;padding: 0;"><img data-url="MB-300.gif" src="{{asset('')}}main/images/promo/MB-300.gif" alt="" style="height: 104%;width: 104%;margin: -2%;"></a>
						</li>
						<li>
							<a href="/logout">
								<button class="exit_btn open__popup" data-popup="exit" style="padding: 0;">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path class="stroke_hover" d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z" stroke="#8B8B9D" stroke-width="1.5" stroke-linejoin="round"></path>
										<path class="stroke_hover" d="M12 7.83891C10.5637 7.83891 9.39932 9.00327 9.39932 10.4396C9.39932 11.3416 9.85851 12.1363 10.5559 12.6028L9.84196 14.7993C9.62349 15.4714 10.1245 16.1611 10.8313 16.1611H13.1687C13.8755 16.1611 14.3765 15.4714 14.158 14.7993L13.4441 12.6028C14.1415 12.1363 14.6007 11.3416 14.6007 10.4396C14.6007 9.00327 13.4363 7.83891 12 7.83891Z" stroke="#8B8B9D" stroke-width="1.5" stroke-linejoin="round"></path>
									</svg>

									Exit
								</button>
							</a>
						</li>
					</ul>
				</div>

				<div class="mining__row mining__row_sticky d-flex flex-column justify-content-between">


				<div class="mining__item swiper-slide">
					<div class="mining__percent">
					<div class="pie" data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }" data-pie-index="1" style="width:200px;height:200px;"><svg role="progressbar" width="200" height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none" stroke="#DFDFFF" stroke-width="15"></circle><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-1" fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264" stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;" stroke="#9393E8" data-angel="100"></circle><text class="pie-text-1" x="50%" y="50%" fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400"><tspan class="pie-percent-1">100</tspan><tspan class="pie-unit-1">%</tspan></text></svg></div>
					<img src="{{asset('')}}main/images/mining_item_icon2.svg" alt="">
					</div>
					<div class="content">
						<p class="mining__value"> <g id="hs_sha256">0</g> <span>MH/s</span></p>
						<p class="mining__name">GPU balance</p>
					</div>
					<div class="line"></div>
				</div>

				<div class="mining__item swiper-slide used__block">
					<div class="mining__percent">
					<div class="pie" data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 0, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }" data-pie-index="2" style="width:200px;height:200px;"><svg role="progressbar" width="200" height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none" stroke="#DFDFFF" stroke-width="15"></circle><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-2" fill="none" stroke-width="10" stroke-dashoffset="264" stroke-dasharray="264" stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;" stroke="#9393E8" data-angel="0"></circle><text class="pie-text-2" x="50%" y="50%" fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400"><tspan class="pie-percent-2">0</tspan><tspan class="pie-unit-2">%</tspan></text></svg></div>
					<img src="{{asset('')}}main/images/mining_item_icon2.svg" alt="">
					</div>
					<div class="content">
						<p class="mining__value"><g class="" id="hs_used_sha256">0</g>,<span>00%</span></p>
						<p class="mining__name">Capacities used</p>
					</div>
					<div class="line"></div>
				</div>

				<div class="mining__item swiper-slide available__block">
					<div class="mining__percent">
					<div class="pie" data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }" data-pie-index="3" style="width:200px;height:200px;"><svg role="progressbar" width="200" height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none" stroke="#DFDFFF" stroke-width="15"></circle><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-3" fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264" stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;" stroke="#9393E8" data-angel="100"></circle><text class="pie-text-3" x="50%" y="50%" fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400"><tspan class="pie-percent-3">100</tspan><tspan class="pie-unit-3">%</tspan></text></svg></div>
					<img src="{{asset('')}}main/images/mining_item_icon2.svg" alt="">
					</div>
					<div class="content">
						<p class="mining__value"><g class="" id="hs_stock_sha256">100</g>,<span>00%</span></p>
						<p class="mining__name">Capacity available</p>
					</div>
					<div class="line"></div>
				</div>

			</div>
		</div>


			<div class="dashboard__wrap dashboard__wrap_mining">

				


<script>
	$(document).ready(function () {


		var currentTimestamp = 1718768975000 ;


		setInterval(function () {

			currentTimestamp = currentTimestamp + 1000;

			//alert(currentTimestamp);

			var currentTime = new Date(currentTimestamp);
			var hours = currentTime.getHours();
			var minutes = currentTime.getMinutes();
			var seconds = currentTime.getSeconds();
			var days = currentTime.getDate();
			var months = currentTime.getMonth() + 1;
			var years = currentTime.getFullYear();

			// Add leading zeros

			days = (days < 10 ? "0" : "") + days;
			months = (months < 10 ? "0" : "") + months;
			years = (years < 10 ? "0" : "") + years;

			minutes = (minutes < 10 ? "0" : "") + minutes;
			seconds = (seconds < 10 ? "0" : "") + seconds;
			hours = (hours < 10 ? "0" : "") + hours;

			// Compose the string for display
			var currentTimeString = years + "-" + months + "-" + days + ' ' + hours + ":" + minutes;
			$("#serverTime").html(currentTimeString);

		}, 1000);

	});
</script>

<div class="d-flex justify-content-between align-items-center dashboard__header">
	<a href="/dashboard" class="logo">
		<img src="{{asset('')}}main/images/target_logo.svg" alt="">
	</a>
	<h1 class="main__header__text" id="mining_text">Mining</h1>
	<h1 class="main__header__text current" id="dashboard_text">Dashboard</h1>
	<h1 class="main__header__text" id="deposit_text">Deposit</h1>
	<h1 class="main__header__text" id="withdraw_text">Withdraw</h1>
	<h1 class="main__header__text" id="affilate_text">Affiliate Program</h1>
	<div class="col-auto ms-auto d-none d-lg-flex align-items-center">
		<div class="user__info d-none d-md-flex">
			<div class="icon">
				<img src="{{asset('')}}main/images/icon_profit_dashboard.svg" alt="">
			</div>
			<div class="info">
				<p>Main Balance</p>
				<p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</p>
			</div>
		</div>
		<div class="user__info d-none d-md-flex">
			<div class="icon">
				<img src="{{asset('')}}main/images/icon_mining_dashboard.svg" alt="">
			</div>
			<div class="info">
				<p>Roi Income</p>
				<p>{{ currency() }}
                {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}</p>
			</div>
		</div>
		<div class="user__info d-none d-md-flex">
			<div class="icon">
				<img src="{{asset('')}}main/images/icon_balance_dashboard.svg" alt="">
			</div>
			<div class="info">
				<p>Total Deposit</p>
				<p>{{ currency() }}
                {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</p>
			</div>
		</div>
		<div class="user__info d-none d-md-flex">
			<div class="icon">
				<img src="{{asset('')}}main/images/icon_user_dashboard.svg" alt="">
			</div>
			<div class="info">
				<p>Direct Income</p>
				<p>{{ currency() }}
                {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}  </p>
			</div>
		</div>
	</div>

	<button class="menu__open open_dashboard d-flex d-xl-none align-items-center justify-content-center">
		<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M11.8125 16H24.1875" stroke="#000D1D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
			<path d="M11.8125 11.5H24.1875" stroke="#000D1D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
			<path d="M11.8125 20.5H24.1875" stroke="#000D1D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
		</svg>
	</button>
</div>