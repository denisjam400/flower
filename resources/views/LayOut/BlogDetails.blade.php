<!-- Blog Main Area Start Here -->
<div class="blog-main-area mb-36">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-12 col-custom widget-mt">
                <!-- Blog Details wrapper Area Start -->
                <div class="blog-post-details">
                    <figure class="blog-post-thumb mb-5">
                        <img src="{{ asset($BlogDetail->post_pics) }}" alt="Blog Image" class="w-[100%] h-[489px]" />
                    </figure>
                    <section class="blog-post-wrapper product-summery">
                        <div class="section-content section-title">
                            <h2 class="section-title-2 mb-3">{{ $BlogDetail->post_name }}</h2>
                            <p class="mb-4">{{ substr($BlogDetail->post_content, 0, 1300) }}.</p>
                            <blockquote class="blockquote mb-4">
                                <p>{{substr($BlogDetail->keyNote, 0)}}</p>
                            </blockquote>
                            <p class="mb-5">{{ substr($BlogDetail->post_content, 1301,1700) }}.</p>
                            <p class="mb-5">{{ substr($BlogDetail->post_content, 1700, 2100) }}.</p>
                            <p class="mb-5">{{ substr($BlogDetail->post_content, 2100, 2500) }}.</p>
                            <p class="mb-5">{{ substr($BlogDetail->post_content, 2500, 2900) }}.</p>
                            <p class="mb-5">{{ substr($BlogDetail->post_content, 2900) }}.</p>
                        </div>
                        <div class="share-article">
                            <span class="left-side">
                                <a href="#"> <i class="fa fa-long-arrow-left"></i> Older Post</a>
                            </span>
                            <h6 class="text-uppercase">Share this article</h6>
                            <span class="right-side">
                                <a href="#">Newer Post <i class="fa fa-long-arrow-right"></i></a>
                            </span>
                        </div>
                        <div class="social-share">
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div>

                        <div class="comment-area-wrapper mt-5">
                            <div class="comments-view-area">
                                <h3 class="mb-5">{{ $BlogCommentCount }} Comments</h3>
                                @foreach ($BlogComment as $BlogComment)
                                <div class="single-comment-wrap mb-4 d-flex">
                                    <figure class="author-thumb">
                                        <a href="#">
                                            <img src="/images/review/1.jpg" alt="Author">
                                        </a>
                                    </figure>
                                    <div class="comments-info">
                                        <p class="mb-2">{{ $BlogComment->message }}</p>
                                        <div class="comment-footer d-flex justify-content-between">
                                            <a href="#" class="author"><strong>{{ $BlogComment->userName }}</strong> -
                                                {{ $BlogComment->created_at->diffForHumans() }}</a>
                                            <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Blog Details Wrapper Area End -->

                <!-- Blog Comments Area Start Here -->
                <form action="/comment/{{ $BlogDetail->id }}" method="POST"> @csrf
                    <div class="comment-box">
                        <h3>Leave A Comment</h3>
                        <div class="row">
                            <div class="col-12 col-custom">
                                <div class="input-item mt-4 mb-4">
                                    <textarea cols="30" rows="5"
                                        class="border rounded-0 w-100 custom-textarea input-area" placeholder="Message"
                                        name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area name" type="text" placeholder="Name"
                                        name="userName">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area email" type="text"
                                        placeholder="Email" name="userEmail">
                                </div>
                            </div>
                            <div class="col-12 col-custom mt-24">
                                <button type="submit" class="btn flosun-button primary-btn rounded-0 w-100">Post
                                    comment</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Blog Comments Area End Here -->
                <div class="flex gap-6 mt-7">
                    .
                    <div class="flex flex-col"><strong>NOTE:</strong>All comments will b reviewed</div>
                </div>

                <!--Product Area Start-->
                <div class="product-area mt-text-3">
                    <div class="container custom-area-2 overflow-hidden">
                        <div class="row">
                            <!--Section Title Start-->
                            <div class="col-12 col-custom">
                                <div class="section-title text-center mb-30">
                                    <span class="section-title-1">Related Blog</span>
                                    <h3 class="section-title-3">Featured Products</h3>
                                </div>
                            </div>
                            <!--Section Title End-->
                        </div>
                        <div class="row product-row">
                            <div class="col-12 col-custom">
                                <div class="product-slider swiper-container anime-element-multi">
                                    <div class="swiper-wrapper">
                                        @foreach ($Blogs as $TProduct)
                                        <div class="single-item swiper-slide">
                                            <!--Single Product Start-->
                                            <div class="single-product position-relative mb-30">
                                                <div class="product-image">
                                                    <a class="d-block" href="/blog/{{ $TProduct->id }}">
                                                        <img src="{{ asset($TProduct->post_pics) }}" alt=""
                                                            class="product-image-1 w-[100%] h-[195px]">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h4 class="title-2"> <a
                                                                href="/blog/{{ $TProduct->id }}">{{$TProduct->post_name}}</a>
                                                        </h4>
                                                    </div>
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
            </div>
        </div>
    </div>
</div>
<!-- Blog Main Area End Here -->