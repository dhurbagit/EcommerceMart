@extends('frontend.layout.main')
@section('content')

    <main class="main">
        <div class="mb-lg-2"></div><!-- End .mb-lg-2 -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
                    <div class="intro-slider-container slider-container-ratio mb-2">
                        <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl"
                            data-owl-options='{
                            "nav": false, 
                            "dots": true
                        }'>
                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="assets/images/demos/demo-14/slider/slide-1-480w.jpg">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-14/slider/slide-1.jpg') }}"
                                            alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">New Arrivals</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title text-white">
                                        The New Way <br>To Buy Furniture
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-text text-white">
                                        Spring Collections 2019
                                    </div><!-- End .intro-text -->

                                    <a href="category.html" class="btn btn-primary">
                                        <span>Discover Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->

                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="assets/images/demos/demo-14/slider/slide-2-480w.jpg">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-14/slider/slide-2.jpg') }}"
                                            alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">Hottest Deals</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">
                                        <span>Wherever You Go</span> <br>DJI Mavic 2 Pro
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup>from</sup>
                                        <span>
                                            $1,948<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary">
                                        <span>Discover Here</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->

                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="assets/images/demos/demo-14/slider/slide-3-480w.jpg">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-14/slider/slide-3.jpg') }}"
                                            alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">Limited Quantities</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">
                                        Refresh Your <br>Wardrobe
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-text">
                                        Summer Collection 2019
                                    </div><!-- End .intro-text -->

                                    <a href="category.html" class="btn btn-primary">
                                        <span>Discover Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->
                        </div><!-- End .intro-slider owl-carousel owl-simple -->

                        <span class="slider-loader"></span><!-- End .slider-loader -->
                    </div><!-- End .intro-slider-container -->
                </div><!-- End .col-xl-9 col-xxl-10 -->

                <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
                    <div class="banner banner-overlay  banner-content-stretch ">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-1.png') }}"
                                alt="Banner img desc">
                        </a>
                        <div class="banner-content text-right">
                            <div class="price text-center">
                                <sup class="text-white">from</sup>
                                <span class="text-white">
                                    <strong>$199</strong><sup class="text-white">,99</sup>
                                </span>
                            </div>
                            <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .col-xl-3 col-xxl-2 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-10">
                    <div class="row">
                        <div class="col-lg-12 col-xxl-4-5col">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-2.jpg') }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white d-none d-sm-block"><a
                                                    href="#">Hottest Deals</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Detox And Beautify <br>For
                                                    Spring <br><span>Up To 20% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-3.png') }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Deal
                                                    of the Day</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Headphones <br><span>Up To
                                                        30% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-3 col-xxl-4-5col -->

                        <div class="col-12 col-xxl-5col d-none d-xxl-block">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-4.jpg') }}"
                                        alt="Banner img desc">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4>
                                    <!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Seating and Tables Clearance</a>
                                    </h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now <i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner banner-overlay -->
                        </div><!-- End .col-lg-3 col-xxl-2 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="owl-carousel owl-simple brands-carousel" data-toggle="owl"
                        data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1600": {
                                "items":6,
                                "nav": true
                            }
                        }
                    }'>
                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/1.png') }}" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/2.png') }}" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/3.png') }}" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/4.png') }}" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/5.png') }}" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/6.png') }}" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="{{ asset('frontend/assets/images/brands/7.png') }}" alt="Brand Name">
                        </a>
                    </div><!-- End .owl-carousel -->

                    <div class="mb-5"></div><!-- End .mb-5 -->

                    <div class="bg-lighter trending-products">
                        <div class="heading heading-flex mb-3">
                            <div class="heading-left">
                                <h2 class="title">Trending Today</h2><!-- End .title -->
                            </div><!-- End .heading-left -->

                            <div class="heading-right">
                                <ul class="nav nav-pills justify-content-center" role="tablist">


                                    @foreach ($categoryList as $data)
                                        <li class="nav-item">
                                            <a class="nav-link" id="{{ Str::slug($data->category_title) }}-link"
                                                data-toggle="tab" href="#{{ Str::slug($data->category_title) }}-tab"
                                                role="tab" aria-controls="{{ Str::slug($data->category_title) }}-tab"
                                                aria-selected="{{ $loop->index == 0 ? 'true' : 'false' }}">{{ $data->category_title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div><!-- End .heading-right -->
                        </div><!-- End .heading -->




                        <div class="tab-content tab-content-carousel">

                            @foreach ($categoryList as $data)
                                <div class="tab-pane p-0 fade {{ $loop->index == 0 ? 'show active' : '' }}"
                                    id="{{ Str::slug($data->category_title) }}-tab" role="tabpanel"
                                    aria-labelledby="{{ Str::slug($data->category_title) }}-link">
                                    @php
                                        $catIds = App\Models\Category::childrens($data->id) ?? [];
                                        $products = App\Models\Product::where(function ($query) use ($catIds) {
                                            for ($i = 0; $i < count($catIds); $i++) {
                                                $query->orWhereJsonContains('category_key', $catIds[$i]);
                                            }
                                        })
                                            ->where('status', 1)
                                            ->orderBy('id', 'DESC')
                                            ->get();

                                    @endphp

                                    {{-- @dd($products) --}}
                                    @if ($products->count() > 0)
                                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                                            data-toggle="owl"
                                            data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>


                                            @foreach ($products as $product)
                                                <div class="product text-center">
                                                    <figure class="product-media">
                                                        <a href="{{route('single.detail', $product->id)}}">
                                                            <img src="{{ asset('uploads/' . $product->thumbImage->t_image) }}"
                                                                alt="Product image" class="product-image">
                                                        </a>
                                                        <div class="product-action-vertical">
                                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                                title="Add to wishlist"><span>add to wishlist</span></a>
                                                            <a href="popup/quickView.html"
                                                                class="btn-product-icon btn-quickview"
                                                                title="Quick view"><span>Quick view</span></a>
                                                            <a href="#" class="btn-product-icon btn-compare"
                                                                title="Compare"><span>Compare</span></a>
                                                        </div><!-- End .product-action-vertical -->

                                                        <div class="product-action">
                                                            <a href="{{route('add-cart', $product->id)}}" class="btn-product btn-cart"
                                                                title="Add to cart"><span>add to cart</span></a>
                                                        </div><!-- End .product-action -->
                                                    </figure><!-- End .product-media -->

                                                    <div class="product-body">
                                                        <div class="product-cat">
                                                            <a href="#">{{ $product->product_name }}</a>
                                                        </div><!-- End .product-cat -->
                                                        <h3 class="product-title"><a href="product.html">
                                                                {{ $product->flash_title }}</a></h3>
                                                        <!-- End .product-title -->
                                                        <div class="product-price">
                                                            Rs:{{ $product->price }}
                                                        </div><!-- End .product-price -->
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-val" style="width: 60%;"></div>
                                                                <!-- End .ratings-val -->
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-text">( 8 Reviews )</span>
                                                        </div><!-- End .rating-container -->

                                                        <div class="product-nav product-nav-dots">
                                                            <a href="#" class="active"
                                                                style="background: #b58555;"><span class="sr-only">Color
                                                                    name</span></a>
                                                            <a href="#" style="background: #93a6b0;"><span
                                                                    class="sr-only">Color name</span></a>
                                                        </div><!-- End .product-nav -->
                                                    </div><!-- End .product-body -->
                                                </div><!-- End .product -->
                                            @endforeach

                                        </div><!-- End .owl-carousel -->
                                    @else
                                        <p class="not_found_product_p">No Product found</p>
                                    @endif
                                </div><!-- .End .tab-pane -->
                            @endforeach
                        </div><!-- End .tab-content -->
                    </div><!-- End .bg-lighter -->

                    <div class="mb-5"></div><!-- End .mb-5 -->

                    <div class="row cat-banner-row electronics">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex"
                                    style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Electronics</a></h2>

                                        <ul>
                                            <li><a href="#">Cell Phones</a></li>
                                            <li><a href="#">Computers</a></li>
                                            <li><a href="#">TV & Video</a></li>
                                            <li><a href="#">Smart Home</a></li>
                                            <li><a href="#">Audi</a></li>
                                            <li><a href="#">Home Audio & Theater</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                   
                                    
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="{{ asset('uploads/' . $randomCatgoryList->image) }}"
                                                    alt="Banner img desc">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a>
                                                </h4>
                                                <!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Canon EOS <br>Mega
                                                        Sale
                                                        <br><span>Up To 20% Off</span></a></h3><!-- End .banner-title -->
                                                <a href="#" class="banner-link">Shop Now <i
                                                        class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                  
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            @if ($featured_product->count() > 0)
                                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                    data-toggle="owl"
                                    data-owl-options='{
                                "nav": true, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":3
                                    },
                                    "1600": {
                                        "items":4
                                    }
                                }
                            }'>
                                    @foreach ($featured_product as $featureList)
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Featured</span>
                                                <a href="{{route('single.detail', $featureList->id)}}">
                                                    <img src="{{ asset('uploads/' . $featureList->thumbImage->t_image) }}"
                                                        alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                        title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare"
                                                        title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">{{$featureList->id}}
                                                    <a href="{{route('add-cart', $featureList->id)}}" class="btn-product btn-cart"
                                                        title="Add to cart"><span>add
                                                            to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">{{ $featureList->product_name }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a
                                                        href="product.html">{{ $featureList->flash_title }}</a>
                                                </h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    Rs: {{ $featureList->price }}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    @endforeach

                                </div><!-- End .owl-carousel -->
                            @else
                                <p class="not_found_product_p">No Product found</p>
                            @endif
                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row cat-banner-row furniture">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex"
                                    style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-2.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Furniture </a></h2>

                                        <ul>
                                            <li><a href="#">Bedroom </a></li>
                                            <li><a href="#">Office</a></li>
                                            <li><a href="#">Living Room</a></li>
                                            <li><a href="#">Kitchen & Dining</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Outdoor</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('uploads/'. $randomCatgoryList1->image) }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Furniture Sets
                                                    <br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                   
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            <div class="bg-lighter products-brands">
                                <div class="heading heading-flex mb-3">
                                    <div class="heading-left">
                                        <h2 class="title">Top Brands</h2><!-- End .title -->
                                    </div><!-- End .heading-left -->

                                    <div class="heading-right">
                                        <ul class="nav nav-pills justify-content-center" role="tablist">


                                            @foreach ($brandList as $data)
                                                <li class="nav-item">
                                                    <a class="nav-link" id="{{ Str::slug($data->b_title) }}-link"
                                                        data-toggle="tab" href="#{{ Str::slug($data->b_title) }}-tab"
                                                        role="tab"
                                                        aria-controls="{{ Str::slug($data->b_title) }}-tab"
                                                        aria-selected="{{ $loop->index == 0 ? 'true' : 'false' }}">{{ $data->b_title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div><!-- End .heading-right -->
                                </div><!-- End .heading -->

                                <div class="tab-content tab-content-carousel">

                                    @foreach ($brandList as $data)
                                        <div class="tab-pane p-0 fade {{ $loop->index == 0 ? 'show active' : '' }}"
                                            id="{{ Str::slug($data->b_title) }}-tab" role="tabpanel"
                                            aria-labelledby="{{ Str::slug($data->b_title) }}-link">
                                            @php

                                                $productsBrandList = App\Models\Product::where(['brand_id' => $data->id, 'status' => 1])->get();

                                            @endphp
                                            @if ($productsBrandList->count() > 0)
                                                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                                    data-toggle="owl"
                                                    data-owl-options='{
                                "nav": true, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":3
                                    },
                                    "1600": {
                                        "items":4
                                    }
                                }
                            }'>

                                                    @foreach ($productsBrandList as $product)
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="{{route('single.detail', $product->id)}}">
                                                                    <img src="{{ asset('uploads/' . $product->thumbImage->t_image) }}"
                                                                        alt="Product image" class="product-image">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#"
                                                                        class="btn-product-icon btn-wishlist"
                                                                        title="Add to wishlist"><span>add to
                                                                            wishlist</span></a>
                                                                    <a href="popup/quickView.html"
                                                                        class="btn-product-icon btn-quickview"
                                                                        title="Quick view"><span>Quick view</span></a>
                                                                    <a href="#" class="btn-product-icon btn-compare"
                                                                        title="Compare"><span>Compare</span></a>
                                                                </div><!-- End .product-action-vertical -->

                                                                <div class="product-action">
                                                                    <a href="{{route('add-cart', $product->id)}}" class="btn-product btn-cart"
                                                                        title="Add to cart"><span>add to cart</span></a>
                                                                </div><!-- End .product-action -->
                                                            </figure><!-- End .product-media -->

                                                            <div class="product-body">
                                                                <div class="product-cat">
                                                                    <a href="#">{{ $product->product_name }}</a>
                                                                </div><!-- End .product-cat -->
                                                                <h3 class="product-title"><a href="product.html">
                                                                        {{ $product->flash_title }}</a></h3>
                                                                <!-- End .product-title -->
                                                                <div class="product-price">
                                                                    Rs:{{ $product->price }}
                                                                </div><!-- End .product-price -->
                                                                <div class="ratings-container">
                                                                    <div class="ratings">
                                                                        <div class="ratings-val" style="width: 60%;">
                                                                        </div>
                                                                        <!-- End .ratings-val -->
                                                                    </div><!-- End .ratings -->
                                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                                </div><!-- End .rating-container -->

                                                                <div class="product-nav product-nav-dots">
                                                                    <a href="#" class="active"
                                                                        style="background: #b58555;"><span
                                                                            class="sr-only">Color
                                                                            name</span></a>
                                                                    <a href="#" style="background: #93a6b0;"><span
                                                                            class="sr-only">Color name</span></a>
                                                                </div><!-- End .product-nav -->
                                                            </div><!-- End .product-body -->
                                                        </div><!-- End .product -->
                                                    @endforeach

                                                </div><!-- End .owl-carousel -->
                                            @else
                                                <p class="not_found_product_p">No Product found</p>
                                            @endif
                                        </div><!-- .End .tab-pane -->
                                    @endforeach
                                </div><!-- End .tab-content -->
                            </div><!-- End .bg-lighter -->

                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-7.jpg') }}"
                                        alt="Banner img desc">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Spring Sale
                                            is Coming</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Floral T-shirts and Vests
                                            <br><span>Spring Sale</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now <i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-8.jpg') }}"
                                        alt="Banner img desc">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing
                                            Value</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Upgrade and Save <br><span>On
                                                The Latest Apple Devices</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now <i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner banner-overlay -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row cat-banner-row clothing">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex"
                                    style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-3.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Clothing </a></h2>

                                        <ul>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('uploads/'. $randomCatgoryList2->image) }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Clearance
                                                    <br>Outerwear<br><span>Up To 70% Off</span></a></h3>
                                            <!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            <div class="bg-lighter tags-products">
                                <div class="heading heading-flex mb-3">
                                    <div class="heading-left">
                                        <h2 class="title">Tags</h2><!-- End .title -->
                                    </div><!-- End .heading-left -->

                                    <div class="heading-right">
                                        <ul class="nav nav-pills justify-content-center" role="tablist">


                                            @foreach ($tagsList as $data)
                                                <li class="nav-item">
                                                    <a class="nav-link" id="{{ Str::slug($data->t_title) }}-link"
                                                        data-toggle="tab" href="#{{ Str::slug($data->t_title) }}-tab"
                                                        role="tab"
                                                        aria-controls="{{ Str::slug($data->t_title) }}-tab"
                                                        aria-selected="{{ $loop->index == 0 ? 'true' : 'false' }}">{{ $data->t_title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div><!-- End .heading-right -->
                                </div><!-- End .heading -->

                                <div class="tab-content tab-content-carousel">

                                    @foreach ($tagsList as $data)
                                        <div class="tab-pane p-0 fade {{ $loop->index == 0 ? 'show active' : '' }}"
                                            id="{{ Str::slug($data->t_title) }}-tab" role="tabpanel"
                                            aria-labelledby="{{ Str::slug($data->t_title) }}-link">
                                            @php

                                                $products = App\Models\Product::whereJsonContains('tag_key', (string) $data->id)->orderBy('id', 'DESC')->where('status', 1)->get();

                                            @endphp
                                            @if ($products->count() > 0)
                                                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                                    data-toggle="owl"
                                                    data-owl-options='{
                                                "nav": true, 
                                                "dots": false,
                                                "margin": 20,
                                                "loop": false,
                                                "responsive": {
                                                    "0": {
                                                        "items":2
                                                    },
                                                    "480": {
                                                        "items":2
                                                    },
                                                    "768": {
                                                        "items":3
                                                    },
                                                    "992": {
                                                        "items":4
                                                    },
                                                    "1200": {
                                                        "items":3
                                                    },
                                                    "1600": {
                                                        "items":4
                                                    }
                                                }
                                            }'>


                                                    @foreach ($products as $product)
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="{{route('single.detail', $product->id)}}">
                                                                    <img src="{{ asset('uploads/' . $product->thumbImage->t_image) }}"
                                                                        alt="Product image" class="product-image">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#"
                                                                        class="btn-product-icon btn-wishlist"
                                                                        title="Add to wishlist"><span>add to
                                                                            wishlist</span></a>
                                                                    <a href="popup/quickView.html"
                                                                        class="btn-product-icon btn-quickview"
                                                                        title="Quick view"><span>Quick view</span></a>
                                                                    <a href="#" class="btn-product-icon btn-compare"
                                                                        title="Compare"><span>Compare</span></a>
                                                                </div><!-- End .product-action-vertical -->

                                                                <div class="product-action">
                                                                    <a href="{{route('add-cart', $product->id)}}" class="btn-product btn-cart"
                                                                        title="Add to cart"><span>add to cart</span></a>
                                                                </div><!-- End .product-action -->
                                                            </figure><!-- End .product-media -->

                                                            <div class="product-body">
                                                                <div class="product-cat">
                                                                    <a href="#">{{ $product->product_name }}</a>
                                                                </div><!-- End .product-cat -->
                                                                <h3 class="product-title"><a href="product.html">
                                                                        {{ $product->flash_title }}</a></h3>
                                                                <!-- End .product-title -->
                                                                <div class="product-price">
                                                                    Rs:{{ $product->price }}
                                                                </div><!-- End .product-price -->
                                                                <div class="ratings-container">
                                                                    <div class="ratings">
                                                                        <div class="ratings-val" style="width: 60%;">
                                                                        </div>
                                                                        <!-- End .ratings-val -->
                                                                    </div><!-- End .ratings -->
                                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                                </div><!-- End .rating-container -->

                                                                <div class="product-nav product-nav-dots">
                                                                    <a href="#" class="active"
                                                                        style="background: #b58555;"><span
                                                                            class="sr-only">Color
                                                                            name</span></a>
                                                                    <a href="#" style="background: #93a6b0;"><span
                                                                            class="sr-only">Color name</span></a>
                                                                </div><!-- End .product-nav -->
                                                            </div><!-- End .product-body -->
                                                        </div><!-- End .product -->
                                                    @endforeach

                                                </div><!-- End .owl-carousel -->
                                            @else
                                                <p class="not_found_product_p">No Product found</p>
                                            @endif
                                        </div><!-- .End .tab-pane -->
                                    @endforeach
                                </div><!-- End .tab-content -->
                            </div><!-- End .bg-lighter -->

                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row cat-banner-row cooking">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex"
                                    style="background-image: url({{ asset('frontend/assets/images/demos/demo-14/banners/banner-bg-4.jpg') }});">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Cooking </a></h2>

                                        <ul>
                                            <li><a href="#">Cookware</a></li>
                                            <li><a href="#">Dinnerware</a></li>
                                            <li><a href="#">Cups</a></li>
                                            <li><a href="#">Microwaves</a></li>
                                            <li><a href="#">Toasters</a></li>
                                            <li><a href="#">Coffee Makers</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('uploads/'. $randomCatgoryList3->image) }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                            <!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Cooking <br>Appliances
                                                    <br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            @if ($salesList->count() > 0)
                                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                    data-toggle="owl"
                                    data-owl-options='{
                                "nav": true, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":3
                                    },
                                    "1600": {
                                        "items":4
                                    }
                                }
                            }'>
                                    @foreach ($salesList as $list)
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="{{route('single.detail', $list->id)}}">
                                                    <img src="{{ asset('uploads/' . $list->thumbImage->t_image) }}"
                                                        alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                                        title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare"
                                                        title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="{{route('add-cart', $list->id)}}" class="btn-product btn-cart"
                                                        title="Add to cart"><span>add
                                                            to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">{{ $list->product_name }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">
                                                        {{ $list->flash_title }}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">Rs:
                                                        {{ $list->price - $list->discount }}</span>
                                                    <span class="old-price">was Rs:{{ $list->price }}</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 7 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    @endforeach
                                </div><!-- End .owl-carousel -->
                            @else
                                <p class="not_found_product_p">No Product found</p>
                            @endif
                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="icon-boxes-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-rocket"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                            <p>Orders $50 or more</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-rotate-left"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                            <p>Within 30 days</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-info-circle"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                            <p>When you sign up</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-life-ring"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                            <p>24/7 amazing services</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container-fluid -->
                    </div><!-- End .icon-boxes-container -->

                    <div class="mb-5"></div><!-- End .mb-5 -->
                </div><!-- End .col-lg-9 col-xxl-10 -->

                <aside class="col-xl-3 col-xxl-2 order-xl-first">
                    <div class="sidebar sidebar-home">
                        <div class="row">
                            <div class="col-sm-6 col-xl-12">
                                <div class="widget widget-banner">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-11.jpg') }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content banner-content-top banner-content-right text-right">
                                            <h3 class="banner-title text-white"><a href="#">Maximum Comfort
                                                    <span>Sofas -20% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .widget widget-banner -->
                            </div><!-- End .col-sm-6 col-xl-12 -->

                            <div class="col-sm-6 col-xl-12 mb-2">
                                <div class="widget widget-products">
                                    <h4 class="widget-title"><span>Bestsellers</span></h4><!-- End .widget-title -->

                                    <div class="products">
                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/products/small/product-1.jpg') }}"
                                                        alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Sceptre 50" Class FHD
                                                        (1080P) LED TV</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $199.99
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/products/small/product-2.jpg') }}"
                                                        alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Red Cookware Set, 9
                                                        Piece</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $24.95
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/products/small/product-3.jpg') }}"
                                                        alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Epson WorkForce WF-2750
                                                        All-in-One Wireless</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $49.99
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/products/small/product-4.jpg') }}"
                                                        alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Stainless Steel
                                                        Microwave Oven</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $64.84
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/products/small/product-5.jpg') }}"
                                                        alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Fatboy Original
                                                        Beanbag</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $49.99
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->
                                    </div><!-- End .products -->
                                </div><!-- End .widget widget-products -->
                            </div><!-- End .col-sm-6 col-xl-12 -->

                            <div class="col-12">
                                <div class="widget widget-deals">
                                    <h4 class="widget-title"><span>Special Offer</span></h4><!-- End .widget-title -->

                                    <div class="row">
                                        <div class="col-sm-6 col-xl-12">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Deal of the week</span>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-14/products/deals/product-1.jpg') }}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                                        <a href="popup/quickView.html"
                                                            class="btn-product-icon btn-quickview"
                                                            title="Quick view"><span>Quick view</span></a>
                                                        <a href="#" class="btn-product-icon btn-compare"
                                                            title="Compare"><span>Compare</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"
                                                            title="Add to cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Audio</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Bose SoundLink
                                                            Micro speaker</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$99.99</span>
                                                        <span class="old-price">Was $110.99</span>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 100%;"></div>
                                                            <!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" class="active"
                                                            style="background: #f3815f;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #333333;"><span
                                                                class="sr-only">Color name</span></a>
                                                    </div><!-- End .product-nav -->
                                                </div><!-- End .product-body -->

                                                <div class="product-countdown" data-until="+44h" data-relative="true"
                                                    data-labels-short="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-xl-12 -->

                                        <div class="col-sm-6 col-xl-12">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Deal of the week</span>
                                                    <a href="product.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo-14/products/deals/product-2.jpg') }}"
                                                            alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist"
                                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                                        <a href="popup/quickView.html"
                                                            class="btn-product-icon btn-quickview"
                                                            title="Quick view"><span>Quick view</span></a>
                                                        <a href="#" class="btn-product-icon btn-compare"
                                                            title="Compare"><span>Compare</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"
                                                            title="Add to cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Cameras</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">GoPro HERO Session
                                                            Waterproof HD Action Camera</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$196.99</span>
                                                        <span class="old-price">Was $210.99</span>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 100%;"></div>
                                                            <!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 19 Reviews )</span>
                                                    </div><!-- End .rating-container -->
                                                </div><!-- End .product-body -->

                                                <div class="product-countdown" data-until="+52h" data-relative="true"
                                                    data-labels-short="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-xl-12 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget widget-deals -->
                            </div><!-- End .col-sm-6 col-lg-xl -->

                            <div class="col-sm-6 col-xl-12">
                                <div class="widget widget-banner">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-14/banners/banner-12.jpg') }}"
                                                alt="Banner img desc">
                                        </a>

                                        <div class="banner-content banner-content-top">
                                            <h3 class="banner-title text-white"><a href="#">Take Better Photos
                                                    <br><span>With</span> Canon EOS <br><span>Up To 20% Off</span></a></h3>
                                            <!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .widget widget-banner -->
                            </div><!-- End .col-sm-6 col-lg-12 -->

                            <div class="col-sm-6 col-xl-12">
                                <div class="widget widget-posts">
                                    <h4 class="widget-title"><span>Latest Blog Posts</span></h4><!-- End .widget-title -->

                                    <div class="owl-carousel owl-simple" data-toggle="owl"
                                        data-owl-options='{
                                        "nav":false, 
                                        "dots": true, 
                                        "loop": false,
                                        "autoHeight": true
                                    }'>
                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/blog/post-1.jpg') }}"
                                                        alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Sed adipiscing ornare.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Lorem ipsum dolor consectetuer adipiscing elit. Phasellus hendrerit.
                                                        Pelletesque aliquet nibh ...</p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->

                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/blog/post-2.jpg') }}"
                                                        alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Vivamus vestibulum ntulla.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Phasellus hendrerit. Pelletesque aliquet nibh necurna In nisi neque,
                                                        aliquet vel, dapibus id ... </p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->

                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo-14/blog/post-3.jpg') }}"
                                                        alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Praesent placerat risus.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero
                                                        sodales leo, eget blandit nunc ...</p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- End .widget widget-posts -->
                            </div><!-- End .col-sm-6 col-xl-12 -->
                        </div><!-- End .row -->
                    </div><!-- End .sidebar sidebar-home -->
                </aside><!-- End .col-lg-3 col-xxl-2 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </main><!-- End .main -->

@stop
