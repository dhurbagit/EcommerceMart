{{-- <div class="tab-pane p-0 fade {{ $loop->index == 0 ? 'show active' : '' }}"
    id="{{ Str::slug($data->category_title) }}-tab" role="tabpanel"
    aria-labelledby="{{ Str::slug($data->category_title) }}-link">
    @php
        $products = App\Models\Product::whereJsonContains('category_key', (string) $data->id)->where('status', 1)->orderBy('id', 'DESC')->get();
    @endphp
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
                        <a href="product.html">
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
                            <a href="#" class="btn-product btn-cart"
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
</div><!-- .End .tab-pane --> --}}