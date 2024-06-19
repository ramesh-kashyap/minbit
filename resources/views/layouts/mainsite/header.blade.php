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
    <title>{{siteName()}} - Forex and Stock Trading platform</title>
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{asset('')}}main/assets/images/fav.png" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
    <link rel="stylesheet" href="{{asset('')}}main/assets/css/style.min.css">
</head>
<style>
    @media (min-width: 1200px)
    {
        .py-xl-4 {
    padding-top: 0rem !important;
    padding-bottom: 0rem !important;
}
    }

</style>
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
 
    <!-- header-section start -->
    <header class="header-section a2-bg header-menu w-100">
        <div class="container  d-center ">
           <nav class="navbar py-2 py-xl-4 rounded-3 navbar-expand-lg w-100 justify-content-between ">
                <div class="d-flex align-items-center py-3">
                    <button class="navbar-toggler ms-4" type="button" data-bs-toggle="collapse" aria-label="Navbar Toggler"
                    data-bs-target="#navbar-content" aria-expanded="true" id="nav-icon3">
                        <span></span><span></span><span></span><span></span>
                    </button>
                    <a href="{{route('Index')}}" class="navbar-brand m-0 p-0 d-flex align-items-center gap-5 gap-xl-5 me-2">
                        <img src="{{asset('')}}main/assets/images/fav.png" class="logo small_logo d-sm-none" alt="logo" style=" width: 73px;">
                        <img src="{{asset('')}}main/assets/images/logo.png" class="logo d-none d-sm-flex" alt="logo" style="width: 119px;
    height: 59px;">
                    </a>
                </div>
                <div class="nav_alt">
                    <div class="right-area position-relative ms-0 d-center gap-1 gap-xl-4 d-lg-none">
                        <div class="single-item">
                            <a href="login" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                        </div>
                        <div class="single-item">
                            <a href="register" class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Sign Up <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbar-content">
                    <ul class="navbar-nav gap-2 gap-lg-3 gap-xxl-8  align-self-center mx-auto mt-4 mt-lg-0">
                    <li>
                            <a class="dropdown-item" href="{{asset('')}}">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('market')}}">Markets</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('about-us')}}">About</a>
                        </li>
                        {{-- <li>
                            <a class="dropdown-item" href="{{route('careers')}}">Careers</a>
                        </li> --}}
                        <li>
                            <a class="dropdown-item" href="{{route('faq')}}">Faq</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('contact-us')}}">Contact</a>
                        </li>
                        
                     
                    </ul>
                </div>
                <div class="right-area position-relative  ms-0 d-center gap-1 gap-xl-4 d-none d-lg-flex">
                    <div class="single-item">
                        <a href="{{route('login')}}" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                    </div>
                    <div class="single-item">
                        <a href="{{route('register')}}" class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Sign Up <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header-section end -->