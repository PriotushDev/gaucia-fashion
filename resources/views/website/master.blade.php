<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ecommerce">
    <title>eMart - eCommerce Website Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}website/assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/bootstrap-select.min.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/fonts/font-awesome.min.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/owl.theme.css" type="text/css">
    <!-- Modals Effects -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/component.css" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/settings.css" type="text/css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/slick.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/slick-theme.css" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/extras/nivo-lightbox.css" type="text/css">
    <!-- Color switcher CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/color-switcher.css" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/slicknav.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/responsive.css" type="text/css">

</head>

<body>
<!-- Header Section Start -->
<div class="header">

    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-2">
                    <div class="language-wrapper">
                        <div class="box-language">
                            <form id="form-language">
                                <div class="btn-group toggle-wrap">
                      <span class="toggle">
                        <span><img src="{{ asset('/') }}website/assets/img/language/flag-lang.png" alt="English" title="English" height="11" width="16"> English</span>
                        <span class="hidden">Language</span>
                      </span>
                                    <ul style="display: none;" class="toggle_cont pull-right">
                                        <li>
                                            <button class="language-select selected" type="button" name="en-gb">
                                                <img src="{{ asset('/') }}website/assets/img/language/en-gb.png" alt="English" title="English" height="11" width="16">
                                                English </button>
                                        </li>
                                        <li>
                                            <button class="language-select" type="button" name="de-DE">
                                                <img src="{{ asset('/') }}website/assets/img/language/de-DE.png" alt="Deutsch" title="Deutsch" height="11" width="16">
                                                Deutsch </button>
                                        </li>
                                        <li>
                                            <button class="language-select" type="button" name="ru-ru">
                                                <img src="{{ asset('/') }}website/assets/img/language/ru-ru.png" alt="Русский" title="Русский" height="11" width="16">
                                                Русский </button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="box-currency">
                            <form method="post" id="form-currency">
                                <div class="btn-group toggle-wrap">
                      <span class="toggle">
                        $USD
                      </span>
                                    <ul class="toggle_cont pull-right">
                                        <li>
                                            <button class="currency-select selected" type="button" name="USD">
                                                $ USD </button>
                                        </li>
                                        <li>
                                            <button class="currency-select" type="button" name="EUR">
                                                € EUR
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select" type="button" name="GBP">
                                                £ GBP </button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <a href="#"><i class="icon-phone"></i> Call Us: (123) 456- 789</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="col-md-8 col-sm-10">
                    <!-- shopping cart end -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <span class="caret"></span></a>
                                        <ul class="dropdown-menu animated fadeIn">
                                            <li class="menu-header">Clothing</li>
                                            <li><a tabindex="-1" href="#">- Men</a></li>
                                            <li><a tabindex="-1" href="#">- Women</a></li>
                                            <li><a tabindex="-1" href="#">- Boys</a></li>
                                            <li><a tabindex="-1" href="#">- Girls</a></li>
                                            <li class="menu-header">Electronics</li>
                                            <li><a tabindex="-1" href="#">- Laptops</a></li>
                                            <li><a tabindex="-1" href="#">- Desktops</a></li>
                                            <li><a tabindex="-1" href="#">- Cameras</a></li>
                                            <li><a tabindex="-1" href="#">- Mobile Phones</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" placeholder="Search here...">
                                <a class="search-button" href="#"><i class="icon-magnifier"></i></a>
                            </div>
                        </form>
                    </div>

                    <div class="shop-cart">
                        <ul>
                            <li><a class="cart-icon cart-btn" href="wishlist.html"><span class="icon-heart"></span></a></li>
                            <li>
                                <a href="#" class="cart-icon cart-btn"><i class="icon-basket"></i><span class="cart-label">3</span></a>
                                <div class="cart-box">
                                    <div class="popup-container">
                                        <div class="cart-entry">
                                            <a href="#" class="image">
                                                <img src="{{ asset('/') }}website/assets/img/products/product-menu-1.jpg"  alt="">
                                            </a>
                                            <div class="content">
                                                <a href="#" class="title">Pullover Batwing</a>
                                                <p class="quantity">Quantity: 3</p>
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="button-x">
                                                <i class="icon-close"></i>
                                            </div>
                                        </div>
                                        <div class="cart-entry">
                                            <a href="#" class="image">
                                                <img src="{{ asset('/') }}website/assets/img/products/product-menu-2.jpg"  alt="">
                                            </a>
                                            <div class="content">
                                                <a href="#" class="title">Pullover Batwing</a>
                                                <p class="quantity">Quantity: 3</p>
                                                <span class="price">$90.00</span>
                                            </div>
                                            <div class="button-x">
                                                <i class="icon-close"></i>
                                            </div>
                                        </div>
                                        <div class="summary">
                                            <div class="subtotal">Sub Total</div>
                                            <div class="price-s">$210.5</div>
                                        </div>
                                        <div class="cart-buttons">
                                            <a href="#" class="btn btn-border-2">View Cart</a>
                                            <a href="#" class="btn btn-common">Checkout</a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="account link-inline">
                        <a href="login-form.html"><i class="icon-login"></i><span class="hidden-mobile">login/register</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->

    <!-- Start  Logo & Naviagtion  -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('/') }}website/assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="active" href="index.html">Home <span class="caret"></span></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="index.html">
                                        Home V1
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="index-2.html">
                                        Home V2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="#">Catalog <span class="caret"></span></a>
                            <div class="dropdown mega-menu megamenu1">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <ul class="menulinks">
                                            <li class="maga-menu-title">
                                                <a href="#">Men</a>
                                            </li>
                                            <li><a href="category.html">Clothing</a></li>
                                            <li><a href="category.html">Handbags</a></li>
                                            <li><a href="category.html">Maternity</a></li>
                                            <li><a href="category.html">Jewelry</a></li>
                                            <li><a href="category.html">Scarves</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <ul class="menulinks">
                                            <li class="maga-menu-title">
                                                <a href="#">Women</a>
                                            </li>
                                            <li><a href="category.html">Handbags</a></li>
                                            <li><a href="category.html">Jewelry</a></li>
                                            <li><a href="category.html">Clothing</a></li>
                                            <li><a href="category.html">Watches</a></li>
                                            <li><a href="category.html">Hats</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                        <span class="block-last">
                          <img src="{{ asset('/') }}website/assets/img/block_menu.jpg"  alt="">
                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Shop <span class="caret"></span></a>
                            <div class="dropdown mega-menu megamenu2">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <ul class="menulinks">
                                            <li class="maga-menu-title">
                                                <a href="#">Normal Shop Pages</a>
                                            </li>
                                            <li><a href="category.html">Single Category</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="shopping-cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="single-shop.html">Seller's Store</a></li>
                                            <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
                                            <li><a href="shop-list.html">Shop List Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="order.html">Order Track</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <ul class="menulinks">
                                            <li class="maga-menu-title">
                                                <a href="#">Multi-vendor Pages</a>
                                            </li>
                                            <li><a href="submission.html">Product Submission</a></li>
                                            <li><a href="single-shop.html">Seller Store Page</a></li>
                                            <li><a href="edit-profile.html">Seller Account</a></li>
                                            <li><a href="login.html">Log In</a></li>
                                            <li><a href="shop.html">Search</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Pages <span class="caret"></span></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="about.html">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="product-details.html">
                                        Product Details
                                    </a>
                                </li>
                                <li>
                                    <a href="team.html">
                                        Team Member
                                    </a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        Checkout
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        Compare
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        Compare
                                    </a>
                                </li>
                                <li>
                                    <a href="shopping-cart.html">
                                        Shopping cart
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        FAQs
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        404 Error
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog <span class="caret"></span></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="blog.html">
                                        Blog Right Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html">
                                        Blog Left Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-full-width.html">
                                        Blog Full Width
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-details.html">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
            <li>
                <a class="active" href="index.html">
                    Home
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="index.html">Home V1</a>
                    </li>
                    <li>
                        <a class="active" href="index-2.html">Home V2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="#">Catalog</a>
                <ul class="dropdown menulinks">
                    <li class="maga-menu-title">
                        <a href="#">Men</a>
                    </li>
                    <li><a href="category.html">Clothing</a></li>
                    <li><a href="category.html">Handbags</a></li>
                    <li><a href="category.html">Maternity</a></li>
                    <li><a href="category.html">Jewelry</a></li>
                    <li><a href="category.html">Scarves</a></li>
                    <li class="maga-menu-title">
                        <a href="#">Women</a>
                    </li>
                    <li><a href="category.html">Handbags</a></li>
                    <li><a href="category.html">Jewelry</a></li>
                    <li><a href="category.html">Clothing</a></li>
                    <li><a href="category.html">Watches</a></li>
                    <li><a href="category.html">Hats</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Shop</a>
                <ul class="menulinks">
                    <li class="maga-menu-title">
                        <a href="#">Normal Shop Pages</a>
                    </li>
                    <li><a href="category.html">Single Category</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="shopping-cart.html">Cart Page</a></li>
                    <li><a href="checkout.html">Checkout Page</a></li>
                    <li><a href="single-shop.html">Seller's Store</a></li>
                    <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
                    <li><a href="shop-list.html">Shop List Sidebar</a></li>
                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                    <li><a href="order.html">Order Track</a></li>
                    <li class="maga-menu-title">
                        <a href="#">Multi-vendor Pages</a>
                    </li>
                    <li><a href="submission.html">Product Submission</a></li>
                    <li><a href="single-shop.html">Seller Store Page</a></li>
                    <li><a href="edit-profile.html">Seller Account</a></li>
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="shop.html">Search</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Pages</a>
                <ul class="dropdown">
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="product-details.html">Product Details</a>
                    </li>
                    <li>
                        <a href="team.html">Team Member</a>
                    </li>
                    <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="compare.html">Compare</a>
                    </li>
                    <li>
                        <a href="shopping-cart.html">Shopping cart</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQs</a>
                    </li>
                    <li>
                        <a href="wishlist.html">Wishlist</a>
                    </li>
                    <li>
                        <a href="404.html">404 Error</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Blog</a>
                <ul class="dropdown">
                    <li>
                        <a href="blog.html">Blog Right Sidebar</a>
                    </li>
                    <li>
                        <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                    </li>
                    <li>
                        <a href="blog-full-width.html">Blog Full Width</a>
                    </li>
                    <li>
                        <a href="blog-details.html">Blog Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->
    </nav>
