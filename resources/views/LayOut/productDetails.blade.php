<!-- Single Product Main Area Start -->
<div class="single-product-main-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                <div class="product-details-img">
                    <div class="single-product-img swiper-container gallery-top popup-gallery">
                        <div class="swiper-wrapper">
                            @foreach ($ProductIMGs as $IMG)
                            <div class="swiper-slide">
                                <a class="w-[100%] h-[75vh]" href="{{ asset($IMG) }}">
                                    <img class="w-[100%] h-[100%]" src="{{ asset($IMG) }}" alt="Product">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="single-product-thumb swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach ($ProductIMGs as $IMG)
                            <div class="swiper-slide h-28">
                                <img class="w-[100%] h-[100%]" src="{{ asset($IMG) }}" alt="Product">
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"><i class="lnr lnr-arrow-right"></i></div>
                        <div class="swiper-button-prev swiper-button-white"><i class="lnr lnr-arrow-left"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-custom">
                <div class="product-summery position-relative">
                    <div class="product-head mb-3">
                        <h2 class="product-title">{{ $Product->ProductName }}</h2>
                    </div>
                    <div class="price-box mb-2">
                        <span class="regular-price">${{ $Product->ProductDiscount }}.00</span>
                        <span class="old-price"><del>${{ $Product->ProductPrice }}.00</del></span>
                    </div>
                    <div class="product-rating mb-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="sku mb-3">
                        <span>SKU: {{ $Product->SKU }}</span>
                    </div>
                    <p class="desc-content mb-5">{{ $Product->FirstDesc }}</p>
                    <div class="flex flex-wrap mb-5 h-auto md:h-[48px] gap-3">
                        <div class="flex gap-5 w-[100%] md:w-[52%]">
                            <form
                                class="w-[38%] bg-black text-white rounded-md flex justify-center items-center text-base"
                                method="POST" action="/cart/{{ $Product->id }}">@csrf <button type="submit">Add to
                                    cart</button></form>

                            <div class="quantity w-[44%]">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="0" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                        </div>
                        <form
                            class="w-[41%] sm:w-[28%] md:w-[19%] h-[43px] md:h-[48px] bg-white text-black border-[1px] border-black rounded-md flex justify-center items-center text-base"
                            method="POST" action="/wishlist/{{ $Product->id }}">@csrf <button type="submit">Add to
                                WishList</button></form>
                    </div>
                    <div class="social-share mb-4">
                        <span>Share :</span>
                        <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                        <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                    </div>
                    <div class="payment">
                        <img class="border" src="/images/payment/payment-icon.png" alt="Payment">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-no-text">
            <div class="col-lg-12 col-custom">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1"
                            role="tab" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2"
                            role="tab" aria-selected="false">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3"
                            role="tab" aria-selected="false">Shipping Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4"
                            role="tab" aria-selected="false">Size Chart</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content">
                            <p class="mb-4">{{ substr($Product->ProductDesc, 0, 1540) }}.</p>
                            <p class="mb-4">{{ substr($Product->ProductDesc, 1541,3001) }}.</p>
                            <p class="mb-4">{{ substr($Product->ProductDesc, 3002, 4502) }}</p>
                            <p class="mb-4">{{ substr($Product->ProductDesc, 4502, 6000) }}</p>
                            <p>{{ substr($Product->ProductDesc, 6000) }}</ps=>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="product_tab_content  border p-3">
                            <div class="review_address_inner">
                                <!-- Start Single Review -->
                                @foreach ($Reviews as $Rev)
                                <div class="pro_review mb-5">
                                    <div class="review_thumb">
                                        <img alt="review images" src="/images/review/1.jpg">
                                    </div>
                                    <div class="review_details">
                                        <div class="review_info mb-2">
                                            <div class="product-rating mb-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <h5>{{ $Rev->userName }} - <span>
                                                    {{ $Rev->created_at->diffForHumans() }}</span></h5>
                                        </div>
                                        <div>
                                            <p class="mb-4">{{ substr($Rev->comment, 0, 1540) }}.</p>
                                            <p class="mb-4">{{ substr($Rev->comment, 1541,3001) }}.</p>
                                            <p class="mb-4">{{ substr($Rev->comment, 3002, 4502) }}</p>
                                            <p class="mb-4">{{ substr($Rev->comment, 4502, 6000) }}</p>
                                            <p>{{ substr($Rev->comment, 6000) }}</ps=>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating_wrap">
                                <h5 class="rating-title-1 font-weight-bold mb-2">Add a review </h5>
                                <p class="mb-2">Your email address will not be published. Required fields are marked *
                                </p>
                                <h6 class="rating-title-2 mb-2">Your Rating</h6>
                                <div class="rating_list mb-4">
                                    <div class="review_info">
                                        <div class="product-rating mb-3">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12 col-custom">
                                        <form action="/review/{{ $Product->id }}" method="POST"
                                            class="comment-form-area">
                                            @csrf
                                            <div class="row comment-input">
                                                <div class="col-md-6 col-custom comment-form-author mb-3">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" required="required" name="username">
                                                </div>
                                                <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="useremail">
                                                </div>
                                            </div>
                                            <div class="comment-form-comment mb-3">
                                                <label>Comment</label>
                                                <textarea class="comment-notes" name="comment"
                                                    required="required"></textarea>
                                            </div>
                                            <div class="comment-form-submit">
                                                <button
                                                    class="btn flosun-button secondary-btn rounded-0">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                    <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="shipping-policy">
                            <h4 class="title-3 mb-4">Shipping policy for our store</h4>
                            <p class="desc-content mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                vulputate</p>
                            <ul class="policy-list mb-2">
                                <li>1-2 business days (Typically by end of day)</li>
                                <li><a href="#">30 days money back guaranty</a></li>
                                <li>24/7 live support</li>
                                <li>odio dignissim qui blandit praesent</li>
                                <li>luptatum zzril delenit augue duis dolore</li>
                                <li>te feugait nulla facilisi.</li>
                            </ul>
                            <p class="desc-content mb-2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem
                                insitam; est usus legentis in iis qui facit eorum</p>
                            <p class="desc-content mb-2">claritatem. Investigationes demonstraverunt lectores legere me
                                lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur
                                mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc
                                putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                            <p class="desc-content mb-2">seacula quarta decima et quinta decima. Eodem modo typi, qui
                                nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                        <div class="size-tab table-responsive-lg">
                            <h4 class="title-3 mb-4">Size Chart</h4>
                            <table class="table border">
                                <tbody>
                                    <tr>
                                        <td class="cun-name"><span>UK</span></td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>European</span></td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                        <td>52</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>usa</span></td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Australia</span></td>
                                        <td>28</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Canada</span></td>
                                        <td>24</td>
                                        <td>18</td>
                                        <td>14</td>
                                        <td>42</td>
                                        <td>36</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product Main Area End -->
<!--Product Area Start-->
<div class="product-area mt-text-3">
    <div class="container custom-area-2 overflow-hidden">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">The Most Trendy</span>
                    <h3 class="section-title-3">Featured Products</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row product-row">
            <div class="col-12 col-custom">
                <div class="product-slider swiper-container anime-element-multi">
                    <div class="swiper-wrapper">
                        @foreach ($TrendingProduct as $TProduct)
                        <div class="single-item swiper-slide">
                            <!--Single Product Start-->
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="product-details.html">
                                        <img src="/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                        <img src="/images/product/2.jpg" alt=""
                                            class="product-image-2 position-absolute w-100">
                                    </a>
                                    <span class="onsale">Sale!</span>
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
                                                href="product-details.html">{{ $TProduct->ProductName }}</a>
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
                                        <span class="regular-price ">${{ $TProduct->ProductDiscount}}.00</span>
                                        <span class="old-price"><del>${{ $TProduct->ProductPrice }}.00</del></span>
                                    </div>
                                    <a href="cart/ {{ $TProduct->id }}" class="btn product-cart">Add to Cart</a>
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
<!--Product Area End-->