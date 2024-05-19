<!--Product Area Start-->
<div class="product-area mt-text-2">
    <div class="container custom-area-2 overflow-hidden">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">Wonderful gift</span>
                    <h3 class="section-title-3">Featured Products</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row product-row">
            <div class="col-12 col-custom">
                <div class="product-slider swiper-container anime-element-multi">
                    <div class="swiper-wrapper">
                        @foreach ($Products as $Product)
                        <div class="single-item swiper-slide">

                            <div class="single-product position-relative mb-30">
                                @php
                                $ProductIMGs = explode('|', $Product->ProductPics);
                                @endphp
                                <div class="product-image">
                                    <a class="d-block" href="{{ URL('shop/' . $Product->id) }}">
                                        <img src="{{ $ProductIMGs[0] }}" alt="{{ $Product->ProductName }}"
                                            class="product-image-1 w-[100%] h-[250px]">
                                        <img src="{{ $ProductIMGs[1] }}" alt="{{ $Product->ProductName }}"
                                            class="product-image-2 absolute w-[100%] h-[250px]">
                                    </a>
                                    @if ($Product->ProductDiscount <= '50' ) <span class="onsale">Sale!</span>
                                        @endif

                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="wishlist.html" title="Add To Wishlist">
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
                                        <span class="regular-price ">${{ $Product->ProductPrice }}.00</span>
                                        <span class="old-price"><del>${{ $Product->ProductDiscount }}.00</del></span>
                                    </div>
                                    <form action="/cart/{{ $Product->id }}" method="POST" class="btn product-cart">
                                        @csrf
                                        <button type="submit" class="btn">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                            <!--Single Product End-->
                        </div>\
                        @endforeach
                    </div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Product Area End-->