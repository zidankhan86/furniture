

 <!--Footer Section Start  -->
 <footer class="footer footer--one">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <!-- Brand information-->
                <div class="col-lg-4">
                    <div class="footer__brand-info">
                        @php
                        $logo = App\Models\CompanyLogo::latest()->first();
                        @endphp
                        <div class="footer__brand-info-logo">
                            @if($logo)
                            <a href="{{ route('home') }}"><img src="{{url('/public/uploads/', $logo->image)}}" alt=""></a>
                            @else
                                <a href="{{ route('home') }}">Inseart a logo</a>
                             @endif
                        </div>
                       
                        <div class="footer__brand-info-contact">
                            <a href="#"><span>(219)555-0114</span></a>
                            or
                            <a href="#"><span>iubat@gmail.com</span></a>
                        </div>
                    </div>
                </div>
                <!-- My Account  -->
                <div class="col-lg-2 col-md-3 col-6">
                    <ul class="footer__navigation">
                        <li class="footer__navigation-title">
                            <h2 class="font-body--lg-500">My Account</h2>
                        </li>
                        <li class="footer__navigation-link">
                            <a href="#"> My Account </a>
                        </li>
                        @auth
                        <li class="footer__navigation-link">
                            <a href="{{ route('profile') }}"> order History </a>
                        </li> 
                        @endauth
                       
                      
                    </ul>
                </div>
                <!-- Helps  -->
                <div class="col-lg-2 col-md-3 col-6">
                    <ul class="footer__navigation">
                        <li class="footer__navigation-title">
                            <h2 class="font-body--lg-500">My Helps</h2>
                        </li>
                        <li class="footer__navigation-link">
                            <a href="{{ url('contact') }}"> Contact </a>
                        </li>
                       
                    </ul>
                </div>
                <!-- Proxy -->
                <div class="col-lg-2 col-md-3 col-6">
                    <ul class="footer__navigation">
                        <li class="footer__navigation-title">
                            <h2 class="font-body--lg-500">Proxy</h2>
                        </li>
                       
                      
                        <li class="footer__navigation-link">
                            <a href="{{ url('/product') }}"> Product </a>
                        </li>
                       
                    </ul>
                </div>
                <!-- Categories -->
                <div class="col-lg-2 col-md-3 col-6">
                    <ul class="footer__navigation">
                        <li class="footer__navigation-title">
                            <h2 class="font-body--lg-500">Website Name</h2>
                        </li>
                       <li class="footer__navigation">
                        
                       </li>
                       <li class="footer__navigation-link">
                        <a href="{{ url('/home') }}"> {{env('app_name')}} </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__copyright-text">
                {{env('app_name')}} © <script>document.write(new Date().getFullYear());</script>. All Rights Reserved
            </p>
           
        </div>
    </div>
</footer>
<!--Footer Section end  -->