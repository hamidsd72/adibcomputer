<!DOCTYPE html>
<html lang="en">
<head>
    <!--required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags" />
    <meta name="twitter:creator" content="@themetags" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="AutoHive - Car Rental HTML Template" />
    <meta name="twitter:description" content="Car Rental HTML Template, auto parts technology, car dealership & business Bootstrap 5 Html template. It is best and famous car rental company website template." />
    <meta name="twitter:image" content="#" />

    <!--facebook og-->
    <meta property="og:url" content="#" />
    <meta name="twitter:title" content="AutoHive - Car Rental HTML Template" />
    <meta property="og:description" content="Car Rental HTML Template, auto parts technology, car dealership & business Bootstrap 5 Html template. It is best and famous car rental company website template." />
    <meta property="og:image" content="#" />
    <meta property="og:image:secure_url" content="#" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />

    <!--meta-->
    <meta name="description" content="Car Rental HTML Template, auto parts technology, car dealership & business Bootstrap 5 Html template. It is best and famous car rental company website template." />
    <meta name="author" content="ThemeTags" />

    <!--favicon icon-->
    <link rel="icon" href="/../rent_html/assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>AutoHive - HTML Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="/../rent_html/assets/css/main.css" />
    <!-- endbuild -->

    <!--custom css-->
    <link rel="stylesheet" href="/../rent_html/assets/css/custom.css" />
    @yield ('styles')
</head>

