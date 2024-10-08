<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{ asset('frontend') }}/image/fevicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/simple-line-icons.css">
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/themify-icons.css">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/ionicons.min.css">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/swiper.min.css">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/animate.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/responsive.css">
    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @stack('css')
</head>

<body class="home-1">
    <!-- top notificationbar start -->
    <section class="top1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="top-home">
                        <li class="top-home-li">
                            <!-- currency start -->
                            <div class="currency">
                                <span class="currency-head">currency:</span>
                                <div class="currency-drop">
                                    <div class="eur">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon1.png"
                                            alt="">
                                        <span class="cur-name">EUR</span>
                                    </div>
                                    <ul class="all-currency">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon4.png"
                                                    alt="">
                                                <span class="cur-name">AFN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon2.png"
                                                    alt="">
                                                <span class="cur-name">BDT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon3.png"
                                                    alt="">
                                                <span class="cur-name">CAD</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon1.png"
                                                    alt="">
                                                <span class="cur-name">EUR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon5.png"
                                                    alt="">
                                                <span class="cur-name">GBP</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon6.png"
                                                    alt="">
                                                <span class="cur-name">INR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/image/c-icon7.png"
                                                    alt="">
                                                <span class="cur-name">SAR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend') }}/image/c-icon8.png" alt="">
                                                <span class="cur-name">USD</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- currency end -->
                            <!-- mobile search start -->
                            <div class="r-search">
                                <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i
                                        class="fa fa-search"></i></a>
                                <div class="modal fade" id="r-search-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="m-drop-search">
                                                    <input type="text" name="search"
                                                        placeholder="Search products, brands or advice">
                                                    <a href="search.html" class="search-btn"><i
                                                            class="fa fa-search"></i></a>
                                                </div>
                                                <button type="button" class="close" data-bs-dismiss="modal"><i
                                                        class="ion-close-round"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile search end -->
                        </li>
                        <li class="top-home-li t-content">
                            <!-- offer text start -->
                            <div class="top-content">
                                <p class="top-slogn"><span class="top-c">Free shipping</span> orders from all item
                                </p>
                            </div>
                            <!-- offer text end -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- top notificationbar end -->

    <!-- header start -->
    <header class="header-area">
        <div class="header-main-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header-main">
                            <!-- logo start -->
                            <div class="header-element logo">
                                <a href="index1.html">
                                    <img src="{{ asset('frontend') }}/image/logo1.png" alt="logo-image"
                                        class="img-fluid">
                                </a>
                            </div>
                            <!-- logo end -->
                            <!-- search start -->
                            <div class="header-element search-wrap">
                                <input type="text" name="search" placeholder="Search product.">
                                <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- search end -->
                            <!-- header-icon start -->
                            <div class="header-element right-block-box">
                                <ul class="shop-element">
                                    <li class="side-wrap nav-toggler">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarContent">
                                            <span class="line"></span>
                                        </button>
                                    </li>
                                    <li class="side-wrap user-wrap">
                                        <div class="acc-desk">
                                            <div class="user-icon">
                                                <a href="account.html" class="user-icon-desk">
                                                    <span><i class="icon-user"></i></span>
                                                </a>
                                            </div>
                                            <div class="user-info">
                                                <span class="acc-title">Account</span>
                                                <div class="account-login">
                                                    <a href="register.html">Register</a>
                                                    <a href="login.html">Log in</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-mob">
                                            <a href="account.html" class="user-icon">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="side-wrap wishlist-wrap">
                                        <a href="wishlist-empty.html" class="header-wishlist">
                                            <span class="wishlist-icon"><i class="icon-heart"></i></span>
                                            <span class="wishlist-counter">0</span>
                                        </a>
                                    </li>
                                    <li class="side-wrap cart-wrap">
                                        <div class="shopping-widget">
                                            <div class="shopping-cart">
                                                <a href="javascript:void(0)" class="cart-count">
                                                    <span class="cart-icon-wrap">
                                                        <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                        <span id="cart-total" class="bigcounter">0</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- header-icon end -->
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.layouts.mainmenu')
        </div>
        <div class="mini-cart">
            <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
            <div class="cart-item-title">
                <p>
                    <span class="cart-count-desc">There are</span>
                    <span class="cart-count-item bigcounter">0</span>
                    <span class="cart-count-desc">Products</span>
                </p>
            </div>
            <ul class="cart-item-loop">

            </ul>
            <ul class="subtotal-title-area">
                <li class="subtotal-info">
                    <div class="subtotal-titles">
                        <h6>Sub total:</h6>
                        <span class="subtotal-price">$750.00 USD</span>
                    </div>
                </li>
                <li class="mini-cart-btns">
                    <div class="cart-btns">
                        <a href="{{ route('front.cart.index') }}" class="btn btn-style2">View cart</a>
                        <a href="checkout-1.html" class="btn btn-style2">Checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- header end -->

    @include('frontend.layouts.mobilemenu')

    @yield('content')
    <!-- News Letter start -->
    <section class="news-letter1">
        <div class="section-tb-padding news-img"
            style="background-image: url({{ asset('frontend') }}/image/banner3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home-news">
                            <h2>Get the latest deals</h2>
                            <p>And receive 20% off coupon for first shopping</p>
                            <form>
                                <input type="text" name="search" placeholder="Enter your email address">
                                <button class="btn btn-style3">Subscribe</button>
                                <button class="btn btn-style1 news-sub">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Letter end -->
    <!-- brand logo start -->
    <section class="section-tb-padding home-brand1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-carousel owl-carousel owl theme">
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l1.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l2.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l3.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l4.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l5.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l6.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l7.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('frontend') }}/image/brand/home-123/l8.png" alt="home brand"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand logo end -->
    <!-- footer start -->
    <section class="footer-one section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-service section-b-padding">
                        <ul class="service-ul">
                            <li class="service-li">
                                <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                                <span>Free delivery</span>
                            </li>
                            <li class="service-li">
                                <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                                <span>Cash on delivery</span>
                            </li>
                            <li class="service-li">
                                <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                                <span>30 Days returns</span>
                            </li>
                            <li class="service-li">
                                <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                                <span>Online support</span>
                            </li>
                        </ul>
                    </div>
                    <div class="f-logo">
                        <ul class="footer-ul">
                            <li class="footer-li footer-logo">
                                <a href="index1.html">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/image/logo1.png"
                                        alt="">
                                </a>
                            </li>
                            <li class="footer-li footer-address">
                                <ul class="f-ul-li-ul">
                                    <li class="footer-icon">
                                        <i class="ion-ios-location"></i>
                                    </li>
                                    <li class="footer-info">
                                        <h6>Address</h6>
                                        <span>401 Broadway 24th floor</span>
                                        <span>Near ant mall cross road</span>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer-li footer-contact">
                                <ul class="f-ul-li-ul">
                                    <li class="footer-icon">
                                        <i class="ion-ios-telephone"></i>
                                    </li>
                                    <li class="footer-info">
                                        <h6>Contact</h6>
                                        <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                        <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer-li footer-address">
                                <ul class="f-ul-li-ul">
                                    <li class="footer-icon">
                                        <i class="ion-ios-help"></i>
                                    </li>
                                    <li class="footer-info">
                                        <h6>Help</h6>
                                        <span>Lorem ipsum is simply</span>
                                        <span>Dummy the printing</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-bottom section-t-padding">
                        <div class="footer-link" id="footer-accordian">
                            <div class="f-link">
                                <h2 class="h-footer">Top categories</h2>
                                <a href="#t-cate" data-bs-toggle="collapse" class="h-footer">
                                    <span>Top categories</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="grid-list.html">Fruits</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Fast foods</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Vegetable</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Salads</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Bestseller</a></li>
                                </ul>
                            </div>
                            <div class="f-link">
                                <h2 class="h-footer">Services</h2>
                                <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                    <span>Services</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="about-us.html">About vegist</a></li>
                                    <li class="f-link-ul-li"><a href="faq%27s.html">Faq's</a></li>
                                    <li class="f-link-ul-li"><a href="contact.html">Contact us</a></li>
                                    <li class="f-link-ul-li"><a href="blog-style-1-3-grid.html">News</a></li>
                                    <li class="f-link-ul-li"><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="f-link">
                                <h2 class="h-footer">Privacy & terms</h2>
                                <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                    <span>Privacy & terms</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="payment-policy.html">Payment policy</a></li>
                                    <li class="f-link-ul-li"><a href="privacy-policy.html">Privacy policy</a></li>
                                    <li class="f-link-ul-li"><a href="return-policy.html">Return policy</a></li>
                                    <li class="f-link-ul-li"><a href="shipping-policy.html">Shipping policy</a></li>
                                    <li class="f-link-ul-li"><a href="terms-conditions.html">Terms & conditions</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="f-link">
                                <h2 class="h-footer">My account</h2>
                                <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                    <span>My account</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="account.html">My account</a></li>
                                    <li class="f-link-ul-li"><a href="cart.html">My cart</a></li>
                                    <li class="f-link-ul-li"><a href="tracking.html">Order history</a></li>
                                    <li class="f-link-ul-li"><a href="wishlist.html">My wishlist</a></li>
                                    <li class="f-link-ul-li"><a href="addresses.html">My address</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
    <!-- footer copyright start -->
    <section class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="f-bottom">
                        <li class="f-c f-copyright">
                            <p>Copyright <i class="fa fa-copyright"></i> 2023 spacingtech</p>
                        </li>
                        <li class="f-c f-social">
                            <a href="https://www.whatsapp.com/" class="f-icn-link"><i class="fa fa-whatsapp"></i></a>
                            <a href="https://www.facebook.com/" class="f-icn-link"><i
                                    class="fa fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" class="f-icn-link"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" class="f-icn-link"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/" class="f-icn-link"><i
                                    class="fa fa-pinterest-p"></i></a>
                            <a href="https://www.youtube.com/" class="f-icn-link"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li class="f-c f-payment">
                            <a href="checkout-1.html"><img src="{{ asset('frontend') }}/image/payment.png"
                                    class="img-fluid" alt="payment image"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- footer copyright end -->
    <!-- newsletter pop-up start -->
    {{-- <div class="vegist-popup animated modal fadeIn" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup-content">
                        <!-- popup close button start -->
                        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"
                            class="close-btn"><i class="ion-close-round"></i></a>
                        <!-- popup close button end -->
                        <!-- popup content area start -->
                        <div class="pop-up-newsletter" style="background-image: url({{ asset('frontend') }}/image/news-popup.jpg);">
                            <div class="logo-content">
                                <a href="index1.html"><img src="{{ asset('frontend') }}/image/logo1.png" alt="image"
                                        class="img-fluid"></a>
                                <h4>Become a subscriber</h4>
                                <span>Subscribe to get the notification of latest posts</span>
                            </div>
                            <div class="subscribe-area">
                                <input type="text" name="comment" placeholder="Your email address">
                                <a href="index1.html" class="btn btn-style1">Subscribe</a>
                            </div>
                        </div>
                        <!-- popup content area end -->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- newsletter pop-up end -->
    <!-- back to top start -->
    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>
    <!-- back to top end -->
    <div class="mm-fullscreen-bg"></div>
    <!-- jquery -->
    <script src="{{ asset('frontend') }}/js/modernizr-2.8.3.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <!-- popper -->
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <!-- fontawesome -->
    <script src="{{ asset('frontend') }}/js/fontawesome.min.js"></script>
    <!-- owl carousal -->
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <!-- swiper -->
    <script src="{{ asset('frontend') }}/js/swiper.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- custom -->
    <script src="{{ asset('frontend') }}/js/custom.js"></script>

    <script>
        // Ajax Token Setup
        $(document).ready(function() {
            cartLoad();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        // Toastify Alert Function
        function toast(message) {
            Toastify({
                text: message,
                duration: 3000,
                newWindow: true,
                close: false,
                gravity: "bottom", // `botom` or `top`
                position: "right", // `right`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }

        // Cart load Function
        function cartLoad() {
            $.ajax({
                url: '{{ route('front.cart.load') }}',
                method: "GET",
                success: function(response) {
                    $(".bigcounter").html(response.totalcart);
                    $('.cart-item-loop').html(response.html);
                    $('.subtotal-price').html(response.subtotal);
                }
            });
        }


        // Remove cart Item
        $(document).on('click', '.remove-cart-item', function(e) {
            e.preventDefault();
            // Store product Id
            var product_id = $(this).data('id');
            // Data
            var data = {
                "product_id": product_id,
            };
            // Alert Fire
            Swal.fire({
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>Warning!</h4><p class="text-muted mx-4 mb-0">Do want to delete?</p></div></div>',
                showCancelButton: !0,
                confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                confirmButtonText: "Yes, Delete It!",
                cancelButtonClass: "btn btn-danger w-xs mb-1",
                buttonsStyling: !1,
                showCloseButton: false,
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    // Ajax
                    $.ajax({
                        url: '{{ route('front.cart.remove') }}',
                        type: 'DELETE',
                        data: data,
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            })
        });

        // Add To Cart
        $(document).ready(function() {
            cartLoad();
            $('.add-to-cart-btn').click(function(e) {
                e.preventDefault();
                // Find Product input Id
                var product_id = $(this).closest('.product_data').find('.product_id').val();
                // Find Quantity input
                var quantity = $(this).closest('.product_data').find('.qty-input').val();

                // Ajax
                $.ajax({
                    url: '{{ route('front.cart.store') }}',
                    method: "POST",
                    data: {
                        'quantity': quantity,
                        'product_id': product_id,
                    },
                    success: function(response) {
                        console.log(response);
                        toast(response.message);
                        cartLoad();
                    },
                });
            });
        });
    </script>

    @stack('js')
</body>

</html>
