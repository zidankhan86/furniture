@extends('frontend.master')

@section('content')
   <!--================Home Banner Area =================-->
   <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

   <!--================About Area =================-->
   <section class="about_area p_120">
    <div class="container">
        <div class="about_inner row">
            <div class="col-lg-6">
                <div class="about_left_text">
                    <h6>Brand new app to blow your mind</h6>
                    <h3>We’ve made a life <br />that will change you</h3>
                    <h5>We are here to listen from you deliver exellence</h5>
                    <p>Designed to enhance your personification</p>
                    <a class="main_btn" href="{{ route('shop') }}">Get Started Now</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset ('frontend/img/about-1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End About Area =================-->

@endsection