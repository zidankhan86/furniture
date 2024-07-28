{{-- 
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>ALL PRODUCTS</h2>
                </div>
                <div class="featured__controls">

                </div>
            </div>
        </div>
        <div class="row featured__filter">

            

            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">

                <div class="featured__item">
                    <div class="featured__item__pic">
                        
                        <ul class="featured__item__pic__hover">
                       @auth
                        <li>
                           

                            
                            </li>
                          @endauth
                            
                            <li><a href="{{route('add.to.cart',$item->id)}}"><i class="fa fa-shopping-cart"></i></a></li>

                        </ul>
                             </div>

                      
                        <div class="featured__item__text">

                
                            <h6><p></p></h6>
                            

                               

                               
                            </div>

                            <h5 style="color: rgb(214, 57, 17)">{{ $item->price }} Tk.</h5>
                           
                        </div>



                        <br>

                </div>
            </div>
           


        </div >
        <div class="pagination justify-content-end">
            
        </div>

    </div>


   
</section>


 --}}
   <!-- popular products Section Start  -->
   <section class="popular-products section section--md">
    <div class="container">
        <div class="section__head">
            <h2 class="section--title-one font-title--sm">Popular products</h2>
            <a href="shop-01.html">
                View All
                <span>
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>

        <!-- Desktop Versions -->
        <div class="popular-products__wrapper">

            @foreach ($products as $item)
            <div class="cards-md">
                <div class="cards-md__img-wrapper">
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
                            <del class="font-body--lg-400">{{ $item->price }} Tk</del>
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
        <br>  {{ $products->links() }}
    
    </div>
</section>
<!-- popular products Section end  -->