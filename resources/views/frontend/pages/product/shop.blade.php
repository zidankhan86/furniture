@extends('frontend.master')

  @section('content')


 <!-- Breadcrumb Section Start  -->
 <div class="breedcrumb breedcrumb--two">
    <div class="container">
        <ul class="breedcrumb__content">
            <li>
                <a href="index.html">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
           
            Products
           

        </ul>
    </div>
</div>
<!-- Breadcrumb Section End  -->

<!-- Banner Section Start  -->
<section class="banner-sales">
    <div class="container">
        <div class="banner-sales__content">
            <img src="{{asset ('frontend/src/images/banner/banner-lg-17.jpg') }}" alt="banner" />
            <div class="text-content">
                <span class="title">Best Deals</span>
                <h2 class="font-title--lg">Sale of the Month</h2>
                <div id="countdown" class="countdown-clock"></div>
                <a href="#" class="button button--md">
                    Shop now
                    <span>
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="sale-off">
                <h5>56%</h5>
                <p>off</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End  -->

<!-- Shop list Section Start  -->
<section class="shop shop--two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Desktop Version  -->
                <div class="row shop__product-items">
                    @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6"><br>
                        <div class="cards-md">
                            <a href="{{url('/product-details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                            {{-- <span class="tag danger font-body--md-400">sale 50%</span> --}}
                            <div class="cards-md__favs-list">
                                <span class="action-btn">
                                    @php
                                    $inWishlist = Auth::check() && Auth::user()->wishlistProducts->contains('id', $item->id);
                                    @endphp
        
                                    <form method="POST" action="{{ route('add.to.wishlist', ['id' => $item->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-black{{ $inWishlist ? ' in-wishlist' : '' }}">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.9996 16.5451C-6.66672 7.3333 4.99993 -2.6667 9.9996 3.65668C14.9999 -2.6667 26.6666 7.3333 9.9996 16.5451Z" stroke="currentColor" stroke-width="1.5"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    
                                </span>
                                <a href="{{url('/product-details',$item->id)}}"><span class="action-btn" data-bs-toggle="modal" data-bs-target="#productView">
                                    
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102V3.54102Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M10 13.125C10.8288 13.125 11.6237 12.7958 12.2097 12.2097C12.7958 11.6237 13.125 10.8288 13.125 10C13.125 9.1712 12.7958 8.37634 12.2097 7.79029C11.6237 7.20424 10.8288 6.875 10 6.875C9.1712 6.875 8.37634 7.20424 7.79029 7.79029C7.20424 8.37634 6.875 9.1712 6.875 10C6.875 10.8288 7.20424 11.6237 7.79029 12.2097C8.37634 12.7958 9.1712 13.125 10 13.125V13.125Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </span></a>
                                
                            </div>
                        </div>
                        <div class="cards-md__info d-flex justify-content-between align-items-center">
                            <a href="product-details.html" class="cards-md__info-left">
                                <h6 class="font-body--md-400">{{ $item->name }}</h6>
                                <div class="cards-md__info-price">
                                    <span class="font-body--lg-500">{{ $item->price }} Tk</span>
                                    {{-- <del class="font-body--lg-400">{{ $item->price }} TK</del> --}}
                                </div>
                                
                            </a>
                            <div class="cards-md__info-right">
                                <a href="{{route('add.to.cart',$item->id)}}"> <span class="action-btn">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.66667 8.83333H4.16667L2.5 18H17.5L15.8333 8.83333H13.3333M6.66667 8.83333V6.33333C6.66667 4.49239 8.15905 3 10 3V3C11.8409 3 13.3333 4.49238 13.3333 6.33333V8.83333M6.66667 8.83333H13.3333M6.66667 8.83333V11.3333M13.3333 8.83333V11.3333"
                                            stroke="currentColor"
                                            stroke-width="1.3"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </span></a>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $products->links() }}
              
            </div>
        </div>
    </div>
</section>
<!-- Shop list Section End   -->
@endsection


