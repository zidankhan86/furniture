@extends('frontend.master')

@section('content')

   <!-- breedcrumb section start  -->
   <div class="section breedcrumb">
    <div class="breedcrumb__img-wrapper">
        <img src="{{url ('frontend/src/images/banner/breedcrumb.jpg') }}" alt="breedcrumb" />
        <div class="container">
            <ul class="breedcrumb__content">
                <li>
                    <a href="{{ route('home') }}">
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
                <li class="active"><a href="about.html">About</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- breedcrumb section end   -->

<!-- Hero Section start  -->
<section class="hero section--xl section">
    <div class="container">
        <div class="row hero__content">
            <div class="col-lg-6 order-lg-0 order-2">
                <div class="hero__text-content">
                    <h5>
                        100% Trusted Organic Food Store
                    </h5>
                   
                </div>
            </div>
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="hero__img-wrapper">
                    <img src="{{url ('frontend/src/images/members/img-08.png') }}" alt="img" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End  -->

@endsection