<!-- Product Countdown Area Start Here -->
<div class="product-countdown-area mt-text-3">
    <div class="container custom-area">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <h3 class="section-title-3">Deal of The Day</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row">
            <!--Countdown Start-->
            <div class="col-12 col-custom">
                <div class="countdown-area">
                    <div class="countdown-wrapper d-flex justify-content-center" data-countdown="2022/12/24"></div>
                </div>
            </div>
            <!--Countdown End-->
        </div>
        <div class="row product-row">
            <div class="col-12 col-custom">
                <div class="item-carousel-2 swiper-container anime-element-multi product-area">
                    <div class="swiper-wrapper">
                        @foreach ($DiscountedProducts as $Product)
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            @php
                            $ProductIMGs = explode('|', $Product->ProductPics);
                            @endphp
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="{{ URL('shop/' . $Product->id) }}">
                                        <img src="{{ $ProductIMGs[0] }}" alt=""
                                            class="product-image-1 w-[100%] h-[370px]">
                                        <img src="{{ $ProductIMGs[1] }}" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="add-action d-flex flex-column position-absolute">
                                        <a href="/wishlist" title="Add To Wishlist">
                                            <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist"></i>
                                        </a>
                                        <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left"
                                                title="Quick View"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a
                                                href="{{ URL('shop/' . $Product->id) }}">{{ $Product->ProductName }}</a>
                                        </h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">${{ $Product->ProductDiscount }}.00</span>
                                        <span class="old-price"><del>${{ $Product->ProductPrice }}.00</del></span>
                                    </div>
                                    <form class="btn product-cart" action="/cart/{{ $Product->id }}" method="POST">@csrf
                                        <button type="submit">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>
                        @endforeach
                    </div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Countdown Area End Here -->