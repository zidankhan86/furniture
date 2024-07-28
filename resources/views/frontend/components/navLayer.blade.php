<!-- Header Section start -->
        <header class="header header--one">
            
            <div class="header__center">
                <div class="container">
                    <div class="header__center-content">
                        <div class="header__brand">
                            <button class="header__sidebar-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 12H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 6H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 18H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            @php
                            $logo = App\Models\CompanyLogo::latest()->first();
                    @endphp
                            <div>
                                @if($logo)
                                <a href="{{ route('home') }}"><img src="{{url('/public/uploads/', $logo->image)}}" alt=""></a>
                                @else
                                    <a href="{{ route('home') }}">Inseart a logo</a>
                                 @endif
                            </div>
                        </div>
                        <form action="{{ route('user.search') }}">
                            @csrf
                            <div class="header__input-form">
                              
       
                                    <input type="text"  name="search_key"  placeholder="What do you need?">
                                    
                                <span class="search-icon">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path d="M17.4999 18L13.8749 14.375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <button type="submit" class="search-btn button button--md">
                                    Search
                                </button>
                            </div>
                        </form>
                        <div class="header__cart">
                            <div class="header__cart-item">
                               

                                <a class="fav" href="{{ route('wishlist.index') }}">
                                    <button class="btn btn-black">
                                        <svg width="25" height="23" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.9996 16.5451C-6.66672 7.3333 4.99993 -2.6667 9.9996 3.65668C14.9999 -2.6667 26.6666 7.3333 9.9996 16.5451Z" stroke="#1A1A1A" stroke-width="1.5" />
                                        </svg>
                                        @auth
                                            <span class="wishlist-count">{{ Auth::user()->wishlistProducts->count() }}</span>
                                        @else
                                            <span class="wishlist-count">0</span>
                                        @endauth
                                    </button>
                                </a>
                            </div>
                            <div class="header__cart-item">
                                <div class="header__cart-item-content" id="cart-bag">
                                    <button class="cart-bag">
                                        <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.3333 14.6667H7.08333L4.25 30.25H29.75L26.9167 14.6667H22.6667M11.3333 14.6667V10.4167C11.3333 7.28705 13.8704 4.75 17 4.75V4.75C20.1296 4.75 22.6667 7.28705 22.6667 10.4167V14.6667M11.3333 14.6667H22.6667M11.3333 14.6667V18.9167M22.6667 14.6667V18.9167"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                        
                                    </button>
                                    <div class="header__cart-item-content-info">
                                    

                                        <li>
                                            <a href="{{ url('/view-cart') }}">
                                                <span class="cart-count">{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</span>
                                            </a>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-content">
                        <ul class="header__navigation-menu">
                            <!-- Homepages -->
                            <li class="header__navigation-menu-link">
                                <a href="{{ route('home') }}">
                                    Home
                                   
                                </a>
                                
                            </li>
                            <!-- Shopepages -->
                            <li class="header__navigation-menu-link">
                                <a href="{{ url('/product') }}">
                                    Products
                                    
                                </a>
                            
                            </li>
                            
                            <li class="header__navigation-menu-link">
                                <a href="about.html">About us </a>
                            </li>
                            <li class="header__navigation-menu-link">
                                <a href="{{ url('/contact') }}">Contact us</a>
                            </li>
                        </ul>

                        
                    </div>
                </div>
            </div>
            <div class="header__sidebar">
                <button class="header__cross">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="header__mobile-sidebar">
                    <div class="header__mobile-top">
                        <form action="#">
                            <div class="header__mobile-input">
                                <input type="text" placeholder="Search" />
                                <button class="search-btn">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path d="M17.4999 18L13.8749 14.375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <ul class="header__mobile-menu">
                            <li class="header__mobile-menu-item active">
                                <a href="#" class="header__mobile-menu-item-link">
                                    Home
                                    <span class="drop-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="header__mobile-dropdown-menu">
                                    <li class="header__mobile-dropdown-menu-link active">
                                        <a href="index.html">Home 01</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="home-02.html">Home 02</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="home-03.html">Home 03</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="home-04.html">Home 04</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="home-05.html">Home 05</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__mobile-menu-item">
                                <a href="#" class="header__mobile-menu-item-link">
                                    Shop
                                    <span class="drop-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="header__mobile-dropdown-menu">
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="shop-01.html">Shop 01</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="shop-02.html">Shop 02</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__mobile-menu-item">
                                <a href="#" class="header__mobile-menu-item-link">
                                    Pages
                                    <span class="drop-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="header__mobile-dropdown-menu">
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="product-details.html">Product Details</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="shopping-cart.html">Shopping Cart</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="checkout.html">Checkout</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="sign-in.html">Sign in</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="create-account.html">Create Account</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="user-dashboard.html">User Dashboard</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="order-history.html">order history</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="order-details.html">Order Details</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="account-setting.html">Account Settings</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="faq.html">faq</a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="404.html">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__mobile-menu-item">
                                <a href="#" class="header__mobile-menu-item-link">
                                    Blog
                                    <span class="drop-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="header__mobile-dropdown-menu">
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="single-blog.html">Single Blog </a>
                                    </li>
                                    <li class="header__mobile-dropdown-menu-link">
                                        <a href="blog-list.html">Blog list</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__mobile-menu-item">
                                <a href="about.html" class="header__mobile-menu-item-link">About</a>
                            </li>
                            <li class="header__mobile-menu-item">
                                <a href="contact.html" class="header__mobile-menu-item-link">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__mobile-bottom">
                        <div class="header__mobile-user">
                            <div class="header__mobile-user--img">
                                <img src="frontend/src/images/user/img-03.png" alt="user" />
                            </div>
                            <div class="header__mobile-user--info">
                                <h2 class="font-body--lg-500">Dianne Russell</h2>
                                <p class="font-body--md-400">dianne.russell@gmail.com</p>
                            </div>
                        </div>
                        <div class="header__mobile-action d-none">
                            <a href="#" class="button button--md">Sign in</a>
                            <a href="#" class="button button--md button--disable">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header  Section start -->