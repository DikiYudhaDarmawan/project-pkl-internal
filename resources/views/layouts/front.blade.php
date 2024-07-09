<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ninico - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
</head>
<body>


      <!-- header-area-start -->
      @include('layouts.front.nav')
      <!-- header-area-end -->

      <!-- header-xl-sticky-area -->

      @include('layouts.front.nav2')
      <!-- header-xl-sticky-end -->

      <!-- header-md-lg-area -->
      <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-4 d-flex align-items-center">
                  <div class="header-canvas flex-auto">
                     <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                  </div>
                  <div class="logo">
                     <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                  </div>
               </div>
               <div class="col-lg-9 col-md-8">
                  <div class="header-meta-info d-flex align-items-center justify-content-between">
                     <div class="header-search-bar">
                        <form action="#">
                           <div class="search-info p-relative">
                              <button class="header-search-icon"><i class="fal fa-search"></i></button>
                              <input type="text" placeholder="Search products...">
                           </div>
                        </form>
                     </div>
                     <div class="header-meta__social d-flex align-items-center ml-25">
                        <button class="header-cart p-relative tp-cart-toggle">
                           <i class="fal fa-shopping-cart"></i>
                           <span>2</span>
                        </button>
                        <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-3 d-flex align-items-center">
                  <div class="header-canvas flex-auto">
                     <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                  </div>
               </div>
               <div class="col-6">
                  <div class="logo text-center">
                     <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                  </div>
               </div>
               <div class="col-3">
                  <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                     <div class="header-meta m-0 d-flex align-items-center">
                        <div class="header-meta__social d-flex align-items-center"> 
                           <button class="header-cart p-relative tp-cart-toggle">
                              <i class="fal fa-shopping-cart"></i>
                              <span>2</span>
                           </button>
                           <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header-md-lg-area -->

      <!-- sidebar-menu-area -->
      @include('layouts.front.sidebar')
      <!-- sidebar-menu-area-end -->

      <!-- header-cart-start -->
    @include('layouts.front.cart')
      <div class="cartbody-overlay"></div>
      <!-- header-cart-end -->

      <!-- main-area-start -->
     <main>
        @yield('content')
     </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
     @include('layouts.front.footer')
      <!-- footer-area-end -->




    <!-- JS here -->
    <script src="{{asset('front/assets/js/jquery.js')}}"></script>
    <script src="{{asset('front/assets/js/waypoints.js')}}"></script>    
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('front/assets/js/slick.js')}}"></script>
    <script src="{{asset('front/assets/js/magnific-popup.js')}}"></script>
    <script src="{{asset('front/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('front/assets/js/counterup.js')}}"></script>
    <script src="{{asset('front/assets/js/wow.js')}}"></script>
    <script src="{{asset('front/assets/js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('front/assets/js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('front/assets/js/countdown.js')}}"></script>
    <script src="{{asset('front/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('front/assets/js/meanmenu.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.knob.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
</body>

</html>
