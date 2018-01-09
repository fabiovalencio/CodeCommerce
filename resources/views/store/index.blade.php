<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Philos - Responsive Ecommerce Html Template</title>
    <meta name="description" content="Philos Template" />
    <meta name="keywords" content="philos, WooCommerce, bootstrap, html template, philos template">
    <meta name="author" content="philos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="img/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="{{ asset('css/plugins/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap css -->
    <link href="{{ asset('css/plugins/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- fontawesome css -->
    <link href="{{ asset('css/plugins/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- animate css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- template css -->
    <link href="{{ asset('plugins/rev_slider/css/settings-ver.5.3.1.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider Revolution Css Setting -->

</head>
<body>

<!-- Newsletter Popup ---------------------------------------------------->
<section id="nlpopup" data-expires="30" data-delay="10">
    <!--Close Button-->
    <a href="javascript:void(0)" class="nlpopup_close nlpopup_close_icon">
        <img src="{{ asset('/img/close-icon-white.png') }}" alt="Newsletter Close" /></a>
    <!--End Close Button-->

    <h3 class="mb-40">Join Our Mailing List </h3>
    <p class="black mb-20">
        But I must explain to you how all this mistaken<br />
        idea of denouncing pleasure pain.
    </p>
    <form>
        <input class="input-md" name="footeremail" title="Enter Email Address.." placeholder="example@domain.com" type="email">
        <button class="btn btn-md btn-color">Subscribe</button>
    </form>
    <label class="mt-20">
        Sign up For Exclusive Updates, New Arrivals<br />
        And Insider-Only Discount.</label>
    <a class="nlpopup_close nlpopup_close_link mt-40">&#10006; Close</a>
</section>
<!-- Overlay -->
<div id="nlpopup_overlay"></div>
<!-- End Newsletter Popup ------------------------------------------------>

<!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
<section id="sidebar-right" class="sidebar-menu sidebar-right">
    <div class="cart-sidebar-wrap">

        <!-- Cart Headiing -->
        <div class="cart-widget-heading">
            <h4>Shopping Cart</h4>
            <!-- Close Icon -->
            <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
            <!-- End Close Icon -->
        </div>
        <!-- End Cart Headiing -->

        <!-- Cart Product Content -->
        <div class="cart-widget-content">
            <div class="cart-widget-product ">

                <!-- Empty Cart -->
                <div class="cart-empty">
                    <p>You have no items in your shopping cart.</p>
                </div>
                <!-- EndEmpty Cart -->

                <!-- Cart Products -->
                <ul class="cart-product-item">

                    <!-- Item -->
                    <li>
                        <!--Item Image-->
                        <a href="#" class="product-image">
                            <img src="{{ asset('img/product-img/small/product_12547554.jpg') }}" alt="" /></a>

                        <!--Item Content-->
                        <div class="product-content">
                            <!-- Item Linkcollateral -->
                            <a class="product-link" href="#">Alpha Block Black Polo T-Shirt</a>

                            <!-- Item Cart Totle -->
                            <div class="cart-collateral">
                                <span class="qty-cart">1</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>399.00</span>
                            </div>

                            <!-- Item Remove Icon -->
                            <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                        </div>
                    </li>

                    <!-- Item -->
                    <li>
                        <!--Item Image-->
                        <a href="#" class="product-image">
                            <img src="{{ asset('img/product-img/small/product_12547555.jpg') }}" alt="" /></a>

                        <!--Item Content-->
                        <div class="product-content">
                            <!-- Item Linkcollateral -->
                            <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>

                            <!-- Item Cart Totle -->
                            <div class="cart-collateral">
                                <span class="qty-cart">2</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>299.00</span>
                            </div>

                            <!-- Item Remove Icon -->
                            <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                        </div>
                    </li>

                </ul>
                <!-- End Cart Products -->

            </div>
        </div>
        <!-- End Cart Product Content -->

        <!-- Cart Footer -->
        <div class="cart-widget-footer">
            <div class="cart-footer-inner">

                <!-- Cart Total -->
                <h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$698.00</span></h4>
                <!-- Cart Total -->

                <!-- Cart Buttons -->
                <div class="cart-action-buttons">
                    <a href="cart.html" class="view-cart btn btn-md btn-gray">View Cart</a>
                    <a href="checkout.html" class="checkout btn btn-md btn-color">Checkout</a>
                </div>
                <!-- End Cart Buttons -->

            </div>
        </div>
        <!-- Cart Footer -->
    </div>
