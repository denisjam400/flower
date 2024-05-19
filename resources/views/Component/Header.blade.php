<header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-transparent header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                    <div class="header-logo d-flex align-items-center">
                        <a href="/">
                            <img class="img-full" src="/images/logo/logo.png" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                    <nav class="main-nav d-none d-lg-flex">
                        <ul class="nav">
                            <li>
                                <a class="active" href="/">
                                    <span class="menu-text"> Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="/shop">
                                    <span class="menu-text">Shop</span>
                                </a>
                            </li>
                            <li>
                                <a href="/blog">
                                    <span class="menu-text"> Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="/setting">
                                    <span class="menu-text">Pages</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-submenu dropdown-hover">
                                    <li><a href="/account">My Account</a></li>
                                    <li><a href="/wishlist">My WishList</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/about-us">
                                    <span class="menu-text"> About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="/contact-us">
                                    <span class="menu-text">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-6 col-6 col-custom">
                    <div class="header-right-area main-nav">
                        <ul class="nav">
                            @if (Auth::check())
                            <li class="minicart-wrap">
                                <a href="#" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-item_count">
                                        {{ $CartCount }}
                                    </span>
                                </a>

                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                    @foreach ($Carts as $cart)
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <a href="/shop/{{ $cart->product_id }}"><img src="{{ $cart->ProductPics }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="text-base font-bold textt-[#303030] myopia">
                                            <h6 class="title"><a
                                                    href="/shop/{{ $cart->product_id }}">{{ $cart->ProductName }}</a>
                                            </h6>
                                            <div class="cart-text-btn">
                                                <div class="cart-qty">
                                                    <span>1×</span>
                                                    <span class="cart-price">${{ $cart->ProductPrice }}</span>
                                                </div>
                                                <button type="button" href="/cart/delete/{{ $cart->ProductID }}"><i
                                                        class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="cart-price-total d-flex justify-content-between">
                                        <h5>Total :</h5>
                                        <h5>${{ $CartSum }}.00</h5>
                                    </div>
                                    <div class="cart-links d-flex justify-content-between">
                                        <a class="btn product-cart button-icon flosun-button dark-btn" href="/cart">View
                                            cart</a>
                                        <a class="btn flosun-button secondary-btn rounded-0"
                                            href="/checkout/{checkout}">Checkout</a>
                                    </div>

                                </div>
                            </li>
                            @else
                            <li class="minicart-wrap">
                                <a href="#" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-item_count">
                                        0
                                    </span>
                                </a>
                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                    <div class="single-cart-item">
                                        <div class="w-full flex flex-row justify-between m-1 text-white font-serif">
                                            <a href="/login"><button class="primary px-4 py-1 bg-blue-800 rounded">Sign
                                                    In</button></a>
                                            <a href="/register"><button
                                                    class="primary px-4 py-1 bg-blue-800 rounded">Sign
                                                    Up</button></a>
                                        </div>
                                    </div>
                                    <div class="cart-price-total d-flex justify-content-between">
                                        <h5>Total :</h5>
                                        <h5>$0.00</h5>
                                    </div>
                                    <div class="cart-links d-flex justify-content-between">
                                        <a class="btn product-cart button-icon flosun-button dark-btn" href="/cart">View
                                            cart</a>
                                        <a class="btn flosun-button secondary-btn rounded-0"
                                            href="/checkout">Checkout</a>
                                    </div>
                                </div>
                            </li>
                            @endif
                            <li class="sidemenu-wrap">
                                <a href="#"><i class="fa fa-search"></i> </a>
                                <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                    <li>
                                        <form action="#">
                                            <input name="search" id="search" placeholder="Search" type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="account-menu-wrap d-none d-lg-flex">
                                <a href="#" class="off-canvas-menu-btn">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <li class="mobile-menu-btn d-lg-none">
                                <a class="off-canvas-btn" href="#">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item"><a href="/">Home</a>
                            </li>
                            <li class="menu-item"><a href="/shop">Shop</a>
                            </li>
                            <li class="menu-item"><a href="/blog">Blog</a>
                            </li>
                            <li class="menu-item"><a href="/setting">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="/account">My Account</a></li>
                                    <li><a href="/wishlist">My WishList</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact-us">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <div class="offcanvas-widget-area">
                    <div class="switcher">
                        <div class="language">
                            <span class="switcher-title">Language: </span>
                            <div class="switcher-menu">
                                <ul>
                                    <li><a href="#">English</a>
                                        <ul class="switcher-dropdown">
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="currency">
                            <span class="switcher-title">Currency: </span>
                            <div class="switcher-menu">
                                <ul>
                                    <li><a href="#">$ USD</a>
                                        <ul class="switcher-dropdown">
                                            <li><a href="#">€ EUR</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-info-wrap text-left text-black">
                        <ul class="address-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <h6>(1245) 2456 012</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h6>info@yourdomain.com</h6>
                            </li>
                        </ul>
                        <div class="widget-social">
                            <a class="facebook-color-bg" title="Facebook-f" href="#"><i
                                    class="fa fa-facebook-f"></i></a>
                            <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-menu-wrapper" id="sideMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="off-canvas-inner">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <ul class="menu-top-menu">
                        <li><a href="/about-us">About Us</a></li>
                    </ul>
                    <p class="desc-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    @if (!Auth::check())
                    <div class="w-full flex flex-row justify-between m-1 text-white font-serif">
                        <a href="/login"><button class="primary px-4 py-1 bg-blue-800 rounded">Sign
                                In</button></a>
                        <a href="/register"><button class="primary px-4 py-1 bg-blue-800 rounded">Sign
                                Up</button></a>
                    </div>
                    @endif
                    <div class="switcher">
                        <div class="language">
                            <span class="switcher-title">Language: </span>
                            <div class="switcher-menu">
                                <ul>
                                    <li><a href="#">English</a>
                                        <ul class="switcher-dropdown">
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="currency">
                            <span class="switcher-title">Currency: </span>
                            <div class="switcher-menu">
                                <ul>
                                    <li><a href="#">$ USD</a>
                                        <ul class="switcher-dropdown">
                                            <li><a href="#">€ EUR</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-info-wrap text-left text-black">
                        <ul class="address-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="info%40yourdomain.html">(1245) 2456 012</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="info%40yourdomain.html">info@yourdomain.com</a>
                            </li>
                        </ul>
                        <div class="widget-social">
                            <a class="facebook-color-bg" title="Facebook-f" href="#"><i
                                    class="fa fa-facebook-f"></i></a>
                            <a class="twitter-color-bg" title="Twitter" href=""><i class="fa fa-twitter"></i></a>
                            <a class="linkedin-color-bg" title="Linkedin" href=""><i class="fa fa-linkedin"></i></a>
                            <a class="youtube-color-bg" title="Youtube" href=""><i class="fa fa-youtube"></i></a>
                            <a class="vimeo-color-bg" title="Vimeo" href=""><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
</header>