</div>
<!-- Header Section End -->

<!-- Main Content Start -->
<section class="section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="categories-wrapper white-bg">
                    <h3 class="block-title">Product Categories</h3>
                    <ul class="vertical-menu">
                        <li>
                            <a href="#">New Arrivals</a>
                        </li>
                        <li>
                            <a href="#">All Products</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Bags & Accessories <i class="caret-right fa fa-angle-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bags & Accessories</a></li>
                                <li><a href="#">Man's Products</a></li>
                                <li><a href="#">Woman's Products</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Special Offer</a></li>
                                <li><a href="#">Leather's Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Man's Products <i class="caret-right fa fa-angle-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bags & Accessories</a></li>
                                <li><a href="#">Man's Products</a></li>
                                <li><a href="#">Woman's Products</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Special Offer</a></li>
                                <li><a href="#">Leather's Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Woman's Products <i class="caret-right fa fa-angle-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bags & Accessories</a></li>
                                <li><a href="#">Man's Products</a></li>
                                <li><a href="#">Woman's Products</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Special Offer</a></li>
                                <li><a href="#">Leather's Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Top Brands <i class="caret-right fa fa-angle-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bags & Accessories</a></li>
                                <li><a href="#">Man's Products</a></li>
                                <li><a href="#">Woman's Products</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Special Offer</a></li>
                                <li><a href="#">Leather's Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Special Offer <i class="caret-right fa fa-angle-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bags & Accessories</a></li>
                                <li><a href="#">Man's Products</a></li>
                                <li><a href="#">Woman's Products</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Special Offer</a></li>
                                <li><a href="#">Leather's Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Leather's Productsr <i class="caret-right fa fa-angle-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bags & Accessories</a></li>
                                <li><a href="#">Man's Products</a></li>
                                <li><a href="#">Woman's Products</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Special Offer</a></li>
                                <li><a href="#">Leather's Products</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="touch-slider owl-carousel" data-slider-pagination="true">
                    <div class="item">
                        <a href="category.html"><img src="{{ asset('/') }}website/assets/img/touch-slider/img1.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="category.html"><img src="{{ asset('/') }}website/assets/img/touch-slider/img2.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="category.html"><img src="{{ asset('/') }}website/assets/img/touch-slider/img3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Content End -->

