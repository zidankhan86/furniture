<!DOCTYPE html>
<html lang="en">
    <head>
		@notifyCss
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
		@php
        $title = App\Models\Title::latest()->first();
        @endphp
    	<title>{{optional($title)->title}}</title>
        <link rel="icon" type="image/png" href="frontend/src/images/favicon/favicon-16x16.png" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/bvselect.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/venobox.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/css/style.css')}}" />
    </head>

    <body>
        

        @include('frontend.components.navLayer')

       

		@yield('content')
		@include('notify::components.notify')

        <!-- popular categories Section Start  -->
        {{-- <section class="popular-categories section section--md">
            <div class="container">
                <div class="section__head">
                    <h2 class="section--title-one font-title--sm">Popular Categories</h2>
                    <a href="shop-01.html">
                        View All
                        <span>
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- Desktop Versions -->
                <div class="popular-categories__wrapper">
                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="frontend/src/images/categories/image-fruits.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Fresh Fruit</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="src/images/categories/image-icon-vegitables.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Fresh Vegetables</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="src/images/categories/image-meat.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Meat & Fish</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="src/images/categories/image-icon-snaks.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Snacks</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="src/images/categories/img-12.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Beverages</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="frontend/src/images/categories/image-icon-beauty.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Beauty & Health</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="frontend/src/images/categories/image-icon-snaks2.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Bread & Bakery</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="frontend/src/images/categories/img-06.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Baking Needs</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="frontend/src/images/categories/img-07.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Cooking</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="frontend/src/images/categories/img-08.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Diabetic Food</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="src/images/categories/image-soda.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Dish Detergents</h5>
                    </a>

                    <a href="# " class="cards-sm popular-categories__wrapper-item">
                        <div class="cards-sm__img-wrapper">
                            <img src="src/images/categories/image-oil.png" alt="img-01" />
                        </div>
                        <h5 class="font-body--xl-500">Oil</h5>
                    </a>
                </div>

                <!-- Mobile  Versions -->
                <div class="swiper-container popular-categories--slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-fruits.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Fresh Fruit</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-icon-vegitables.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Fresh Vegetables</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-meat.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Meat & Fish</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-icon-snaks.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Snacks</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/img-12.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Beverages</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-icon-beauty.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Beauty & Health</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-icon-snaks2.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Bread & Bakery</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/img-06.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Baking Needs</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/img-07.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Cooking</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/img-08.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Diabetic Food</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-soda.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Dish Detergents</h5>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="# " class="cards-sm popular-categories__wrapper-item">
                                <div class="cards-sm__img-wrapper">
                                    <img src="src/images/categories/image-oil.png" alt="img-01" />
                                </div>
                                <h5 class="font-body--xl-500">Oil</h5>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
        <!-- popular categories Section end  -->

 

        <!--  Testimonial start  -->
        {{-- <section class="testimonial section section--gray-0 section--lg">
            <div class="container">
                <div class="section__head">
                    <h2 class="section--title-one font-title--sm">Client Testimonials</h2>
                    <div class="arrows">
                        <button class="arrows__btn swiper-button--prev">
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 7.22607H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.30005 1.20117L1.25005 7.22517L7.30005 13.2502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="arrows__btn swiper-button--next">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper-container testimonial-slider--one">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cards-tm">
                                <p class="cards-tm__text font-body--md-400">
                                    Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget
                                </p>
                                <div class="cards-tm__info d-flex align-items-center justify-content-between">
                                    <div class="cards-tm__info-left d-flex align-items-center">
                                        <div class="cards-tm__info--user-img">
                                            <img src="src/images/user/img-01.png" alt="user" />
                                        </div>
                                        <div class="cards-tm__info-left--designation">
                                            <h2 class="font-body--lg-500">Robert Fox</h2>
                                            <span class="font-body--md-400"> Customer </span>
                                        </div>
                                    </div>
                                    <div class="cards-tm__info-right">
                                        <ul class="d-flex align-items-center">
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="quotes">
                                    <svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            opacity="0.3"
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cards-tm">
                                <p class="cards-tm__text font-body--md-400">
                                    Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget
                                </p>
                                <div class="cards-tm__info d-flex align-items-center justify-content-between">
                                    <div class="cards-tm__info-left d-flex align-items-center">
                                        <div class="cards-tm__info--user-img">
                                            <img src="src/images/user/img-02.png" alt="user" />
                                        </div>
                                        <div class="cards-tm__info-left--designation">
                                            <h2 class="font-body--lg-500">Dianne Russell</h2>
                                            <span class="font-body--md-400"> Customer </span>
                                        </div>
                                    </div>
                                    <div class="cards-tm__info-right">
                                        <ul class="d-flex align-items-center">
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="quotes">
                                    <svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            opacity="0.3"
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cards-tm">
                                <p class="cards-tm__text font-body--md-400">
                                    Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget
                                </p>
                                <div class="cards-tm__info d-flex align-items-center justify-content-between">
                                    <div class="cards-tm__info-left d-flex align-items-center">
                                        <div class="cards-tm__info--user-img">
                                            <img src="src/images/user/img-01.png" alt="user" />
                                        </div>
                                        <div class="cards-tm__info-left--designation">
                                            <h2 class="font-body--lg-500">Robert Fox</h2>
                                            <span class="font-body--md-400"> Customer </span>
                                        </div>
                                    </div>
                                    <div class="cards-tm__info-right">
                                        <ul class="d-flex align-items-center">
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="quotes">
                                    <svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            opacity="0.3"
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section> --}}
        <!--  Testimonial end  -->

 

        <!-- Instagram follow Section Start  -->
        <section class="section--lg instagram">
            <div class="container">
                <div class="section__head justify-content-center">
                    <h2 class="section--title-one font-title--sm text-center">
                        Follow us on Instagram
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-sm-3 col-4">
                        <a href="#" class="cards-ig w-100">
                            <div class="cards-ig__img">
                                <img src="{{url ('frontend/src/images/instagram/img-01.jpg') }}" alt="ig" />
                                <div class="cards-ig__overlay">
                                    <span>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-sm-3 col-4">
                        <a href="#" class="cards-ig w-100">
                            <div class="cards-ig__img">
                                <img src="{{url ('frontend/src/images/instagram/img-02.png') }}" alt="ig" />
                                <div class="cards-ig__overlay">
                                    <span>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-sm-3 col-4">
                        <a href="#" class="cards-ig w-100">
                            <div class="cards-ig__img">
                                <img src="{{url ('frontend/src/images/instagram/img-03.png') }}" alt="ig" />
                                <div class="cards-ig__overlay">
                                    <span>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-sm-3 col-4">
                        <a href="#" class="cards-ig w-100">
                            <div class="cards-ig__img">
                                <img src="{{url ('frontend/src/images/instagram/img-04.png') }}" alt="ig" />
                                <div class="cards-ig__overlay">
                                    <span>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-sm-3 col-4">
                        <a href="#" class="cards-ig w-100">
                            <div class="cards-ig__img">
                                <img src="{{url ('frontend/src/images/instagram/img-05.png') }}" alt="ig" />
                                <div class="cards-ig__overlay">
                                    <span>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-sm-3 col-4">
                        <a href="#" class="cards-ig w-100">
                            <div class="cards-ig__img">
                                <img src="{{url ('frontend/src/images/instagram/img-06.png') }}" alt="ig" />
                                <div class="cards-ig__overlay">
                                    <span>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instagram follow Section end  -->

       

		@include('frontend.components.footer')

        

        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <!-- Purchase Button -->
        @notifyJs
    </body>
</html>
