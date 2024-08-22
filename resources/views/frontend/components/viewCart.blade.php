
 <!-- breedcrumb section start  -->
 <div class="section breedcrumb">
    <div class="breedcrumb__img-wrapper">
      <img src="{{asset ('frontend/src/images/banner/breedcrumb.jpg') }}" alt="breedcrumb" />
      <div class="container">
        <ul class="breedcrumb__content">
          <li>
            <a href="{{ route('home') }}">
              <svg
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M1 8L9 1L17 8V18H12V14C12 13.2044 11.6839 12.4413 11.1213 11.8787C10.5587 11.3161 9.79565 11 9 11C8.20435 11 7.44129 11.3161 6.87868 11.8787C6.31607 12.4413 6 13.2044 6 14V18H1V8Z"
                  stroke="#808080"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <span> > </span>
            </a>
          </li>
          <li class="active">
            <a href="#">Shopping cart</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breedcrumb section end   -->

  <!-- Shopping Cart Section Start   -->
  <section class="shoping-cart section section--xl">
    <div class="container">
      <div class="section__head justify-content-center">
        <h2 class="section--title-four font-title--sm">My Shopping Cart</h2>
      </div>
      @if(session()->has('cart') and count(session()->get('cart')) > 0)
      <div class="row shoping-cart__content">

        <div class="col-lg-8">
          <div class="cart-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="cart-table-title">Product</th>
                    <th scope="col" class="cart-table-title">Price</th>
                    <th scope="col" class="cart-table-title">quantity</th>
                    <th scope="col" class="cart-table-title">Subtotal</th>
                  </tr>
                </thead>
                <tbody>

                            @php
                            $subtotal = 0;
                            @endphp
                            @foreach(session()->get('cart') as $key => $data)
                            @php
                            $subtotal += $data['subtotal'];
                            @endphp
                  <tr>
                    <!-- Product item  -->
                    <td class="cart-table-item align-middle">
                      <a
                        href="{{ url('/product') }}"
                        class="cart-table__product-item"
                      >
                       
                        <h5 class="font-body--lg-400">{{$data['name']}}</h5>
                      </a>
                    </td>
                    <!-- Price  -->
                    <td class="cart-table-item order-date align-middle">
                        {{$data['price']}} Tk
                    </td>
                    <!-- quantity -->
                    <td class="cart-table-item order-total align-middle">
                      <div class="counter-btn-wrapper">
                        
                        <input
                          type="readonly"
                          id="counter-btn-counter"
                          class="counter-btn-counter"
                          min="1"
                          max="1000"
                          placeholder="1" value="{{$data['quantity']}}" disabled
                        />
                       
                      </div>
                    </td>
                    <!-- Subtotal  -->
                    <td class="cart-table-item order-subtotal align-middle">
                      <div
                        class="
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                      >
                        <p class="font-body--md-500">{{$data['subtotal']}} Tk.</p>
                        <a href="{{route('cart.item.delete',$key)}}">
                        <button class="delete-item">
                          <svg
                            width="24"
                            height="25"
                            viewBox="0 0 24 25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M12 23.5C18.0748 23.5 23 18.5748 23 12.5C23 6.42525 18.0748 1.5 12 1.5C5.92525 1.5 1 6.42525 1 12.5C1 18.5748 5.92525 23.5 12 23.5Z"
                              stroke="#CCCCCC"
                              stroke-miterlimit="10"
                            />
                            <path
                              d="M16 8.5L8 16.5"
                              stroke="#666666"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M16 16.5L8 8.5"
                              stroke="#666666"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                    </a>
                      </div>
                    </td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- Action Buttons  -->
            
              <div class="cart-table-action-btn d-flex">
                <a
                  href="{{ route('home') }}"
                  class="button button--md  shop"
                  >Return to Shop</a
                >
                <a href="{{route('cart.clear')}}" class="button button--md update"
                  >Remove to Cart</a
                >
              </div>
           
          </div>

       
          
        </div>

        <div class="col-lg-4">
          <div class="bill-card">
            <div class="bill-card__content">
              <div class="bill-card__header">
                <h2 class="bill-card__header-title font-body--xxl-500">
                  Order Summery
                </h2>
              </div>
              <div class="bill-card__body">
                <!-- memo  -->
                <div class="bill-card__memo">
                  <!-- Subtotal  -->
                  <div class="bill-card__memo-item subtotal">
                    <p class="font-body--md-400">Subtotal:</p>
                    <span class="font-body--md-500">{{$subtotal}} Tk.</span>
                  </div>
                  
                  <!-- total  -->
                  <div class="bill-card__memo-item total">
                    <p class="font-body--lg-400">Total:</p>
                    <span class="font-body--xl-500">{{$subtotal}} Tk.</span>
                  </div>
                </div>
                <form action="{{ url('/product-checkout', $key) }}">
                  <button
                    class="button button--lg w-100"
                    style="margin-top: 20px"
                    type="submit"
                  >
                    Place Order
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="row">
          <div class="col-lg-12">
              <h3>Your cart is empty. :)</h3>
          </div>
      </div>
      @endif
    </div>
  </section>
  <!-- Shopping Cart Section End    -->