<!-- Feature ctg Section Start -->
<section class="feature-categories section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-item-content">
                    <img src="{{ asset('/') }}website/assets/img/feature/img1.jpg"  alt="">
                    <div class="feature-content">
                        <div class="banner-text">
                            <h4>Men's Collection</h4>
                            <p>Summer Exclusive</p>
                        </div>
                        <a href="#" class="btn btn-common">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-item-content">
                    <img src="{{ asset('/') }}website/assets/img/feature/img3.jpg"  alt="">
                    <div class="feature-content">
                        <div class="banner-text">
                            <h4>Women's Clothing</h4>
                            <p>Up to <span>70%</span> OFF</p>
                        </div>
                        <a href="#" class="btn btn-common">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-item-content mb-30">
                    <img src="{{ asset('/') }}website/assets/img/feature/img2.jpg"  alt="">
                    <div class="feature-content">
                        <div class="banner-text accessories">
                            <h4>Accessories</h4>
                            <p>Handpicked for Men/Women</p>
                        </div>
                        <a href="#" class="btn btn-common">Shop Now</a>
                    </div>
                </div>
                <div class="feature-item-content">
                    <img src="{{ asset('/') }}website/assets/img/feature/img4.jpg"  alt="">
                    <div class="feature-content">
                        <div class="banner-text accessories">
                            <h4>Kids Essentials</h4>
                            <p>Best Collection for Kids</p>
                        </div>
                        <a href="#" class="btn btn-common">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature ctg Section End -->

