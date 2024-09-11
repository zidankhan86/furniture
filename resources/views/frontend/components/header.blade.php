
         <!--================Header Menu Area =================-->
         <header class="header_area">
            <div class="top_menu">
                <div class="container">
                    <div class="top_inner">
                        <div class="float-left">
                            

                            @auth
                            @if (auth()->user()->role == 'customer')
                                <a href="{{ route('logout') }}" style="color: red"><i class="fa fa-user"></i> <b>Logout</b></a>
                            @endif
                        @endauth


                        @auth
                        @else
                            <a href="{{ route('login.frontend') }}"><i class="fa fa-user"></i> Sign in</a>
                        @endauth

                           
                            <span>/</span>
                            
                            @guest
                            <a href="{{ route('registration') }}">
                                <div>Registration</div>
                            </a>
                        @endguest

                        @auth
                            @if (auth()->user()->role == 'customer')
                                <a href="{{ url('/profile') }}">
                                    <div>Profile</div>
                                </a>
                            @endif
                        @endauth
                        </div>
                        <div class="float-right">
                            <ul class="list header_socila">
                                <li> <a href="{{ url('/view-cart') }}">
                                    <span class="cart-count"><b style="color: palevioletred">Cart</b> {{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</span>
                                </a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         <div class="main_menu" id="mainNav">
             <nav class="navbar navbar-expand-lg navbar-light">
                 <div class="container">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <a class="navbar-brand logo_h" href="{{ route('home') }}" style="color: green"><b><i>LuxeHome</i></b></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                         <ul class="nav navbar-nav menu_nav ml-auto">
                             <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li> 
                             <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Shop</a></li> 
                             <li class="nav-item submenu dropdown">
                                 <a href="{{ route('about') }}" class="nav-link dropdown-toggle">About Us</a>
                                
                             </li> 
                          
                             <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                         </ul>
                     </div> 
                 </div>
             </nav>
         </div>
     </header>
     <!--================Header Menu Area =================-->
     
   