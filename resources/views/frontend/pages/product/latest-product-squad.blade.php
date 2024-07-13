<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="latest-product__text">
                    <h4>New BEAUTY PRODUCTS</h4>
                    <div class="latest-product__slider owl-carousel">

                        <div class="latest-prdouct__slider__item">

                            @php
                                $latestProducts = \App\Models\Product::where('status', 1)->latest()->limit(3)->get();
                            @endphp

                            @if ($latestProducts->isNotEmpty())
                                @foreach ($latestProducts as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset('/public/uploads/' . $product->image) }}"
                                                alt="{{ $product->name }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->name }}</h6>
                                            <span>BDT {{ $product->price }}</span> {{-- Assuming there's a 'price' attribute in your Product model --}}
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <p>No latest products available.</p>
                            @endif

                        </div>


                        <div class="latest-prdouct__slider__item">

                            @php
                                $trendingProduct = \App\Models\Product::where('status', 2)->latest()->limit(3)->get();

                            @endphp


                            @if ($trendingProduct->isNotEmpty())
                                @foreach ($trendingProduct as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset('/public/uploads/' . $product->image) }}"
                                                alt="{{ $product->name }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->name }}</h6>
                                            <span>BDT {{ $product->price }}</span> {{-- Assuming there's a 'price' attribute in your Product model --}}
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <p>No latest products available.</p>
                            @endif


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="latest-product__text">
                    <h4>TRENDING BEAUTY PRODUCTS</h4>

                    <div class="latest-product__slider owl-carousel">
                        <div class="latest">

                            @php
                                $trendingProduct = \App\Models\Product::where('status', 2)->latest()->limit(3)->get();

                            @endphp


                            @if ($trendingProduct->isNotEmpty())
                                @foreach ($trendingProduct as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset('/public/uploads/' . $product->image) }}"
                                                alt="{{ $product->name }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->name }}</h6>
                                            <span>BDT {{ $product->price }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <p>No latest products available.</p>
                            @endif


                        </div>
                        <div class="latest-prdouct__slider__item">


                            @php
                                $trendingProduct = \App\Models\Product::where('status', 2)->latest()->limit(3)->get();
                            @endphp


                            @if ($trendingProduct->isNotEmpty())
                                @foreach ($trendingProduct as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset('/public/uploads/' . $product->image) }}"
                                                alt="{{ $product->name }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->name }}</h6>
                                            <span>BDT {{ $product->price }}</span>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <p>No latest products available.</p>
                            @endif

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Latest Product Section End -->
