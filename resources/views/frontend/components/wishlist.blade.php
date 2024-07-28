@extends('frontend.master')

@section('content')

        <!-- breedcrumb section start  -->
        <div class="section breedcrumb">
            <div class="breedcrumb__img-wrapper">
              <img src="{{asset ('frontend/src/images/banner/breedcrumb.jpg') }}" alt="breedcrumb" />
              <div class="container">
                <ul class="breedcrumb__content">
                  <li>
                    <a href="index.html">
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
                  <li class="active"><a href="wishlist.html">Wishlist</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- breedcrumb section end   -->
      
          <!-- Shopping Cart Section Start   -->
          <section class="shoping-cart section section--xl">
            <div class="container">
              <div class="section__head justify-content-center">
                <h2 class="section--title-four font-title--sm">My Wishlist</h2>
              </div>
              <div class="shoping-cart__content">
                <div class="cart-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            
                          <th scope="col" class="cart-table-title">Product</th>
                          <th scope="col" class="cart-table-title">Price</th>
                          <th scope="col" class="cart-table-title">Stock Status</th>
                      
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $wishlist)
                        <tr>
                          <!-- Product item  -->
                          <td class="cart-table-item align-middle">
                            <a
                              href="product-details.html"
                              class="cart-table__product-item"
                            >
                              <div class="cart-table__product-item-img">
                                <img
                                  src="{{ asset('/public/uploads/' . $wishlist->image) }}"
                                  alt="product"
                                />
                              </div>
                              <h5 class="font-body--lg-400">{{ $wishlist->name }}</h5>
                            </a>
                          </td>
                          <!-- Price  -->
                          <td class="cart-table-item order-date align-middle">
                            <p class="font-body--lg-500">{{ $wishlist->price }} Tk</p>
                          </td>
                          <!-- Stock Status  -->
                          <td class="cart-table-item stock-status align-middle">
                            <span class="font-body--md-400 in"> in Stock</span>
                          </td>
                          <td class="cart-table-item add-cart align-middle">
                            <div class="add-cart__wrapper">
                                <form action="{{ route('cart.add-from-wishlist', $wishlist->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1" min="1"> <!-- Quantity input -->
                                    <button class="button button--md">Add to Cart</button>
                                </form>
                 
                              <a href="{{route('remove.Wishlist',$wishlist->id)}}" class="delete-item">
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
                              </a>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
      
                  <!-- Share with  -->
      
                </div>
                
              </div>
            </div>
          </section>
          <!-- Shopping Cart Section End    -->
@endsection