<!-- Shop Collection Section Start -->
<section id="shop-collection">
    <div class="container">
        <h1 class="section-title">New Arrivals</h1>
        <hr class="lines">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-01.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <span class="sticker new"><strong>NEW</strong></span>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$49.00</span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-02.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <span class="sticker discount"><strong>-40%</strong></span>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$59.00</span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-03.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$69.00 <del>$79.00</del></span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-04.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <span class="sticker sale"><strong>Sale</strong></span>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$39.00</span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-05.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <span class="sticker sale"><strong>Sale</strong></span>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$69.00</span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-06.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$39.00 <del>$79.00</del></span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-07.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <span class="sticker new"><strong>NEW</strong></span>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$56.00</span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-product">
                    <div class="product-box">
                        <a href="#"><img src="{{ asset('/') }}website/assets/img/products/img-08.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                            <div class="add-to-links">
                                <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-title"><a href="product-details.html">Beatae Vitae Dicta</a></h4>
                        <div class="align-items">
                            <div class="pull-left">
                                <span class="price">$79.00</span>
                            </div>
                            <div class="pull-right">
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Collection Section End -->

<!--  Discount Product Start  -->
<section class="discount-product-area">
    <div class="container">
        <div class="row">
            <div class="discount-text">
                <p>Best Bargains</p>
                <h3>Exclusive Deals of This Season!</h3>
                <a href="#" class="btn btn-common btn-large">View Deals</a>
            </div>
        </div>
    </div>
