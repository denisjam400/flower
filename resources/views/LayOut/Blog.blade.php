<!-- Blog Area Start Here -->
<div class="blog-post-area mt-text-3">
    <div class="container custom-area">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">From The Blogs</span>
                    <h3 class="section-title-3">Our Latest Posts</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row">
            @foreach ($Blogs as $blog)
            <div class="col-12 col-md-4 col-lg-4 col-custom mb-30">
                <div class="blog-lst">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="d-block" href="/blog/{{ $blog->id }}">
                                <img src="{{ $blog->post_pics }}" alt="Blog Image"
                                    class="product-image-1 w-[100%] h-[270px]">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-text">
                                <h4><a href="/blog/{{ $blog->id }}">{{ $blog->post_name }}</a></h4>
                                <div class="blog-post-info">
                                    <span>
                                        <h6>By admin</h6>
                                    </span>
                                    <span>{{ $blog->created_at }}</span>
                                </div>
                                <p>{{ $textTrunc = substr($blog->post_content, 0, 30) }}.......</p>
                                <a href="/blog/{{ $blog->id }}" class="readmore">Read More <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>@endforeach
        </div>
    </div>
</div>
<!-- Blog Area End Here -->