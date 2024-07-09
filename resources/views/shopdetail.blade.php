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
                        <span class="breadcrumb-item-active"><a href="{{url('/')}}">Home</a></span>
                        <span>Shop Details</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Shop Details</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          
      <!-- product-area-start -->
      <section class="product-area pt-80    pb-25">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-12">
                  <div class="tpproduct-details__nab pr-50 mb-40">
                     <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                           <img src="{{ asset('image/produk/'.$produks->cover)}}" alt="">
                          </div>
                        </div>
                      </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-7">
                     
                  <div class="tpproduct-details__content">
                     <div class="tpproduct-details__title-area d-flex align-items-center flex-wrap mb-5">
                        <h3 class="tpproduct-details__title">{{$produks->nama_produk}}</h3>
                        <span class="tpproduct-details__stock">Stock: {{$produks->stok}}</span>
                     </div>
                     <div class="tpproduct-details__price mb-30">
                        <span>Rp.{{$produks->harga}}</span>
                     </div>
                     <div class="tpproduct-details__pera">
                        <p>{{$produks->deskripsi}}  <br>Buy it at the best price.</p>
                     </div>
                     <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">
                        <div class="tpproduct-details__quantity">
                           <span class="cart-minus"><i class="far fa-minus"></i></span>
                           <input class="tp-cart-input" type="text" value="1">
                           <span class="cart-plus"><i class="far fa-plus"></i></span>
                        </div>
                        <div class="tpproduct-details__cart ml-20">
                           <button><i class="fal fa-shopping-cart"></i> Add To Cart</button>
                        </div>
                        <div class="tpproduct-details__wishlist ml-20">
                           <a href="#"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproductdot mb-30">
                        <a class="tpproductdot__variationitem" href="#">
                           <div class="tpproductdot__termshape">
                              <span class="tpproductdot__termshape-bg"></span>
                              <span class="tpproductdot__termshape-border"></span>
                           </div>
                        </a>
                        <a class="tpproductdot__variationitem" href="#">
                           <div class="tpproductdot__termshape">
                              <span class="tpproductdot__termshape-bg red-product-bg"></span>
                              <span class="tpproductdot__termshape-border red-product-border"></span>
                           </div>
                        </a>
                        <a class="tpproductdot__variationitem" href="#">
                           <div class="tpproductdot__termshape">
                              <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                              <span class="tpproductdot__termshape-border orange-product-border"></span>
                           </div>
                        </a>
                        <a class="tpproductdot__variationitem" href="#">
                           <div class="tpproductdot__termshape">
                              <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                              <span class="tpproductdot__termshape-border purple-product-border"></span>
                           </div>
                        </a>
                     </div>
                     <div class="tpproduct-details__information tpproduct-details__code">
                     </div>
                     <div class="tpproduct-details__information tpproduct-details__categories">
                        <p>Categories:</p>
                        <span>{{$produks->kategori->category_name}}</span>
                     </div>
                     <div class="tpproduct-details__information tpproduct-details__tags">
                     </div>
                     <div class="tpproduct-details__information tpproduct-details__social">
                        <p>Share:</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-md-5">
                  <div class="tpproduct-details__condation">
                     <ul>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="assets/img/icon/product-det-1.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>Free Shipping apply to all<br>orders over $100</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="assets/img/icon/product-det-2.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>Guranteed 100% Organic<br>from natural farmas</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="assets/img/icon/product-det-3.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>1 Day Returns if you change<br>your mind</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="tpproduct-details__condation-item d-flex align-items-center">
                              <div class="tpproduct-details__condation-thumb">
                                 <img src="assets/img/icon/product-det-4.png" alt="" class="tpproduct-details__img-hover">
                              </div>
                              <div class="tpproduct-details__condation-text">
                                 <p>Covid-19 Info: We keep<br>delivering.</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- product-area-end -->

      <!-- product-details-area-start -->
      <div class="product-details-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tpproduct-details__navtab mb-60">
                     <div class="tpproduct-details__nav mb-30">
                        <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-1" type="button" role="tab" aria-controls="home-1" aria-selected="true">Description</button>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content tp-content-tab" id="myTabContent-2">
                        <div class="tab-para tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                           <p class="mb-30">In marketing a product is an object or system made available for consumer use it is anything that can be offered to a market to satisfy the desire or need of a customer. In retailing, products are often referred to as
                              merchandise, and in manufacturing, products are bought as raw materials and then sold as finished goods. A service is also regarded to as a type of product. Commodities are usually raw materials such as metals
                              and agricultural products, but a commodity can also be anything widely available in the open market. In project management, products are the formal definition of the project deliverables that make up contribute
                              to delivering the objectives of the project.</p>
                           <p>A product can be classified as tangible or intangible. A tangible product is a physical object that can be perceived by touch such as a building, vehicle, gadget, or clothing. An intangible product is a product that
                              can only be perceived indirectly such as an insurance policy. Services can be broadly classified under intangible products which can be durable or non durable. A product line is "a group of products that are
                              closely related, either because they function in a similar manner, are sold to the same customer groups, are marketed through the same types of outlets, or fall within given price ranges."Many businesses offer a
                              range of product lines which may be unique to a single organisation or may be common across the business's industry. In 2002 the US Census compiled revenue figures for the finance and insurance industry by
                              various product lines such as "accident, health and medical insurance premiums" and "income from secured consumer loans.</p>
                        </div>
                        <div class="tab-pane fade" id="additional-information" role="tabpanel"
                        aria-labelledby="information-tab">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product-details-area-end -->

      </main>
      <!-- main-area-end -->

   @endsection