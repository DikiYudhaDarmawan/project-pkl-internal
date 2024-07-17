@extends('layouts.front')
@section('content')
    <!-- slider-area-start -->
    <section class="slider-area pb-25">
        <div class="container">
            <div class="row justify-content-xl-end">
                <div class="col-xl-9 col-xxl-7 col-lg-9">
                    <div class="tp-slider-area p-relative">
                        <div class="swiper-container slider-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-slide-item">
                                        <div class="tp-slide-item__content">
                                            <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                            <h3 class="tp-slide-item__title mb-25">Up To
                                                <i>40% Off
                                                    <img src="" alt="">
                                                </i>
                                                latest Creations
                                            </h3>
                                            <a class="tp-slide-item__slide-btn tp-btn" href="shop.html">Shop Now <i
                                                    class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="tp-slide-item__img">
                                            <img src="{{asset('front/assets/images/banner-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="tpslider-banner tp-slider-sm-banner mb-30">
                                <a href="shop-details.html">
                                    <div class="tpslider-banner__img">
                                        <img src="{{asset('front/assets/images/banner-slider-01.jpg')}}" alt="">
                                        <div class="tpslider-banner__content">
                                            <span class="tpslider-banner__sub-title">Hand made</span>
                                            <h4 class="tpslider-banner__title">New Modern & Stylist <br> Crafts</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="tpslider-banner">
                                <a href="shop-details.html">
                                    <div class="tpslider-banner__img">
                                        <img src="{{asset('front/assets/images/banner-slider-02.jpg')}}" alt="">
                                        <div class="tpslider-banner__content">
                                            <span class="tpslider-banner__sub-title">Popular</span>
                                            <h4 class="tpslider-banner__title">Energy with our <br> newest collection</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->


    <!-- product-area-start -->
    <section class="product-area pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="tpsection mb-40">
                        <h4 class="tpsection__title">Popular <span> Products <img src="assets/img/icon/title-shape-01.jpg" alt=""></span></h4>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="tpnavbar">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                    aria-selected="true">All</button>
                                <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                    aria-selected="false">Popular</button>
                                <button class="nav-link" id="nav-rate-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-rate" type="button" role="tab" aria-controls="nav-rate"
                                    aria-selected="false">Best Rated</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                       @foreach ($produks as $data)
                        <div class="col">
                            <div class="tpproduct pb-15 mb-30">
                               <div class="tpproduct__thumb p-relative">
                                  <a href="{{url('shopdetail', ['id'=>$data->id])}}">
                                     <img src="{{ asset('image/produk/'.$data->cover)}}" width="200" height="300">
                                     <img class="product-thumb-secondary"
                                     src="" alt="">
                                    </a>
                                </div>
                                <div class="tpproduct__content">
                                    <h3 class="tpproduct__title"><a href="shop-details.html">{{$data->nama_produk}}</a></h3>
                                    <div class="tpproduct__priceinfo p-relative">
                                       <div class="tpproduct__priceinfo-list">
                                          <span>Rp. {{$data->harga}}</span>
                                        </div>
                                        <div class="tpproduct__cart">
                                           <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-area-end -->
@endsection
