

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
          <li>
            <a href="#">
              Shopping Cart
              <span> > </span>
            </a>
          </li>
          <li class="active"><a href="#">Checkout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breedcrumb section end   -->

  <!-- Billing Section Start  -->
  <section class="section billing section--xl pt-0">
    <div class="container">
      <div class="row billing__content">
        <div class="col-lg-8">
          <div class="billing__content-card">
            <div class="billing__content-card-header">
              <h2 class="font-body--xxxl-500">Billing Information</h2>
            </div>
            <div class="billing__content-card-body">
                <form action="{{route('pay.now',$products->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="contact-form__content">
                  <div class="contact-form__content-group">
                    <div class="contact-form-input">
                      <label for="fname1">Full Name </label>
                      <input
                        type="text"
                        id="fname1"
                        placeholder="Your name"
                        name="full_name"
                      />
                      @error('full_name')

                    <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>
                    
                    
                    <div class="contact-form-input">
                      <label for="lname2">Phone </label>
                      <input
                        type="tel"
                        id="lname2"
                        placeholder="01700000000"
                        name="phone"
                      />
                      
                      @error('phone')

                      <small class="text-danger">{{$message}}</small>

                      @enderror
                    </div>
                    <div class="contact-form-input">
                      <label for="company"
                        >Email 
                      </label>
                      <input
                        type="text"
                        id="company"
                        placeholder="iubat@gmail.com"
                        name="email"
                      />
                      @error('email')

                    <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>
                    
                    
                  </div>

                  <div class="contact-form-input">
                    <label for="address"> Address </label>
                    <input
                      type="text"
                      id="address"
                      placeholder="Your Address"
                      name="address"
                    />
                  </div>

                
                  @error('address')

                  <small class="text-danger">{{$message}}</small>

                  @enderror
                
                </div>

                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="product_id" value="{{$products->id}}">
                <input type="hidden" name="transaction_id">
                <input type="hidden" name="currency">
           
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
                <!-- Product Info -->
                <div class="bill-card__product">


                    @if(session()->has('cart') && is_array(session()->get('cart')))
                                        @foreach(session()->get('cart') as $data)
                                           
                                       
                  <div class="bill-card__product-item">
                    <div class="bill-card__product-item-content">
                      
                      <h5 class="font-body--md-400">
                        {{$data['name']}} 
                      </h5>
                    </div>

                    <p class="bill-card__product-price font-body--md-500">
                        {{$data['subtotal']}} Tk.
                    </p>
                  </div>

                  @endforeach
                  @endif

                </div>
                <!-- memo  -->
                <div class="bill-card__memo">
                  <!-- Subtotal  -->
                  <div class="bill-card__memo-item subtotal">
                    <p class="font-body--md-400">Subtotal:</p>
                    <span class="font-body--md-500">{{ $subtotal ?? 0 }} Tk.</span>
                  </div>
                  
                  <!-- total  -->
                  <div class="bill-card__memo-item total">
                    <p class="font-body--lg-400">Total:</p>
                    <span class="font-body--xl-500">{{ $subtotal ?? 0 }} Tk.</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="bill-card__content">
              <div class="bill-card__header">
                <div class="bill-card__header">
                  
                </div>
              </div>
              <div class="bill-card__body">
               
                  
                  <button class="button button--lg w-100" type="submit">
                    Place Order
                  </button>
               
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Billing Section  End  -->