</section>
<!--  Discount Product End  -->

<!-- New Products Section Start-->
<section class="section">
    <div class="container">
        <h1 class="section-title">Featured Products</h1>
        <hr class="lines">
        <div class="row">
            <div class="col-md-12">
                <div id="new-products" class="owl-carousel">
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-01.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <span class="sticker new"><strong>NEW</strong></span>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$49.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-02.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$59.00 <del>$79.00</del></span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-03.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <span class="sticker sale"><strong>Sale</strong></span>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$68.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-04.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$59.00 <del>$69.00</del></span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-05.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <span class="sticker discount"><strong>-40%</strong></span>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$79.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-06.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$69.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shop-product">
                            <div class="product-box">
                                <a href="#"><img src="{{ asset('/') }}website/assets/img/feature-products/img-07.jpg"  alt=""></a>
                                <div class="cart-overlay">
                                </div>
                                <span class="sticker sale"><strong>Sale</strong></span>
                                <div class="actions">
                                    <div class="add-to-links">
                                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>
                                <div class="align-items">
                                    <div class="pull-left">
                                        <span class="price">$56.00</span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="reviews-icon">
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="i-color fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Products Section End -->

<!--  Content Area  Section Start -->
<section id="content-area">
    <div class="container">
        <div class="hero-land clearfix">
            <div class="landing caption">
                <h2>Multi-vendor eCommerce Template</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem, ducimus reprehenderit sed molestiae iure sapiente accusamus incidunt minima expedita velit assumenda vitae libero. Eaque nostrum magni architecto, corporis doloremque!</p>
                <p>
                    <a href="category.html" class="btn btn-common">Explore</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--  Content Area  Section End -->

<!-- Services Section Starts -->
<section id="services" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="row">
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-people"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Multi-vendor eCommerce</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-screen-desktop"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Clean Design</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-basket-loaded"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">100+ eCommerce Elements</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-layers"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Included Business Pages</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-screen-tablet"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Fully Responsive</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service -->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-chemistry"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Cutting-edge Features</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-settings"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Completely Customizable</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-rocket"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Fast and Well-optimized</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
            <!-- Start Service -->
            <div class="col-md-4 col-sm-6">
                <div class="services-box">
                    <div class="services-icon">
                        <i class="icon-umbrella"></i>
                    </div>
                    <div class="services-content">
                        <h4><a href="#">Rich Doc and Support</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service-->
        </div>
    </div>
    <!-- Container Ends -->
</section>
<!-- Services Section Ends -->

<!-- Start Testimonial Section  -->
<div class="testimonial section">
    <div class="container">
        <div class="row">
            <!-- Testimonial section  -->
            <div class="testimonials-carousel owl-carousel">
                <div class="item">
                    <div class="testimonial-item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('/') }}website/assets/img/testimonial/img1.jpg"  alt=""></a>
                        </div>
                        <div class="datils">
                            <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro neque a nam nulla quos atque reprehenderit eius corrupti amet! <br> hic et quidem. Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                            <h5>Jared Erondu</h5>
                            <span>- CEO & art director</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('/') }}website/assets/img/testimonial/img2.jpg"  alt=""></a>
                        </div>
                        <div class="datils">
                            <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro neque a nam nulla quos atque reprehenderit eius corrupti amet! <br> hic et quidem. Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                            <h5>Cadic Vegeta</h5>
                            <span>- Graphic Design</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('/') }}website/assets/img/testimonial/img3.jpg"  alt=""></a>
                        </div>
                        <div class="datils">
                            <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro neque a nam nulla quos atque reprehenderit eius corrupti amet! <br> hic et quidem. Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                            <h5>Jonathan Beri</h5>
                            <span>- Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Section  -->

