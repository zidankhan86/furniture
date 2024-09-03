<section class="our_blog_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Creations with purpose</h2>
            <p>Designed to enhance your personification</p>
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
