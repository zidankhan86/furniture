@extends('frontend.master')

@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Furniture</h2>
                <div class="page_link">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('shop') }}">Shop</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="our_blog_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Flagship Furniture</h2>
                <p>Organize every space with our timeless furniture collections</p>
            </div>
            <div class="blog_inner row">
                @foreach ($products as $item)
                    <div class="col-lg-4">
                        <div class="o_blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="{{ asset('/public/uploads/' . $item->image) }}" alt="">
                            </div>
                            <div class="blog_text">
                                <a href="#">
                                    <h4>{{ $item->name }}</h4>
                                </a>

                                <a href="#">
                                    <h4>{{ $item->price }} Tk.</h4>
                                </a>


                                <div class="blog_cat">
                                    <a class="active" href="{{ route('add.to.cart', $item->id) }}">Add to cart</a>
                                    <a href="{{ url('/product-details', $item->id) }}">Details</a>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $products->links() }}
        </div>
    </section>
@endsection
