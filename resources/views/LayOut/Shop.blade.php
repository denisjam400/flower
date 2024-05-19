<!-- Shop Main Area Start Here -->
<div class="shop-main-area mb-6">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-12 col-custom widget-mt">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper mb-30">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i
                                class="fa fa-th"></i></button>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_3">
                    @foreach ($Products as $Product)
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        @php
                        $ProductIMGs = explode('|', $Product->ProductPics);
                        @endphp
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href='/shop/{{ $Product->id }}'>
                                        <img src="{{ asset($ProductIMGs[0]) }}" alt=""
                                            class="product-image-1 w-100 h-[217px]">
                                        <img src="{{ asset($ProductIMGs[1]) }}" alt=""
                                            class="product-image-2 position-absolute w-100 h-[217px]">
                                    </a>
                                    @if ($Product->ProductDiscount <= '50' ) <span class="onsale">Sale!</span> @endif
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.html" title="Compare">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"></i>
                                            </a>
                                            <a href="wishlist.html" title="Add To Wishlist">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left"
                                                    title="Wishlist"></i>
                                            </a>
                                        </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a
                                                href='/shop/{{ $Product->id }}'>{{ $Product->ProductName }}</a></h4>
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
                                    <form action="/cart/{{ $Product->id }}" method="POST" class="btn product-cart">@csrf
                                        <button type="submit" class="btn">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- Shop Wrapper End -->
                <!-- Bottom Toolbar Start -->
                <div class="row pb-5">
                    <div class="col-sm-12 col-custom">
                        <div class="toolbar-bottom">
                            <div class="pagination">
                                <ul>
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">next</a></li>
                                    <li><a href="#">&gt;&gt;</a></li>
                                </ul>
                            </div>
                            <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Bottom Toolbar End -->
            </div>
            <div class="col-lg-3 col-12 col-custom">
                <!-- Sidebar Widget Start -->
                <aside class="sidebar_widget widget-mt">
                    <div class="widget_inner">
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Search</h3>
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Our Store"
                                        aria-label="Search Our Store">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Menu Categories</h3>
                            <!-- Widget Menu Start -->
                            <nav>
                                <ul class="mobile-menu p-0 m-0">
                                    <li class="menu-item-has-children"><a href="#">Birthday Boqutets</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Aster</a></li>
                                            <li><a href="#">Aubrieta</a></li>
                                            <li><a href="#">Basket of Gold</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Funeral Flowers</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Cleome</a></li>
                                            <li><a href="#">Columbine</a></li>
                                            <li><a href="#">Coneflower</a></li>
                                            <li><a href="#">Corepsis</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Interior Decor</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Calendula</a></li>
                                            <li><a href="#">Castor Bean</a></li>
                                            <li><a href="#">Catmint</a></li>
                                            <li><a href="#">Chives</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Custom Orders</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Lily</a></li>
                                            <li><a href="#">Rose</a></li>
                                            <li><a href="#">Sunflower</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Widget Menu End -->
                        </div>
                        <div class="widget-list widget-mb-3">
                            <h3 class="widget-title">Tags</h3>
                            <div class="sidebar-body">
                                <ul class="tags">
                                    <li><a href="#">Rose</a></li>
                                    <li><a href="#">Sunflower</a></li>
                                    <li><a href="#">Tulip</a></li>
                                    <li><a href="#">Lily</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Gift</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-list mb-0">
                            <h3 class="widget-title">Recent Products</h3>
                            @foreach ($PaginatedProduct as $ProductP)
                            <div class="sidebar-body py-2">
                                <div class="sidebar-product align-items-center">
                                    @php
                                    $ProductIMG = explode("|", $ProductP->ProductPics)
                                    @endphp
                                    <a href="/shop/{{ $ProductP->id }}">
                                        <a href="/shop/{{ $ProductP->id }}" class="image">
                                            <img src="{{ $ProductIMG[0] }}" alt="{{ $ProductP->ProductName }}"
                                                class="h-16">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a
                                                        href="/shop/{{ $ProductP->id }}">{{$ProductP->ProductName}}</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">${{ $ProductP->ProductDiscount }}.00</span>
                                                <span class="old-price"><del>${{ $ProductP->ProductPrice
                                                        }}.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>@endforeach
                        </div>
                    </div>
                </aside>
                <!-- Sidebar Widget End -->
            </div>
        </div>
    </div>
</div>
<!-- Shop Main Area End Here -->