</section>
<!--Overlay-->
<div class="sidebar_overlay"></div>
<!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

<!-- Search Overlay Menu ----------------------------------------------------->
<section class="search-overlay-menu">
    <!-- Close Icon -->
    <a href="javascript:void(0)" class="search-overlay-close"></a>
    <!-- End Close Icon -->
    <div class="container">
        <!-- Search Form -->
        <form role="search" id="searchform" action="/search" method="get">
            <div class="search-icon-lg">
                <img src="{{ asset('img/search-icon-lg.png') }}" alt="" />
            </div>
            <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit">
                <img src="{{ asset('img/search-lg-go-icon.png') }}" alt="" />
            </button>
        </form>
        <!-- End Search Form -->

    </div>
</section>
<!-- End Search Overlay Menu ------------------------------------------------>

<!--==========================================-->
<!-- wrapper -->
<!--==========================================-->
<div class="wraper">
    <!-- Header -->
    <header class="header">
        <!--Topbar-->
        <div class="header-topbar">
            <div class="header-topbar-inner">
                <!--Topbar Left-->
                <div class="topbar-left hidden-sm-down">
                    <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Customer Support : <b>+77 7565 348 576</b></div>
                </div>
                <!--End Topbar Left-->

                <!--Topbar Right-->
                <div class="topbar-right">
                    <ul class="list-none">
                        <li>
                            <a href="login-register.html"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Login</span></a>
                        </li>
                        <li class="dropdown-nav">
                            <a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down">My Account</span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                            <!--Dropdown-->
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="login-register.html">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                                <span class="divider"></span>
                                <ul>
                                    <li><a href="login-register.html"><i class="fa fa-lock left" aria-hidden="true"></i>Login</a></li>
                                    <li><a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i>Create an Account</a></li>
                                </ul>
                            </div>
                            <!--End Dropdown-->
                        </li>
                        <li class="dropdown-nav">
                            <a href="#">USD<i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                            <!--Dropdown-->
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">GBP</a></li>
                                    <li><a href="#">AUD</a></li>
                                </ul>
                            </div>
                            <!--End Dropdown-->
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- End Topbar Right -->
            </div>
        </div>
        <!--End Topbart-->

        <!-- Header Container -->
        <div id="header-sticky" class="header-main">
            <div class="header-main-inner">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('img/logo_black.png') }}" alt="Philos" />
                    </a>
                </div>
                <!-- End Logo -->


                <!-- Right Sidebar Nav -->
                <div class="header-rightside-nav">
                    <!-- Login-Register Link -->
                    <div class="header-btn-link hidden-lg-down"><a href="#" class="btn btn-sm btn-color">Buy Now</a></div>
                    <!-- End Login-Register Link -->

                    <!-- Sidebar Icon -->
                    <div class="sidebar-icon-nav">
                        <ul class="list-none-ib">
                            <!-- Search-->
                            <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                            <!-- Whishlist-->
                            <li><a class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span class="countTip">10</span></a></li>

                            <!-- Cart-->
                            <li><a id="sidebar_toggle_btn">
                                    <div class="cart-icon">
                                        <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                    </div>

                                    <div class="cart-title">
                                        <span class="cart-count">2</span>
                                        /
                                        <span class="cart-price strong">$698.00</span>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                    <!-- End Sidebar Icon -->
                </div>
                <!-- End Right Sidebar Nav -->


                <!-- Navigation Menu -->
                <nav class="navigation-menu">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="shop_grid.html">Man</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>New In</h6>
                                            <ul>
                                                <li><a href="#">New In Clothing</a></li>
                                                <li><a href="#">New In Shoes<span class="new-label">New</span></a></li>
                                                <li><a href="#">New In Bags</a></li>
                                                <li><a href="#">New In Watches</a></li>
                                                <li><a href="#">New In Accesories</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 2-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Clothing</h6>
                                            <ul>
                                                <li><a href="#">Polos & Tees</a></li>
                                                <li><a href="#">Casual Shirts</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Casual Trousers</a></li>
                                                <li><a href="#">Formal Shirts<span class="sale-label">Sale</span></a></li>
                                                <li><a href="#">Formal Trousers</a></li>
                                                <li><a href="#">Suits & Blazers</a></li>
                                                <li><a href="#">Winter Jackets</a></li>
                                                <li><a href="#">Track wear</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 3-->
                                        <li class="nav-dropdown-grid">
                                            <h6>ACCESSORIES</h6>
                                            <ul>
                                                <li><a href="#">Mens Jewellery</a></li>
                                                <li><a href="#">Bag</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Hair Care</a></li>
                                                <li><a href="#">Ties & Cufflinks</a></li>
                                                <li><a href="#">Perfume</a></li>
                                                <li><a href="#">Belt</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 4-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Brand</h6>
                                            <ul>
                                                <li><a href="#">Analog</a></li>
                                                <li><a href="#">Chronograph</a></li>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Watch Cases</a></li>
                                                <li><a href="#">Samsung</a></li>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Hitachi</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                        <li>
                            <a href="shop_grid.html">Women</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>New In</h6>
                                            <ul>
                                                <li><a href="#">New In Clothing</a></li>
                                                <li><a href="#">New In Shoes</a></li>
                                                <li><a href="#">New In Bags</a></li>
                                                <li><a href="#">New In Watches</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Winter Shrugs</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 2-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Clothing</h6>
                                            <ul>
                                                <li><a href="#">Tops , tees & shirts</a></li>
                                                <li><a href="#">Dresses & Jumpsuits</a></li>
                                                <li><a href="#">Trousers & Jeans</a></li>
                                                <li><a href="#">Leggings & Jeggings</a></li>
                                                <li><a href="#">Capris,Shorts & Skirts</a></li>
                                                <li><a href="#">Winter Jackets</a></li>
                                                <li><a href="#">Clothing Accessories</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Winter Shrugs</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 3-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Brand</h6>
                                            <ul>
                                                <li><a href="#">A&C Signature</a></li>
                                                <li><a href="#">Angry Birds</a></li>
                                                <li><a href="#">Macadamia</a></li>
                                                <li><a href="#">Miller & Schweizer</a></li>
                                                <li><a href="#">Stylet</a></li>
                                                <li><a href="#">Van Heusen</a></li>
                                                <li><a href="#">Wrangler</a></li>
                                                <li><a href="#">Wills Lifestyle</a></li>
                                                <li><a href="#">X'Pose</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-dropdown-grid">
                                            <a href="#" class="sub-banner">
                                                <img src="img/banner/banner_115145.jpg" alt="" /></a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                        <li>
                            <a href="shop_grid.html">Kids</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Kid's</h6>
                                            <ul>
                                                <li><a href="#">Tops & Tunics</a></li>
                                                <li><a href="#">Shorts & Capris</a></li>
                                                <li><a href="#">Twin Sets</a></li>
                                                <li><a href="#">Jeans & Trousers</a></li>
                                                <li><a href="#">Leggings & Jeggings</a></li>
                                                <li><a href="#">Skirts</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Casual Dresses</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                        <li>
                            <a href="shop_grid.html">Brand</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <ul>
                                                <li><a href="#">A&C Signature</a></li>
                                                <li><a href="#">Angry Birds</a></li>
                                                <li><a href="#">Macadamia</a></li>
                                                <li><a href="#">Miller & Schweizer</a></li>
                                                <li><a href="#">Stylet</a></li>
                                                <li><a href="#">Van Heusen</a></li>
                                                <li><a href="#">Wrangler</a></li>
                                                <li><a href="#">Wills Lifestyle</a></li>
                                                <li><a href="#">X'Pose</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 2-->
                                        <li class="nav-dropdown-grid">
                                            <ul>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">United State</a></li>
                                                <li><a href="#">Google</a></li>
                                                <li><a href="#">Coca-Cola</a></li>
                                                <li><a href="#">Microsoft</a></li>
                                                <li><a href="#">Samsung</a></li>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>

                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                        <li>
                            <a href="shop_grid.html">Accessories<span class="nav-label-sale"></span></a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">

                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Shop Page</h6>
                                            <ul>
                                                <li><a href="shop_grid.html">Shop Grid - Sidebar Left</a></li>
                                                <li><a href="shop_grid-sidebar_right.html">Shop Grid - Sidebar Right</a></li>
                                                <li><a href="shop_grid-no_sidebar.html">Shop Grid - No Sidebar</a></li>
                                                <li><a href="shop_list.html">Shop List - Sidebar Left</a></li>
                                                <li><a href="shop_list-sidebar_right.html">Shop List - Sidebar Right</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 2-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Product Page</h6>
                                            <ul>
                                                <li><a href="product_detail.html">Product Page - Default</a></li>
                                                <li><a href="product_detail-with_sidebar.html">Product Page - With Sidebar</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 3-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Extra Page</h6>
                                            <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-single.html">Portfolio Detail</a></li>

                                            </ul>
                                        </li>

                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6 class="white">Extra Page</h6>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-with_sidebar.html">Blog - With sidebar</a></li>
                                                <li><a href="blog-single.html">Blog Detail</a></li>
                                                <li><a href="login-register.html">Login & Register</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                    </ul>
                </nav>
                <!-- End Navigation Menu -->

            </div>
        </div>
        <!-- End Header Container -->
    </header>
    <!-- End Header -->

    <!-- Page Content Wraper -->
    <div class="page-content-wraper">
        <!-- Intro -->
        <section id="intro" class="intro">
            <!-- Revolution Slider -->
            <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="background-color: transparent; padding: 0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.3.0.2">
                    <ul>
                        <li class="dark-bg" data-index="rs-1" data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="01">
                            <!-- Main Image Layer 0-->
                            <img src="{{ asset('img/slide-img/slide_bg1.jpg') }}" alt="h" title="home-1-slide-1" width="1920" height="1100" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina />


                            <!--Layer 1-->
                            <h1 class="tp-caption NotGeneric-Title tp-resizeme text-center" style="letter-spacing: 0px; line-height: 60px;"
                                data-x="140"
                                data-y="center"
                                data-hoffset=""
                                data-voffset="-100"
                                data-transform_idle="o:1;"
                                data-width="['auto','auto','auto','auto']"
                                data-height="['auto','auto','auto','auto']"
                                data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                                data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                                data-start="500"
                                data-speed="500"
                                data-endspeed="500"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">New Look<br />
                                Fashion 2017
                            </h1>


                            <!--Layer 2-->
                            <h3 class="tp-caption NotGeneric-Title tp-resizeme h3 normal text-center" style="letter-spacing: 0px;"
                                data-x="195"
                                data-y="center"
                                data-hoffset=""
                                data-voffset="0"
                                data-transform_idle="o:1;"
                                data-width="['auto','auto','auto','auto']"
                                data-height="['auto','auto','auto','auto']"
                                data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                                data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                                data-start="800"
                                data-speed="500"
                                data-endspeed="500"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">What's Tranding Fashion?
                            </h3>

                            <!--Layer 3-->
                            <a class="tp-caption NotGeneric-Title tp-resizeme btn btn-md btn-color"
                               data-x="245"
                               data-y="center"
                               data-hoffset=""
                               data-voffset="75"
                               data-transform_idle="o:1;"
                               data-width="['auto','auto','auto','auto']"
                               data-height="['auto','auto','auto','auto']"
                               data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                               data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                               data-start="1100"
                               data-speed="500"
                               data-endspeed="500"
                               data-splitin="none"
                               data-splitout="none"
                               data-responsive_offset="on">See More
                            </a>


                        </li>
                        <li data-index="rs-2" data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="02">
                            <!-- Main Image Layer 0-->
                            <img src="img/slide-img/slide_bg2.jpg" alt="h" title="home-1-slide-1" width="1920" height="1100" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina />
                            <!-- LAYERS -->

                            <!--Layer 1-->
                            <h1 class="tp-caption NotGeneric-Title tp-resizeme" style="letter-spacing: 0px; line-height: 60px;"
                                data-x="150"
                                data-y="center"
                                data-hoffset=""
                                data-voffset="-100"
                                data-transform_idle="o:1;"
                                data-width="['auto','auto','auto','auto']"
                                data-height="['auto','auto','auto','auto']"
                                data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                                data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                                data-start="500"
                                data-speed="500"
                                data-endspeed="500"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">Bang's Eng<br />
                                20% Off
                            </h1>


                            <!--Layer 2-->
                            <h3 class="tp-caption NotGeneric-Title tp-resizeme h3 normal " style="letter-spacing: 0px;"
                                data-x="150"
                                data-y="center"
                                data-hoffset=""
                                data-voffset="0"
                                data-transform_idle="o:1;"
                                data-width="['auto','auto','auto','auto']"
                                data-height="['auto','auto','auto','auto']"
                                data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                                data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                                data-start="800"
                                data-speed="500"
                                data-endspeed="500"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">The Bag for Summer
                            </h3>

                            <!--Layer 3-->
                            <a class="tp-caption NotGeneric-Title tp-resizeme btn btn-md btn-color"
                               data-x="150"
                               data-y="center"
                               data-hoffset=""
                               data-voffset="75"
                               data-transform_idle="o:1;"
                               data-width="['auto','auto','auto','auto']"
                               data-height="['auto','auto','auto','auto']"
                               data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                               data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                               data-start="1100"
                               data-speed="500"
                               data-endspeed="500"
                               data-splitin="none"
                               data-splitout="none"
                               data-responsive_offset="on">See More
                            </a>
                        </li>
                        <li data-index="rs-3" data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="03">
                            <!-- Main Image Layer 0-->
                            <img src="img/slide-img/slide_bg3.jpg" alt="h" title="home-1-slide-1" width="1920" height="1100" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina />
                            <!-- LAYERS -->

                            <!--Layer 1-->
                            <div class="tp-caption NotGeneric-Title tp-resizeme" style="letter-spacing: 0px; line-height: 60px;"
                                 data-x="center"
                                 data-y="center"
                                 data-hoffset=""
                                 data-voffset="-65"
                                 data-transform_idle="o:1;"
                                 data-width="['auto','auto','auto','auto']"
                                 data-height="['auto','auto','auto','auto']"
                                 data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                                 data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                                 data-start="500"
                                 data-speed="500"
                                 data-endspeed="500"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on">
                                <img src="img/slider-caption-sale.png" alt="" style="width: 100%; max-width: 682px;" />
                            </div>

                            <!--Layer 2-->
                            <a class="tp-caption NotGeneric-Title tp-resizeme btn btn-md btn-black"
                               data-x="center"
                               data-y="center"
                               data-hoffset=""
                               data-voffset="65"
                               data-transform_idle="o:1;"
                               data-width="['auto','auto','auto','auto']"
                               data-height="['auto','auto','auto','auto']"
                               data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                               data-transform_out="s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
                               data-start="900"
                               data-speed="500"
                               data-endspeed="500"
                               data-splitin="none"
                               data-splitout="none"
                               data-responsive_offset="on">See More
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- End Revolution Slider -->
        </section>
        <!-- End Intro -->

        <!-- Promo Box -->
        <section id="promo" class="section-padding-sm promo ">
            <div class="container">
                <div class="promo-box row">
                    <div class="col-md-4 mtb-sm-30 promo-item">
                        <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="info">
                            <a href="#">
                                <h6 class="normal">Delivery Free</h6>
                            </a>
                            <p>On Order Over $150</p>
                        </div>
                    </div>
                    <div class="col-md-4 mtb-sm-30 promo-item">
                        <div class="icon"><i class="fa fa-repeat" aria-hidden="true"></i></div>
                        <div class="info">
                            <a href="#">
                                <h6 class="normal">Exchange or Return</h6>
                            </a>
                            <p>30 Day Money Back Guarantee</p>
                        </div>
                    </div>
                    <div class="col-md-4 mtb-sm-30 promo-item">
                        <div class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></div>
                        <div class="info">
                            <a href="#">
                                <h6 class="normal">Support</h6>
                            </a>
                            <p>24/7 Online Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Promo Box -->

        <!-- Promo Banner -->
        <section id="promo-banner" class="section-padding-b">
            <div class="container">
                <div class="row">
                    <!--Left Side-->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 mb-30">
                                <!-- banner No.1 -->
                                <div class="promo-banner-wrap">
                                    <a href="#" class="promo-image-wrap">
                                        <img src="img/banner/promo-banner4.jpg" alt="Accesories" />
                                    </a>
                                </div>


                            </div>
                            <div class="col-12 mb-sm-30">
                                <!-- banner No.2 -->
                                <div class="promo-banner-wrap">
                                    <a href="#" class="promo-image-wrap">
                                        <img src="img/banner/promo-banner3.jpg" alt="Accesories" />
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!--Right Side-->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 mb-30">
                                <!-- banner No.3 -->
                                <div class="promo-banner-wrap">
                                    <a href="#" class="promo-image-wrap">
                                        <img src="img/banner/promo-banner2.jpg" alt="Accesories" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 mb-sm-30">
                                <!-- banner No.4 -->
                                <div class="promo-banner-wrap">
                                    <a href="#" class="promo-image-wrap">
                                        <img src="img/banner/promo-banner5.jpg" alt="Accesories" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Promo Banner -->

        <!-- Product (Tab with Slider) -->
        <section class="section-padding-b">
            <div class="container">
                <h2 class="page-title">Top Interesting</h2>
            </div>
            <div class="container">
                <ul class="product-filter nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#latest" role="tab" data-toggle="tab">New Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#best-sellar" role="tab" data-toggle="tab">Best Sellar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features" role="tab" data-toggle="tab">Features</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Tab1 - Latest Product -->
                    <div id="latest" role="tabpanel" class="tab-pane fade in active">
                        <div id="new-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                            <!-- item.1 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470001.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.2 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="new-label">New</div>
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470002.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.3 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470003.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price"><del>$79.00</del>$39.00</h5>
                                </div>
                            </div>
                            <!-- item.4 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="sale-label">sale</div>
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470004.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.5 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470005.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.6 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470006.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.7 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470007.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tab2 - Best Sellar -->
                    <div id="best-sellar" role="tabpanel" class="tab-pane fade">
                        <div id="popular-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                            <!-- item.1 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470005.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.2 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470006.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.3 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470007.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.4 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470001.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.5 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470002.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.6 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470003.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.7 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470004.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Tab3 - Features -->
                    <div id="features" role="tabpanel" class="tab-pane fade">
                        <div id="features-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                            <!-- item.1 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470001.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.2 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="new-label">New</div>
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470002.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.3 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470003.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.4 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="sale-label">sale</div>
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470004.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.5 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470005.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.6 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470006.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>
                            <!-- item.7 -->
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-img-wrap">
                                        <img src="img/product-img/big/product_125470007.jpg" alt="">
                                    </div>
                                    <div class="product-button">
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                                    <div class="product-rating">
                                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                    </div>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                    </p>
                                    <h5 class="item-price">$39.00</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product (Tab with Slider) -->

        <!-- Categories -->
        <section class="">
            <div class="section-padding container-fluid bg-image text-center overlay-light90" data-background-img="img/bg/bg_5.jpg" data-bg-position-x="center center">
                <div class="container">
                    <h2 class="page-title">Shop by Categories</h2>
                </div>
            </div>
            <div class="container container-margin-minus-t">
                <div class="row">
                    <div class="col-md-4">
                        <div class="categories-box">
                            <div class="categories-image-wrap">
                                <img src="img/categories/Categories_cupple.jpg" alt="" />
                            </div>
                            <div class="categories-content">
                                <a href="#">
                                    <div class="categories-caption">
                                        <h6 class="normal">Cupple's</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="categories-box">
                            <div class="categories-image-wrap">
                                <img src="img/categories/Categories_women.jpg" alt="" />
                            </div>
                            <div class="categories-content">
                                <a href="#">
                                    <div class="categories-caption">
                                        <h6 class="normal">Women</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="categories-box">
                            <div class="categories-image-wrap">
                                <img src="img/categories/Categories_man.jpg" alt="" />
                            </div>
                            <div class="categories-content">
                                <a href="#">
                                    <div class="categories-caption">
                                        <h6 class="normal">Man</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Categories -->

        <!-- New Product -->
        <section class="section-padding">
            <div class="container">
                <h2 class="page-title">New Tranding</h2>
            </div>
            <div class="container">
                <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470001.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.2 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470002.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.3 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470003.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.4 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470004.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.5 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470005.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.6 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470006.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>
                    <!-- item.7 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="img/product-img/big/product_125470007.jpg" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html">United Colors of Benetton</a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                            </p>
                            <h5 class="item-price">$39.00</h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End New Product -->

        <!-- Like & Share Banner -->
        <section id="like-share" class="like-share">
            <div class="container">
                <div class="like-share-inner overlay-black40">
                    <h3>Like And Share Our Page for one time <span class="color">10%</span> Off</h3>
                    <ul class="social-icon">
                        <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Like & Share Banner -->

        <!-- Blog & News -->
        <section class="section-padding">
            <div class="container">
                <h2 class="page-title">Blog & News</h2>
            </div>
            <div class="container">
                <div id="blog-carousel" class="blog-carousel owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
                    <div class="product-item">
                        <div class="blog-box">
                            <div class="blog-img-wrap">
                                <img src="img/blog/blog_01.jpg" alt="philos" />
                            </div>
                            <div class="blog-box-content">
                                <div class="blog-box-content-inner">
                                    <h4 class="blog-title"><a href="#">Huge Saving Limited Offer period</a></h4>
                                    <p class="info"><span>by <a href="#">Philos Team</a></span><span>29 Jan 2017</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item.2 -->
                    <div class="product-item">
                        <div class="blog-box">
                            <div class="blog-img-wrap">
                                <img src="img/blog/blog_02.jpg" alt="theme" />
                            </div>
                            <div class="blog-box-content">
                                <div class="blog-box-content-inner">
                                    <h4 class="blog-title"><a href="#">Summer Collection Launched</a></h4>
                                    <p class="info"><span>by <a href="#">Admin</a></span><span>15 Jan 2017</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item.3 -->
                    <div class="product-item">
                        <div class="blog-box">
                            <div class="blog-img-wrap">
                                <img src="img/blog/blog_03.jpg" alt="template" />
                            </div>
                            <div class="blog-box-content">
                                <div class="blog-box-content-inner">
                                    <h4 class="blog-title"><a href="#">New Lunched Vintage Collaction</a></h4>
                                    <p class="info"><span>by <a href="#">People</a></span><span>19 Jan 2017</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Blog & News -->

        <!-- Newsletter -->

        <section class="section-padding dark-bg container-fluid bg-image text-center overlay-black40" data-background-img="img/bg/bg_7.jpg" data-bg-position-x="center top">
            <div class="container newsletter section-padding-b">
                <h2 class="page-title">Subscribe To Newsletter</h2>
                <form name="form-newsletter" class="newsletter-from" id="form-newsletter" method="post">
                    <div class="form-input">
                        <input class="input-lg" name="frmemail" id="frmemail" placeholder="Enter Email Address..." title="Enter Email Address..." type="text">
                    </div>
                    <button class="btn btn-lg btn-color">Sing Up</button>
                </form>
                <p class="italic">Sign up For Exclusive Updates, New Arrivals And Insider-Only Discount.</p>
            </div>
        </section>

        <!-- Newsletter -->

        <!-- About blocks -->
        <section class="">
            <div class="container container-margin-minus-t">
                <div class="home-about-blocks">
                    <div class="col-12 about-blocks-wrap">
                        <div class="row">
                            <!--Customer Say-->
                            <div class="col-sm-6 col-md-6 customer-say">
                                <div class="about-box-inner">
                                    <h4 class="mb-25">Customer Say</h4>

                                    <!--Customer Carousel-->
                                    <div class="testimonials-carousel owl-carousel owl-theme nf-carousel-theme1">
                                        <div class="product-item">
                                            <p class="large quotes">I think when we use 'stress', we are often using a kind of dummy word to try to fit many different things into one big category</p>
                                            <h6 class="quotes-people">- Jeff Dunham (Apple)</h6>
                                        </div>
                                        <div class="product-item">
                                            <p class="large quotes">It's true, you can never eat a pet you name. And anyway, it would be like a ventriloquist eating his dummy</p>
                                            <h6 class="quotes-people">- George Lois (microsoft)</h6>
                                        </div>
                                    </div>
                                    <!--End Customer Carousel-->
                                </div>
                            </div>

                            <!--About Shop-->
                            <div class="col-sm-6 col-md-6 about-shop">
                                <div class="about-box-inner">
                                    <h4 class="mb-25">About Philos</h4>
                                    <p class="mb-20">Welcome to <b class="black">Philos</b> - RandomText is a tool designers and developers can use to quickly grab dummy text in either Lorem Ipsum or Gibberish format.</p>
                                    <a href="#" class="btn btn-xs btn-black">More <i class="fa fa-angle-right right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About blocks -->

        <!-- Brnad Logo -->
        <section id="brand-logo" class="section-padding brand-logo">
            <div class="container">
                <ul class="list-none-ib brand-logo-carousel owl-carousel owl-theme">
                    <li class="brand-item"><a href="#">
                            <img src="img/logo/01.png" alt="nileforest" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/02.png" alt="niletheme" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/03.png" alt="nile" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/04.png" alt="forest" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/05.png" alt="themeforest" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/06.png" alt="woocommerce" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/07.png" alt="ecommerce" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/08.png" alt="html" />
                        </a>
                    </li>
                    <li class="brand-item">
                        <a href="#">
                            <img src="img/logo/09.png" alt="multiprapose" />
                        </a>
                    </li>

                </ul>

            </div>
        </section>
        <!-- End Brnad Logo -->

        <!-- Instagram -->
        <section class="section-padding instagram bg-gray">
            <div class="container text-center">
                <h2 class="page-title">Philos on Instagram</h2>
                <p class="">Follow Us <a class="strong" href="#">@MayShop</a></p>
            </div>
            <div class="container">
                <ul class="intagram-feed">
                    <li>
                        <a href="#">
                            <img src="img/instagram/insta-1.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/instagram/insta-2.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/instagram/insta-4.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/instagram/insta-5.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Instagram -->
    </div>
    <!-- End Page Content Wraper -->

    <!-- Footer Section -------------->
    <footer class="footer section-padding">
        <!-- Footer Info -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-sm-45">
                    <div class="footer-block about-us-block">
                        <img src="img/logo_white.png" width="125" alt="">
                        <p>Gumbo beet greens corn soko endive gum gourd. Parsley allot courgette tatsoi pea sprouts fava bean soluta nobis est ses eligendi optio.</p>
                        <ul class="footer-social-icon list-none-ib">
                            <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
                    <div class="footer-block information-block">
                        <h6>Information</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                            <li><a href="#">Terms &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
                    <div class="footer-block links-block">
                        <h6>Our Links</h6>
                        <ul>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Special Event</a></li>
                            <li><a href="#">Retunrs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
                    <div class="footer-block extra-block">
                        <h6>Extra</h6>
                        <ul>
                            <li><a href="#">New Collection</a></li>
                            <li><a href="#">Women Dresses</a></li>
                            <li><a href="#">Kids Collection</a></li>
                            <li><a href="#">Mens Collection</a></li>
                            <li><a href="#">Custom Service</a></li>
                            <li><a href="#">Shipping policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-block contact-block">
                        <h6>Contact</h6>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>1 Wintergreen Dr. Huntley
                                <br>
                                IL 60142, Usa</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@sky.com">info@sky.com</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>(013) 456789</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i>89567989</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Info -->

        <!-- Footer Newsletter -->
        <div class="container">
            <div class="footer-newsletter">
                <h4>Subscribe Newsletter</h4>
                <form class="footer-newslettr-inner">
                    <input class="input-md fancy" name="footeremail" title="Enter Email Address.." placeholder="Enter Email Address.." type="text">
                    <button class="btn btn-md btn-color fancy">Sing Up</button>
                </form>
            </div>
        </div>
        <!-- End Footer Newsletter -->

        <!-- Footer Copyright -->
        <div class="container">
            <div class="copyrights">
                <p class="copyright">&copy; Created by <a href="http://nileforest.com/" target="_blank">NileForest</a>. Philos Responsive Woocommerce Theme 2017</p>
                <p class="payment">
                    <img src="img/payment_logos.png" alt="payment">
                </p>
            </div>
        </div>
        <!-- End Footer Copyright -->
    </footer>
    <!-- End Footer Section -------------->

</div>
<!-- End wrapper =============================-->

<!--==========================================-->
<!-- JAVASCRIPT -->
<!--==========================================-->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery-ui.js') }}"></script>
<!-- jquery library js -->
<script type="text/javascript" src="{{ asset('js/plugins/modernizr.js') }}"></script>
<!--modernizr Js-->
<script type="text/javascript" src="{{ asset('plugins/rev_slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/rev_slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/rev_slider/js/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/rev_slider/js/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/rev_slider/js/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/rev_slider/js/revolution.extension.layeranimation.min.js') }}"></script>
<!--Slider Revolution Js File-->
<script type="text/javascript" src="{{ asset('js/plugins/tether.min.js') }}"></script>
<!--Bootstrap tooltips require Tether (Tether Js)-->
<script type="text/javascript" src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="{{ asset('js/plugins/owl.carousel.js') }}"></script>
<!-- OWL carousel js -->
<script type="text/javascript" src="{{ asset('js/plugins/slick.js') }}"></script>
<!-- Slick Slider js -->
<script type="text/javascript" src="{{ asset('js/plugins/plugins-all.js') }}"></script>
<!-- Plugins All js -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<!-- custom js -->
<!-- end jquery -->




</body>

</html>
