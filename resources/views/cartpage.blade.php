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
                        <span class="breadcrumb-item-active"><a href="index.html">Home</a></span>
                        <span>Cart</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Product Cart</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          
      <!-- cart area -->
      <section class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
         <div class="row">
            <div class="col-12">
               <form action="#">
                  <div class="table-content table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="product-thumbnail">Images</th>
                              <th class="cart-product-name">Courses</th>
                              <th class="product-price">Unit Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal">Total</th>
                              <th class="product-remove">Remove</th>
                           </tr>
                        </thead>
                        <tbody>
                                 @foreach ($cartItems as $data )     
                                 <tr>
                                    <td class="product-thumbnail">
                                       <a href="shop-details.html"><img src="{{asset('image/produk/'.$data->produk->cover)}}" alt="">
                                       </a>
                                    </td>
                                    <td class="product-name">
                                       <a href="shop-details.html">{{$data->produk->nama_produk}}</a>
                                    </td>
                                    <td class="product-price">
                                       <span class="amount">Rp.{{$data->produk->harga}}</span>
                                    </td>
                                    @csrf
                                    <form action="{{ route('cart.update', $data->id) }}" method="POST">
                                       <td class="product-quantity">
                                          <span class="cart-minus">-</span>
                                          <input class="cart-input" type="text" value="{{$data->qty}}" name="qty"/>
                                          <span class="cart-plus">+</span>
                                       </form>
                                    </td>
                                    <td class="product-subtotal">
                                       <span class="amount">Rp.{{$data->sub_total}}</span>
                                    </td>
                                    <td class="product-remove">
                                        <form action="{{ route('cart.delete', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-remove">
                                            <i class="fal fa-times"></i>
                                        </button>
                                    </form>
                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                        </table>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-md-5 ">
                              <div class="cart-page-total">
                                 <h2>Cart totals</h2>
                                 <ul class="mb-20">
                                    <li>Total <span>Rp.{{$total}}</span></li>
                                 </ul>
                                 <a href="{{url('checkout')}}" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                              </div>
                        </div>
                     </div>
                  </form>
            </div>
         </div>
         </div>
      </section>
      <!-- cart area end-->

      </main>

          
    

      </main>
      <!-- main-area-end -->
      @endsection