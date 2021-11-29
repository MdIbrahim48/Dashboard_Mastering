<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8" />
        <title>@yield('frontend_title')</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets') }}/imgs/theme/favicon1.svg">

        <!-- Template CSS -->
        @include('layouts.frontend.include.frontend_css')

    </head>

    <body>
        <!-- Quick view -->
        <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-2.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-1.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-3.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-4.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-5.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-6.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('frontend_assets') }}/imgs/shop/product-16-7.jpg" alt="product image" />
                                        </figure>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                        <div><img src="{{ asset('frontend_assets') }}/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                                    <div class="product-detail-rating">
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">$38</span>
                                            <span>
                                                <span class="save-price font-md color3 ml-15">26% Off</span>
                                                <span class="old-price font-md ml-15">$52</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="detail-extralink mb-30">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="font-xs">
                                        <ul>
                                            <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.frontend.include.frontend_header')

        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="index.html"><img src="{{ asset('frontend_assets') }}/imgs/theme/logo.png" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-header-content-area">
                    <div class="mobile-search search-style-3 mobile-header-border">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <button type="submit"><i class="fi-rs-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="menu-item-has-children">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-grid-right.html">shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Mega menu</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">Women's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-product-right.html">Dresses</a></li>
                                                <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                                <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="shop-product-right.html">Women's Sets</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Men's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-product-right.html">Jackets</a></li>
                                                <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                                <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Technology</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                                <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                                <li><a href="shop-product-right.html">Tablets</a></li>
                                                <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                                <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-category-grid.html">Blog</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-header-info-wrap">
                        <div class="single-mobile-header-info">
                            <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="tel:+01623842475"><i class="fi-rs-headphones"></i>01623842475</a>
                        </div>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-15">Follow Us</h6>
                        <a href="#"><img src="{{ asset('frontend_assets') }}/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend_assets') }}/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend_assets') }}/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend_assets') }}/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                        <a href="#"><img src="{{ asset('frontend_assets') }}/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                    </div>
                    <div class="site-copyright">
                        <p class="font-sm mb-0">© 2021 All Right Reserved || Designed by <i style="color: red;" class="fas fa-heart"></i> <a
                                href="https://birit.xyz/"><strong class="text-brand">BIRIT</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--End header-->

        {{-- main content --}}
        @yield('frontend_content')


        @include('layouts.frontend.include.frontend_footer')

        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="{{ asset('frontend_assets') }}/imgs/theme/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor JS-->

        @include('layouts.frontend.include.frontend_js')

    </body>
</html>
