

<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
      <div class="container">
          <div class="banner_content text-center">
              <h2>Checkout</h2>
              <div class="page_link">
                  <a href="{{ route('home') }}">Home</a>
                  
              </div>
          </div>
      </div>
  </div>
</section>

  <!-- Billing Section Start -->
<section class="section billing section--xl py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-4">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Billing Information</h2>
          </div>
          <div class="card-body">
            <form action="{{route('pay.now',$products->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fname1">Full Name</label>
                  <input type="text" class="form-control" id="fname1" name="full_name" placeholder="Enter Your name">
                  @error('full_name')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="lname2">Phone</label>
                  <input type="tel" class="form-control" id="lname2" name="phone" placeholder="Enter your phone number">
                  @error('phone')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                @error('email')
                  <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">
                @error('address')
                  <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <!-- Hidden fields -->
              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
              <input type="hidden" name="product_id" value="{{$products->id}}">
              <input type="hidden" name="transaction_id">
              <input type="hidden" name="currency">
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card shadow-sm mb-4">
          <div class="card-header bg-dark text-white">
            <h2 class="mb-0">Order Summary</h2>
          </div>
          <div class="card-body">
            <!-- Product Info -->
            <div class="mb-3">
              @if(session()->has('cart') && is_array(session()->get('cart')))
                @foreach(session()->get('cart') as $data)
                  <div class="d-flex justify-content-between">
                    <span>{{$data['name']}}</span>
                    <span>{{$data['subtotal']}} Tk.</span>
                  </div>
                @endforeach
              @endif
            </div>
            <!-- Subtotal and Total -->
            <div class="d-flex justify-content-between border-top pt-2">
              <strong>Subtotal:</strong>
              <span>{{ $subtotal ?? 0 }} Tk.</span>
            </div>
            <div class="d-flex justify-content-between">
              <strong>Total:</strong>
              <span>{{ $subtotal ?? 0 }} Tk.</span>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block" type="submit">Place Order</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Billing Section End -->