<!-- List Cart Products Start -->
<section class="listcart-products section">
    <div class="container">
        <h1 class="section-title">Recommended For You</h1>
        <hr class="lines">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="listcartproducts">
                    <h2 class="title-cart">Men's</h2>
                    <div class="products-item-inner">
                        <div class="products-item">
                            <div class="left">
                                <a href="product-details.html"><img src="{{ asset('/') }}website/assets/img/products/p1.jpg" alt=""></a>
                                <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="right">
                                <h5 class="product-name">Floral Print Buttoned</h5>
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    $ 49.00
                                </div>
                            </div>
                        </div>
                        <div class="products-item">
                            <div class="left">
                                <a href="product-details.html"><img src="{{ asset('/') }}website/assets/img/products/p2.jpg" alt=""></a>
                                <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="right">
                                <h5 class="product-name">Floral Print Buttoned</h5>
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    $ 12.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="listcartproducts">
                    <h2 class="title-cart">Women's</h2>
                    <div class="products-item-inner">
                        <div class="products-item">
                            <div class="left">
                                <a href="product-details.html"><img src="{{ asset('/') }}website/assets/img/products/p3.jpg" alt=""></a>
                                <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="right">
                                <h5 class="product-name">Floral Print Buttoned</h5>
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    $ 59.00
                                    <span class="old-price">$ 69.78</span>
                                </div>
                            </div>
                        </div>
                        <div class="products-item">
                            <div class="left">
                                <a href="product-details.html"><img src="{{ asset('/') }}website/assets/img/products/p4.jpg" alt=""></a>
                                <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="right">
                                <h5 class="product-name">Floral Print Buttoned</h5>
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    $ 19.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="listcartproducts">
                    <h2 class="title-cart">Accessories</h2>
                    <div class="products-item-inner">
                        <div class="products-item">
                            <div class="left">
                                <a href="product-details.html"><img src="{{ asset('/') }}website/assets/img/products/p5.jpg" alt=""></a>
                                <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="right">
                                <h5 class="product-name">Floral Print Buttoned</h5>
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    $ 36.60
                                </div>
                            </div>
                        </div>
                        <div class="products-item">
                            <div class="left">
                                <a href="product-details.html"><img src="{{ asset('/') }}website/assets/img/products/p6.jpg" alt=""></a>
                                <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="right">
                                <h5 class="product-name">Floral Print Buttoned</h5>
                                <div class="reviews-icon">
                                    <i class="i-color fa fa-star"></i>
                                    <i class="i-color fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    $ 12.00
                                    <span class="old-price">$ 16.78</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- List Cart Products End -->

<!-- Start Client Section -->
<div class="client section">
    <div class="container">
        <div class="row">
            <div id="client-logo" class="owl-carousel">
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-01.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-02.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-03.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-04.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-05.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-06.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-07.png" alt="" />
                    </a>
                </div>
                <div class="client-logo item">
                    <a href="#">
                        <img src="{{ asset('/') }}website/assets/img/clients/logo-08.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Client Section -->

<!-- Support Section Start -->
<div class="support section">
    <div class="container">
        <div class="row">
            <div class="support-inner">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row-normal clearfix">
                        <div class="support-info">
                            <div class="info-title">
                                <i class="icon-plane"></i>
                                Free Shipping Worldwide
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row-normal clearfix">
                        <div class="support-info">
                            <div class="info-title">
                                <i class="icon-earphones-alt"></i>
                                24/7 Customer Service
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row-normal clearfix">
                        <div class="support-info">
                            <div class="info-title">
                                <i class="icon-refresh"></i>
                                Easy Return Policy
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Support Section End -->

