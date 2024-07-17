@extends('layouts.front')
@section('content')
    <!-- main-area-start -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="{{asset('front/assets/images/1.jpg')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="tp-breadcrumb">
                            <div class="tp-breadcrumb__link mb-10">
                                <span class="breadcrumb-item-active"><a href="{{ url('/') }}">Home</a></span>
                                <span>About</span>
                            </div>
                            <h2 class="tp-breadcrumb__title">About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area-start -->
        <section class="about-area pt-80  pb-40">
            <div class="container">
                <div class="tpabout__inner-logo p-relative">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tpabout__inner-thumb mb-40">
                                <img src="{{asset('front/assets/images/about1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tpabout__inner-thumb mb-40">
                                <img src="{{asset('front/assets/images/about2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tpabout__logo">
                        <a href="index.html"><img src="" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tpabout__inner-title-area mt-25 mb-45">
                            <h4 class="tpabout__inner-sub-title">About Us</h4>
                            <h4 class="tpabout__inner-title">About Our Story</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="tpabout__inner-story mb-40">
                            <p>Publish your eCommerce site quickly with our easy-to-use store
                                builder— no coding required. Migrate your items from your
                                point of sale system or turn your Instagram feed into a shopping
                                site and start selling fast. Square Online works for all kinds of
                                businesses—retail, restaurants, services without costly
                                customization or add ons. Get orders to your customers in lots
                                of ways by offering shipping, pickup, delivery, and even QR
                                code ordering.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="tpabout__inner-story-2 mb-40">
                            <p>Expand your reach and sell more using seamless integrations with
                                Google, Instagram, Facebook, and more. Built- in SEO tools make
                                it easy for shoppers to find your business on search engines. Get
                                access to the entire suite of integrated Square solutions to help you
                                run your business. Integration between Square Online and all
                                Square point of sale systems makes inventory management easy.
                                Subscribe to Square Marketing and easily send email promotions
                                to your customers using the contact information</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                        <div class="tpabout__inner-list mb-40">
                            <ul>
                                <li> <a href="#"><i class="fal fa-check"></i> Orders go right to your restaurant point
                                        of sale, KDS, and kitchen</a>
                                </li>
                                <li> <a href="#"><i class="fal fa-check"></i> Provide in-person pickup, & delivery by
                                        professional couriers</a>
                                </li>
                                <li><a href="#"><i class="fal fa-check"></i> Offer in-person diners self-serve,
                                        contactless ordering via QR codes.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- feature-area-start -->
        <section class="feature-area pt-70 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="tpfeature__inner-thumb mb-70">
                            <img src="{{asset('front/assets/images/about3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="tpabout__inner-title-area about-inner-content ml-50 mr-50 mb-70">
                            <h4 class="tpabout__inner-sub-title mb-5">Features #01</h4>
                            <h4 class="tpabout__inner-title mb-25">Solutions that work together</h4>
                            <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                                coding required. Migrate your items from your point of sale system or turn your
                                Instagram feed into a shopping site and start selling fast. Square Online works
                                for all kinds of businesses—retail, restaurants, services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="tpabout__inner-title-area about-inner-content mr-100 mb-70">
                            <h4 class="tpabout__inner-sub-title mb-5">Features #02</h4>
                            <h4 class="tpabout__inner-title mb-25">All kinds of payments securely</h4>
                            <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                                coding required. Migrate your items from your point of sale system or turn your
                                Instagram feed into a shopping site and start selling fast. Square Online works
                                for all kinds of businesses—retail, restaurants, services.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="tpfeature__inner-thumb mb-70">
                            <img src="{{asset('front/assets/images/about4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
