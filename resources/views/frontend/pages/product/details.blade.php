@extends('frontend.master')

  @section('content')

  <!DOCTYPE html>
  <html lang="zxx">



  <body>




      <!-- Breadcrumb Section Begin -->
      <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <div class="breadcrumb__text">
                          <h2>Vegetable’s Package</h2>
                          <div class="breadcrumb__option">
                              <a href="./index.html">Home</a>
                              <a href="./index.html">Vegetables</a>
                              <span>Vegetable’s Package</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Breadcrumb Section End -->

      <!-- Product Details Section Begin -->
      <section class="product-details spad">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6">
                      <div class="product__details__pic">
                          <div class="product__details__pic__item">
                              <img class="product__details__pic__item--large"


                                  src="{{ asset('/public/uploads/' . $details->image) }}" alt="">


                          </div>
                          <div class="product__details__pic__slider owl-carousel">
                              <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                  src="img/product/details/thumb-1.jpg" alt="">
                              <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                  src="img/product/details/thumb-2.jpg" alt="">
                              <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                  src="img/product/details/thumb-3.jpg" alt="">
                              <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                  src="img/product/details/thumb-4.jpg" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="product__details__text">
                          <h3>{{$details->name}}</h3>
                          <div class="product__details__rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                              <span>(18 reviews)</span>
                          </div>
                          <div class="product__details__price">{{$details->price}}.00 Tk</div>
                          <p>{{$details->description}}</p>
                          <div class="product__details__quantity">
                              <div class="">
                                  <div class="pro-qty">
                                      <a href="{{route('product.checkout',$details->id)}}" class="primary-btn">ORDER</a>
                                  </div>
                              </div>
                          </div>
                          <a href="#" class="primary-btn">ADD TO CARD</a>
                          {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                          <ul>
                              <li><b>Availability</b> <span>In Stock</span></li>
                              <li><b>Shipping</b> <span>{{$details->time}} Days inside Dhaka <samp>5 Days Outside</samp></span></li>
                              <li><b>Weight</b> <span>{{$details->weight}} Kg</span></li>
                              <li><b>Share on</b>
                                  <div class="share">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-pinterest"></i></a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="product__details__tab">
                          <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                      aria-selected="true">Description</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                      aria-selected="false">Information</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                      aria-selected="false">Reviews <span>(1)</span></a>
                              </li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                  <div class="product__details__tab__desc">
                                      <h6>Products Infomation</h6>



                                      <p> <p>{{$details->product_information}}</p></p>




                                  </div>
                              </div>
                              <div class="tab-pane" id="tabs-2" role="tabpanel">
                                  <div class="product__details__tab__desc">
                                      <h6>Products Infomation</h6>
                                      <p>{{$details->product_information}}</p>

                                  </div>
                              </div>
                              <div class="tab-pane" id="tabs-3" role="tabpanel">
                                  <div class="product__details__tab__desc">
                                      <h6>Products Infomation</h6>
                                      <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                          Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                          Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                          sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                          eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                          Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                          sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                          diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                          ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                          Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                          Proin eget tortor risus.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">

                </div>
            </div>
        </div>
        <div class="row featured__filter">

            @foreach ($products as $item)

            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <a href="{{route('product.details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                        <ul class="featured__item__pic__hover">
                            {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li> --}}
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <h5>{{$item->price}} Tk.</h5>
                    </div><br>


                    {{-- <a href="{{route('product.details',$item->id)}}" class="btn btn-info btn-lg" style="width: 150px;">Details</a>
                    <a href="" class="btn btn-success btn-lg" style="width: 100px;">Order</a> --}}



                </div>


            </div>


            @endforeach






        </div >

        <div class="pagination justify-content-end">
           
        </div>

    </div>
</section>
<!-- Related Product Section End -->

  </body>

  </html>



  @endsection