<body>
    {{-- loading --}}
    <div class="ring-preloader w-100 h-100 position-fixed start-0 top-0">
        <div class="lds-dual-ring"></div>
    </div>

    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header area start-->
        <header class="header-style-one header-sticky">
            <div class="at_topbar d-none d-sm-block bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5 col-8">
                            <div class="tp-info">
                                <p class="mb-0">Welcome!... Proof of Quality Is On the Autohive</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-4">
                            <div class="tp-info-wrapper d-flex align-items-center justify-content-end">
                                <div class="d-none tp-info d-xl-inline-flex align-items-center">
                                    <span class="icon-wrapper me-2">
                                      <i class="flaticon-location"></i>
                                  </span>
                                    <p class="mb-0">Rock St 14, New york City, USA</p>
                                </div>
                                <div class="tp-info d-inline-flex align-items-center">
                                    <span class="icon-wrapper me-2">
                                      <i class="flaticon-phone-call"></i>
                                  </span>
                                    <p class="mb-0">+90 15 46 47 98 487</p>
                                </div>
                                <div class="d-none tp-info d-xl-inline-flex align-items-center">
                                    <span class="icon-wrapper me-2">
                                      <i class="flaticon-email"></i>
                                  </span>
                                    <p class="mb-0">autohive@support.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="at_header_nav">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-lg-3">
                            <div class="logo-wrapper">
                                <a href="{{ route('front.index2','index') }}"><img src="/../rent_html/assets/img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-9">
                            <div class="at_header_right d-flex align-items-center justify-content-end">
                                <nav class="at_nav_menu d-none d-lg-block">
                                    <ul>
                                        <li class="has-submenu"><a href="#">Home</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="{{ route('front.index2','index') }}">Car Dealership</a></li>
                                                <li><a href="{{ route('front.index2','car-dealership-2') }}">Car Dealership V2</a></li>
                                                <li><a href="{{ route('front.index2','index-2') }}">Rent Home</a></li>
                                                <li><a href="{{ route('front.index2','index-3') }}">Rent Home v2</a></li>
                                                <li><a href="{{ route('front.index2','index-4') }}">Auto parts Home </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">Listing</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="{{ route('front.index2','inventory-listing') }}">Inventory Listing</a></li>
                                                <li><a href="{{ route('front.index2','inventory-listing-2') }}">Inventory Listing v2</a></li>
                                                <li><a href="{{ route('front.index2','car-listing') }}">Car Listing</a></li>
                                                <li><a href="{{ route('front.index2','inventory-details') }}">Listing Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('front.index2','services') }}">Service</a></li>
                                        <li class="has-submenu"><a href="#">Blog</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="{{ route('front.index2','blog-list') }}">Blog List</a></li>
                                                <li><a href="{{ route('front.index2','blog-grid') }}">Blog Grid</a></li>
                                                <li><a href="{{ route('front.index2','blog-single') }}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">Pages</a>
                                            <div class="at_megamenu_style_1">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="megamenu_nav">
                                                            <li><a href="{{ route('front.index2','car-rental') }}">Car Rental</a></li>
                                                            <li><a href="{{ route('front.index2','dealers') }}">Dealers List</a></li>
                                                            <li><a href="{{ route('front.index2','dealer-single') }}">Dealer Single</a></li>
                                                            <li><a href="{{ route('front.index2','promotion') }}">Promotion</a></li>
                                                            <li><a href="{{ route('front.index2','contact') }}">Contact</a></li>
                                                            <li><a href="{{ route('front.index2','shop-grid') }}">Shop Grid</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="megamenu_nav">
                                                            <li><a href="{{ route('front.index2','product-details') }}">Product Details</a></li>
                                                            <li><a href="{{ route('front.index2','wishlist') }}">Wishlist</a></li>
                                                            <li><a href="{{ route('front.index2','cart') }}">cart</a></li>
                                                            <li><a href="{{ route('front.index2','checkout') }}">Checkout</a></li>
                                                            <li><a href="{{ route('front.index2','login') }}">Login</a></li>
                                                            <li><a href="{{ route('front.index2','signup') }}">Signup</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <a href="{{ route('front.index2','car-listing') }}" class="listing-btn text-white ms-4 d-none d-sm-block"><span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white me-2"><i class="fa-solid fa-plus"></i></span>Add Listing</a>
                                <button class="ofcanvus-toggle header-toggle-btn ms-4 d-none d-lg-block">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <button class="mobile-menu-toggle header-toggle-btn ms-4 d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header area end-->

        <!--mobile menu start-->
        <div class="mobile-menu position-fixed bg-white deep-shadow">
            <button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
            <a href="{{ route('front.index2','index') }}" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img src="/../rent_html/assets/img/logo.png" alt="logo" class="img-fluid"></a>
            <nav class="mobile-menu-wrapper mt-40">
                <ul>
                    <li class="has-submenu"><a href="#">Home</a>
                        <ul class="submenu-wrapper">
                            <li><a href="{{ route('front.index2','index') }}">Car Dealership</a></li>
                            <li><a href="{{ route('front.index2','car-dealership-2') }}">Car Dealership V2</a></li>
                            <li><a href="{{ route('front.index2','index-2') }}">Rent Home</a></li>
                            <li><a href="{{ route('front.index2','index-3') }}">Rent Home v2</a></li>
                            <li><a href="{{ route('front.index2','index-4') }}">Auto parts Home </a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#">Listing</a>
                        <ul class="submenu-wrapper">
                            <li><a href="{{ route('front.index2','inventory-listing') }}">Inventory Listing</a></li>
                            <li><a href="{{ route('front.index2','inventory-listing-2') }}">Inventory Listing v2</a></li>
                            <li><a href="{{ route('front.index2','car-listing') }}">Car Listing</a></li>
                            <li><a href="{{ route('front.index2','inventory-details') }}">Listing Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('front.index2','services') }}">Service</a></li>
                    <li class="has-submenu"><a href="#">Blog</a>
                        <ul class="submenu-wrapper">
                            <li><a href="{{ route('front.index2','blog-list') }}">Blog List</a></li>
                            <li><a href="{{ route('front.index2','blog-grid') }}">Blog Grid</a></li>
                            <li><a href="{{ route('front.index2','blog-single') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#">Pages</a>
                        <ul class="submenu-wrapper">
                            <li><a href="{{ route('front.index2','car-rental') }}">Car Rental</a></li>
                            <li><a href="{{ route('front.index2','dealers') }}">Dealers List</a></li>
                            <li><a href="{{ route('front.index2','dealer-single') }}">Dealer Single</a></li>
                            <li><a href="{{ route('front.index2','promotion') }}">Promotion</a></li>
                            <li><a href="{{ route('front.index2','contact') }}">Contact</a></li>
                            <li><a href="{{ route('front.index2','shop-grid') }}">Shop Grid</a></li>
                            <li><a href="{{ route('front.index2','product-details') }}">Product Details</a></li>
                            <li><a href="{{ route('front.index2','wishlist') }}">Wishlist</a></li>
                            <li><a href="{{ route('front.index2','cart') }}">cart</a></li>
                            <li><a href="{{ route('front.index2','checkout') }}">Checkout</a></li>
                            <li><a href="{{ route('front.index2','login') }}">Login</a></li>
                            <li><a href="{{ route('front.index2','signup') }}">Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="contact-info mt-60">
                <h4 class="mb-20">Contact Info</h4>
                <p>Chicago 12, Melborne City, USA</p>
                <p>+88 01682648101</p>
                <p>info@example.com</p>
                <div class="social-contact">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <!--mobile menu end-->
        
        @yield ('body')

        <!--footer section start-->
        <footer class="footer-section">
            <div class="footer-wrapper pt-120 position-relative z-1 overflow-hidden" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-lg-5">
                            <div class="footer-widget widget-basic">
                                <h3 class="widget-title-large mb-4 text-white">Have a Question? Feel Free to Ask..Feedback</h3>
                                <p class="mb-40">Compellingly expedite mission-critical methodologies and integrated readiness without quality intellectual capital.</p>
                                <div class="phone-box d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white"><i class="flaticon-phone-call"></i></span>
                                    <h4 class="text-white ms-3 mb-0">+978-9674-4455</h4>
                                </div>
                                <div class="sb-form mt-40">
                                    <h5 class="text-white mb-4">Get latest updates & offers</h5>
                                    <form class="footer-sb-form position-relative">
                                        <input type="email" placeholder="Enter your email..." class="bg-white w-100">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="ms-lg-5 ms-xl-0 mt-5 mt-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('front.index2','index') }}" class="footer-logo d-inline-block"><img src="/../rent_html/assets/img/logo.png" alt="logo"></a>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <div class="footer-social d-inline-block text-start">
                                                <h6 class="text-white">Follow us on</h6>
                                                <ul class="footer-social-list">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-30">
                                    <div class="col-sm-4">
                                        <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                            <h6 class="widget-title text-white mb-3">About Company</h6>
                                            <ul class="footer-nav">
                                                <li><a href="#">Our Company</a></li>
                                                <li><a href="#">Shop Toyota</a></li>
                                                <li><a href="#">Autohive USA</a></li>
                                                <li><a href="#">Autohive Worldwide</a></li>
                                                <li><a href="#">Autohive Racing</a></li>
                                                <li><a href="#">TRD USA</a></li>
                                                <li><a href="#">Autohive Plant Tours</a></li>
                                                <li><a href="#">Virtual Auto Show</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                            <h6 class="widget-title text-white mb-3">Vehicles Type</h6>
                                            <ul class="footer-nav">
                                                <li><a href="#">All Autohive Vehicles</a></li>
                                                <li><a href="#">SUVs</a></li>
                                                <li><a href="#">Trucks</a></li>
                                                <li><a href="#">Cars</a></li>
                                                <li><a href="#">Crossovers</a></li>
                                                <li><a href="#">Electrified Vehicles</a></li>
                                                <li><a href="#">Hybrids</a></li>
                                                <li><a href="#">Hybrid SUVs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="footer-widget footer-nav-widget mb-5 mb-sm-0">
                                            <h6 class="widget-title text-white mb-3">Quick links</h6>
                                            <ul class="footer-nav">
                                                <li><a href="#">My account</a></li>
                                                <li><a href="#">Champaigns</a></li>
                                                <li><a href="#">Autohive Dealers</a></li>
                                                <li><a href="#">Deals and Incentives</a></li>
                                                <li><a href="#">Financial Services</a></li>
                                                <li><a href="#">Autohive Insurance</a></li>
                                                <li><a href="#">Autohive Care</a></li>
                                                <li><a href="#">FAQs & support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; All rights reserved. Made by <a href="{{ route('front.index2','index') }}">ThemeTags</a></p>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="copyright-links text-start text-sm-end mt-1 mt-sm-0">
                                    <a href="#">Terms of use</a>
                                    <a href="#">Privacy policy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer section end-->

    </div>
    <!-- main content wrapper ends -->

    <!-- Modal -->
    <div class="modal fade" id="at_product_view">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content product_modal shadow">
                <div class="close-btn-wrapper text-end">
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="at_product_view">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="product_view_slider">
                                <div class="product_feature_img_slider swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="product_thumb_slider swiper mt-3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product_view_right mt-4 mt-md-0">
                                <ul class="product_review d-flex align-items-center">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li class="review-total ms-2 text-primary fw-semibold"><a href="#">( 95 Reviews )</a></li>
                                </ul>
                                <h5 class="product_title mt-3">Aluminium Wheel AR-19 <br> Tire Parts</h5>
                                <p>Monotonectally simplify frictionless communities via clicks-and-mortar Interactively disseminate relationships. </p>
                                <ul class="key_features">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                                <div class="product_color_select mt-3">
                                    <span class="title text-secondary fw-semibold">Color</span>
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <input type="radio" name="color">
                                            <span class="color_circle bg-white border border-1"></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="color">
                                            <span class="color_circle black-color bg-secondary"></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="color">
                                            <span class="color_circle red-color bg-primary"></span>
                                        </li>
                                        <li>
                                            <input type="radio" name="color">
                                            <span class="color_circle bg-warning"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product_price mt-4">
                                    <del class="fw-semibold">$59.00</del>
                                    <span class="text-primary fw-semibold ms-2">$29.00</span>
                                </div>
                                <div class="add_to_cart_product d-flex align-items-center mb-4 mt-3">
                                    <form class="d-inline-flex align-items-center">
                                        <button type="button" class="decrement btn-sm">-</button>
                                        <input type="text" value="01">
                                        <button type="button" class="increment btn-sm">+</button>
                                    </form>
                                    <a href="#" class="btn btn-secondary btn-sm"><span class="me-1"><i class="fa-solid fa-cart-plus"></i></span>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!--scrolltop button-->
    <button class="theme-scrolltop-btn"><i class="fa-regular fa-hand-pointer"></i></button>
    <!--scrolltop button end-->

    <!--build:js-->
    <script src="/../rent_html/assets/js/vendors/jquery.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/jquery-ui.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/appear.js"></script>
    <script src="/../rent_html/assets/js/vendors/popper.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/bootstrap.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/easing.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/swiper.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/massonry.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/bootstrap-slider.js"></script>
    <script src="/../rent_html/assets/js/vendors/magnific-popup.js"></script>
    <script src="/../rent_html/assets/js/vendors/waypoints.js"></script>
    <script src="/../rent_html/assets/js/vendors/counterup.js"></script>
    <script src="/../rent_html/assets/js/vendors/isotop.pkgd.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/moment.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/date-picker.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/progressbar.js"></script>
    <script src="/../rent_html/assets/js/vendors/slick.js"></script>
    <script src="/../rent_html/assets/js/vendors/countdown.min.js"></script>
    <script src="/../rent_html/assets/js/vendors/custom-scrollbar.js"></script>
    <script src="/../rent_html/assets/js/vendors/price-range.js"></script>
    <script src="/../rent_html/assets/js/app.js"></script>
    <!--endbuild-->
        <!-- sweetalert2 js-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if(isset($req))
        $("#form_req").validate({
            submitHandler: function (form) {
                $('#global-loader-form').css('display', 'block');
                form.submit();
            }
        });
        @endif
        @if(session()->has('err_message'))
        $(document).ready(function () {
            Swal.fire({
                title: "ناموفق",
                text: "{{ session('err_message') }}",
                icon: "warning",
                timer: 6000,
                timerProgressBar: true,
            })
        });
        @endif
        @if(session()->has('flash_message'))
        $(document).ready(function () {
            Swal.fire({
                title: "موفق",
                text: "{{ session('flash_message') }}",
                icon: "success",
                timer: 6000,
                timerProgressBar: true,
            })
        })
        ;@endif
        @if (count($errors) > 0)
        $(document).ready(function () {
            Swal.fire({
                title: "ناموفق",
                icon: "warning",
                html:
                        @foreach ($errors->all() as $key => $error)
                            '<p class="text-right mt-2 ml-5" dir="rtl"> {{$key+1}} : ' +
                    '{{ $error }}' +
                    '</p>' +
                        @endforeach
                            '<p class="text-right mt-2 ml-5" dir="rtl">' +
                    '</p>',
                timer: @if(count($errors)>3)parseInt('{{count($errors)}}') * 1500 @else 6000 @endif,
                timerProgressBar: true,
            })
        });
        @endif
    </script>
    @yield ('scripts')
</body>
</html>
