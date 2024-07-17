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
                        <span>Checkout</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Checkout Page</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          

      <!-- checkout-area start -->
      <section class="checkout-area pb-50 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container mt-4 ">
            <form action="#">
               <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                           <h3>Billing Details</h3>
                           <div class="row">
                                 <div class="col-md-12">
                                    <div class="country-select">
                                       <label>Country <span class="required">*</span></label>
                                       <select>
                                             <option value="volvo">United States</option>
                                             <option value="saab">Algeria</option>
                                             <option value="mercedes">Canada</option>
                                             <option value="audi">Germany</option>
                                             <option value="audi2">England</option>
                                             <option value="audi3">Qatar</option>
                                             <option value="audi5">Dominican Republic</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label> Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Address <span class="required">*</span></label>
                                       <input type="text" placeholder="Street address" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label> City <span class="required">*</span></label>
                                       <input type="text" placeholder="Town / City" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Email Address <span class="required">*</span></label>
                                       <input type="email" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Phone <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="your-order mb-30 ">
                           <h3>Your order</h3>
                           <div class="your-order-table table-responsive">
                                 <table>
                                    <thead>
                                       <tr>
                                          <th class="product-name">Product</th>
                                          <th class="product-total">Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="cart_item">
                                             <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">$165.00</span>
                                             </td>
                                       </tr>
                                       <tr class="cart_item">
                                             <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">$50.00</span>
                                             </td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr class="cart-subtotal">
                                             <th>Cart Subtotal</th>
                                             <td><span class="amount">$215.00</span></td>
                                       </tr>
                                       <tr class="order-total">
                                             <th>Order Total</th>
                                             <td><strong><span class="amount">$215.00</span></strong>
                                             </td>
                                       </tr>
                                    </tfoot>
                                 </table>
                           </div>
                           <div class="payment-method">
                              <div class="accordion" id="checkoutAccordion">
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="checkoutOne">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                       Direct Bank Transfer
                                       </button>
                                    </h2>
                                    <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="paymentTwo">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                       Cheque Payment
                                       </button>
                                    </h2>
                                    <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Please send your cheque to Store Name, Store Street, Store Town, Store
                                       State / County, Store
                                       Postcode.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="paypalThree">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                       PayPal
                                       </button>
                                    </h2>
                                    <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Pay via PayPal; you can pay with your credit card if you don’t have a
                                       PayPal account.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="order-button-payment mt-20">
                                 <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place order</button>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </form>
         </div>
      </section>
      <!-- checkout-area end -->

      </main>
      <!-- main-area-end -->
      @endsection