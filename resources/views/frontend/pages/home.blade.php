  @extends('frontend.master')

  @section('content')
  @include('frontend.components.hero')
 @include('frontend.components.product')

 

        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Some Features that Made us Unique</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-user"></i>Expert Technicians</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-license"></i>Professional Service</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-phone"></i>Great Support</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-rocket"></i>Technical Skills</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-diamond"></i>Highly Recomended</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Positive Reviews</h4>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->

 <section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2>Looking for a <br />quality and affordable Furniture?</h2>
            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
            <a class="main_btn" href="#">Read Details</a>
        </div>
    </div>
</section>

<section class="clients_logo_area p_120">
    <div class="container">
        <div class="clients_slider owl-carousel">
            <div class="item">
                <img src="frontend/img/clients-logo/c-logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="frontend/img/clients-logo/c-logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="frontend/img/clients-logo/c-logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="frontend/img/clients-logo/c-logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="frontend/img/clients-logo/c-logo-5.png" alt="">
            </div>
        </div>
    </div>
</section>

@endsection
