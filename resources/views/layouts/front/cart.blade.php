  <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
          <h4 class="tpcart__title">Your Cart</h4>
          <div class="tpcart__product">
              <div class="tpcart__product-list">
                  <ul>
                      <li>
                          {{-- @foreach ($cartItems as $data)
                              <div class="tpcart__item">
                                  <div class="tpcart__img">
                                      <img src="{{ asset('image/produk/' . $data->produk->cover) }}" alt="">
                                      <div class="tpcart__del">
                                          <a href="#"><i class="far fa-times-circle"></i></a>
                                      </div>
                                  </div>
                                  <div class="tpcart__content">
                                      <span class="tpcart__content-title"><a  >{{$data->produk->nama_produk}}</a>
                                      </span>
                                      <div class="tpcart__cart-price">
                                          <span class="quantity">{{$data->qty}} x</span>
                                          <span class="new-price">Rp.{{$data->produk->harga}}</span>
                                      </div>
                                  </div>
                              </div>
                      </li>
                      <li>
                      </li>
                  </ul>
              </div>
              <div class="tpcart__checkout">
                  <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                      <span> Subtotal:</span>
                      <span class="heilight-price"> {{$data->subtotal}}</span>
                  </div>
                  @endforeach --}}
                  <div class="tpcart__checkout-btn">
                      <a class="tpcart-btn mb-10" href="{{ url('cartpage') }}">View Cart</a>
                      {{-- <a class="tpcheck-btn" href="checkout.html">Checkout</a> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>