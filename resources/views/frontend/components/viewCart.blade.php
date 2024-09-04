<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
      <div class="container">
          <div class="banner_content text-center">
              <h2>Cart</h2>
              <div class="page_link">
                  <a href="{{ route('home') }}">Home</a>
                  
              </div>
          </div>
      </div>
  </div>
</section>

 <!-- Shopping Cart Section Start -->
<section class="shoping-cart section py-5 bg-light">
  <div class="container">
    <div class="section__head text-center mb-4">
      <h2 class="font-weight-bold">My Shopping Cart</h2>
    </div>
    @if(session()->has('cart') && count(session()->get('cart')) > 0)
    <div class="row">
      <div class="col-lg-8">
        <div class="card shadow-sm mb-4">
          <div class="card-body p-4">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
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
                    <td class="align-middle">
                      <a href="{{ url('/product') }}" class="text-dark font-weight-bold">
                        {{$data['name']}}
                      </a>
                    </td>
                    <td class="align-middle">{{$data['price']}} Tk</td>
                    <td class="align-middle">
                      <form action="{{ route('cart.update.quantity', $key) }}" method="POST" class="d-flex">
                        @csrf
                        <input type="number" name="quantity" min="1" max="1000" value="{{ $data['quantity'] }}" class="form-control w-50 mr-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    </td>
                    <td class="align-middle">{{$data['subtotal']}} Tk.</td>
                    <td class="align-middle text-center">
                      <a href="{{ route('cart.item.delete', $key) }}" class="text-danger">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-between mt-4">
              <a href="{{ route('home') }}" class="btn btn-secondary">Return to Shop</a>
              <a href="{{ route('cart.clear') }}" class="btn btn-danger">Clear Cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h3 class="font-weight-bold mb-4">Order Summary</h3>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Subtotal:</p>
              <p class="font-weight-bold">{{$subtotal}} Tk.</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total:</p>
              <p class="font-weight-bold">{{$subtotal}} Tk.</p>
            </div>
            <form action="{{ url('/product-checkout', $key) }}" class="mt-3">
              <button class="btn btn-success btn-block" type="submit">Place Order</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3>Your cart is empty. :)</h3>
      </div>
    </div>
    @endif
  </div>
</section>

 