<!-- Footer Start -->
<footer class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="contact-us">
                    <h3 class="widget-title">Contact Us</h3>
                    <ul class="contact-list">
                        <li><i class="icon-home"></i> <span>888 6th 10001 Oakwood Avenue, New York City, NY</span></li>
                        <li><i class="icon-call-out"></i> <span>212-631-5135 <br> 212-631-5105</span></li>
                        <li><i class="icon-envelope"></i> <span>sales@emart.com  support@emart.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3 class="widget-title">Useful Links</h3>
                <ul>
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="compare.html">Compare</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3 class="widget-title">Product Tags</h3>
                <div class="tagcloud">
                    <a href="#" class="tag-link">Accessories</a>
                    <a href="#" class="tag-link">Bags</a>
                    <a href="#" class="tag-link">Bestseller</a>
                    <a href="#" class="tag-link">Handpicked</a>
                    <a href="#" class="tag-link">Dresses</a>
                    <a href="#" class="tag-link">Men Fashion</a>
                    <a href="#" class="tag-link">Sell Off</a>
                    <a href="#" class="tag-link">Shoes</a>
                    <a href="#" class="tag-link">Specials</a>
                    <a href="#" class="tag-link">Tops</a>
                    <a href="#" class="tag-link">Women Fashion</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="block-subscribe">
                    <h3 class="widget-title">Newsletter</h3>
                    <p>Quisque a nunc interdum tellus placerat cursus. Quisque facilisis dapibus facilisis! Vivamus dictum lectus ut porta volutpat.</p>
                    <form class="subscribe" >
                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                        <button type="submit" class="btn btn-common">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Copyright Start -->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>All copyrights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="https://uideck.com/">UIdeck</a></p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="payment pull-right">
                    <img src="{{ asset('/') }}website/assets/img/payment.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
</a>

<!-- All modals added here for the demo -->
<div class="md-modal md-effect-3" id="modal-3">
    <div class="md-content">
        <!-- Product Info Start -->
        <div class="product-info row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-details-image">
                    <div class="slider-for slider">
                        <div>
                            <img src="{{ asset('/') }}website/assets/img/single-product/img1.jpg" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/') }}website/assets/img/single-product/img2.jpg" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/') }}website/assets/img/single-product/img3.jpg" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/') }}website/assets/img/single-product/img4.jpg" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/') }}website/assets/img/single-product/img5.jpg" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/') }}website/assets/img/single-product/img3.jpg" alt="">
                        </div>
                    </div>
                    <ul id="productthumbnail" class="slider slider-nav">
                        <li>
                            <img src="{{ asset('/') }}website/assets/img/single-product/small/img1.jpg" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('/') }}website/assets/img/single-product/small/img2.jpg" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('/') }}website/assets/img/single-product/small/img3.jpg" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('/') }}website/assets/img/single-product/small/img4.jpg" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('/') }}website/assets/img/single-product/small/img5.jpg" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('/') }}website/assets/img/single-product/small/img3.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="info-panel">
                    <h1 class="product-title">Proin Lectus Ipsum</h1>
                    <!-- Rattion Price -->
                    <div class="price-ratting">
                        <div class="price float-left">
                            $ 18.00
                        </div>
                    </div>
                    <!-- Short Description -->
                    <div class="short-desc">
                        <h5 class="sub-title">Quick Overview</h5>
                        <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <!-- Product Size -->
                    <div class="product-size">
                        <h5 class="sub-title">Select Size</h5>
                        <span>S</span>
                        <span class="active">M</span>
                        <span>L</span>
                        <span>XL</span>
                    </div>
                    <!-- Quantity Cart -->
                    <div class="quantity-cart">
                        <button class="btn btn-common"><i class="icon-basket"></i> add to cart</button>
                    </div>
                    <!-- Share -->
                    <div class="share-icons pull-right">
                        <span>share :</span>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Info End -->
        <button class="md-close"><i class="icon-close"></i></button>
    </div>
</div>
<div class="md-overlay"></div>
<!-- the overlay element -->

<!-- All js here -->
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/jquery-min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/ion.rangeSlider.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/modalEffects.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/classie.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/nivo-lightbox.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/color-switcher.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/jquery.slicknav.js"></script>

<script type="text/javascript" src="{{ asset('/') }}website/assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}website/assets/js/main.js"></script>

</body>


</html>
