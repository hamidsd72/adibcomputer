@extends('layouts.front')
@section('styles') @endsection
@section('body')
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
                                <a href="index.html"><img src="../rent_html/assets/img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-9">
                            <div class="at_header_right d-flex align-items-center justify-content-end">
                                <nav class="at_nav_menu d-none d-lg-block">
                                    <ul>
                                        <li class="has-submenu"><a href="#">Home</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="index.html">Car Dealership</a></li>
                                                <li><a href="car-dealership-2.html">Car Dealership V2</a></li>
                                                <li><a href="index-2.html">Rent Home</a></li>
                                                <li><a href="index-3.html">Rent Home v2</a></li>
                                                <li><a href="index-4.html">Auto parts Home </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">Listing</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="inventory-listing.html">Inventory Listing</a></li>
                                                <li><a href="inventory-listing-2.html">Inventory Listing v2</a></li>
                                                <li><a href="car-listing.html">Car Listing</a></li>
                                                <li><a href="inventory-details.html">Listing Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Service</a></li>
                                        <li class="has-submenu"><a href="#">Blog</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-single.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">Pages</a>
                                            <div class="at_megamenu_style_1">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="megamenu_nav">
                                                            <li><a href="car-rental.html">Car Rental</a></li>
                                                            <li><a href="dealers.html">Dealers List</a></li>
                                                            <li><a href="dealer-single.html">Dealer Single</a></li>
                                                            <li><a href="promotion.html">Promotion</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="megamenu_nav">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="signup.html">Signup</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <a href="car-listing.html" class="listing-btn text-white ms-4 d-none d-sm-block"><span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white me-2"><i class="fa-solid fa-plus"></i></span>Add Listing</a>
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
            <a href="index.html" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img src="../rent_html/assets/img/logo.png" alt="logo" class="img-fluid"></a>
            <nav class="mobile-menu-wrapper mt-40">
                <ul>
                    <li class="has-submenu"><a href="#">Home</a>
                        <ul class="submenu-wrapper">
                            <li><a href="index.html">Car Dealership</a></li>
                            <li><a href="car-dealership-2.html">Car Dealership V2</a></li>
                            <li><a href="index-2.html">Rent Home</a></li>
                            <li><a href="index-3.html">Rent Home v2</a></li>
                            <li><a href="index-4.html">Auto parts Home </a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#">Listing</a>
                        <ul class="submenu-wrapper">
                            <li><a href="inventory-listing.html">Inventory Listing</a></li>
                            <li><a href="inventory-listing-2.html">Inventory Listing v2</a></li>
                            <li><a href="car-listing.html">Car Listing</a></li>
                            <li><a href="inventory-details.html">Listing Details</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Service</a></li>
                    <li class="has-submenu"><a href="#">Blog</a>
                        <ul class="submenu-wrapper">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#">Pages</a>
                        <ul class="submenu-wrapper">
                            <li><a href="car-rental.html">Car Rental</a></li>
                            <li><a href="dealers.html">Dealers List</a></li>
                            <li><a href="dealer-single.html">Dealer Single</a></li>
                            <li><a href="promotion.html">Promotion</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="cart.html">cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
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

        <!--ofcanvus menu start-->
        <div class="at_offcanvus_menu position-fixed">
            <button class="at-offcanvus-close"><i class="fa-solid fa-xmark"></i></button>
            <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="../rent_html/assets/img/logo-black.png" alt="logo"></a>
            <div class="offcanvus-content">
                <h4 class="mb-4">About Us</h4>
                <p>Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings.</p>
                <p>Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the system expound.</p>
                <a href="#" class="btn btn-primary mt-4">About Us</a>
            </div>
            <div class="offcanvus-contact">
                <h4 class="mb-4 mt-5">Contact Info</h4>
                <ul class="at_canvus_address">
                    <li>Chicago 12, Melborne City, USA</li>
                    <li>+8801682648101</li>
                    <li>info@example.com</li>
                </ul>
            </div>
            <div class="at_canvus_social mt-4">
                <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <!--ofcanvus menu end-->

        <!--hero section start-->
        <section class="dealership-hero position-relative overflow-hidden">
            <div class="swiper at-hero-slider-wrapper" data-speed="900">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dl-hero-single" data-background="../rent_html/assets/img/shapes/texture-bg.png">
                            <div class="container">
                                <div class="at_hero_slider">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="at-hero-title">
                                                <span class="at-subtitle text-primary position-relative fw-bold">Export Auto Service</span>
                                                <h1 class="text-white mb-4 mt-3 display-4">Marcediz Benz - 2.0</h1>
                                                <p class="mb-30">Distinctively optimize web-enabled materials with functional markets. intellectual capital with applications. </p>
                                                <ul class="car-info mt-3 mb-30 fs-md fw-500">
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Leather Seats</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Sunroof / moonroof</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Heated Seats</li>
                                                </ul>
                                                <a href="inventory-details.html" class="at-explore-btn"><span class="me-2">
                                                  <svg width="49" height="28" viewBox="0 0 49 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M42.5 9L47.715 14.1189M47.715 14.1189L42.5 19.3339M47.715 14.1189H19.5" stroke="#FC0012" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <rect x="1" y="1" width="32" height="26" rx="13" stroke="#FC0012" stroke-width="2"/>
                                                  </svg>
                                                  </span>Explore More
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="at-hero-banner position-relative mt-4 mt-sm-0">
                                                <img src="../rent_html/assets/img/home1/hero-car-1.png" alt="car" class="at_hero_car">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dl-hero-single" data-background="../rent_html/assets/img/shapes/texture-bg.png">
                            <div class="container">
                                <div class="at_hero_slider">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="at-hero-title">
                                                <span class="at-subtitle text-primary position-relative fw-bold">Export Auto Service</span>
                                                <h1 class="text-white mb-4 mt-3 display-4">Lamborghini Aventador</h1>
                                                <p class="mb-30">Distinctively optimize web-enabled materials with functional markets. intellectual capital with applications. </p>
                                                <ul class="car-info mt-3 mb-30 fs-md fw-500">
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Leather Seats</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Sunroof / moonroof</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Heated Seats</li>
                                                </ul>
                                                <a href="inventory-details.html" class="at-explore-btn"><span class="me-2">
                                                  <svg width="49" height="28" viewBox="0 0 49 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M42.5 9L47.715 14.1189M47.715 14.1189L42.5 19.3339M47.715 14.1189H19.5" stroke="#FC0012" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <rect x="1" y="1" width="32" height="26" rx="13" stroke="#FC0012" stroke-width="2"/>
                                                  </svg>
                                                  </span>Explore More
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="at-hero-banner position-relative mt-4 mt-sm-0">
                                                <img src="../rent_html/assets/img/home1/hero-car-2.png" alt="car" class="at_hero_car">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dl-hero-single" data-background="../rent_html/assets/img/shapes/texture-bg.png">
                            <div class="container">
                                <div class="at_hero_slider">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="at-hero-title">
                                                <span class="at-subtitle text-primary position-relative fw-bold">Export Auto Service</span>
                                                <h1 class="text-white mb-4 mt-3 display-4">Lamborghini Centenario</h1>
                                                <p class="mb-30">Distinctively optimize web-enabled materials with functional markets. intellectual capital with applications. </p>
                                                <ul class="car-info mt-3 mb-30 fs-md fw-500">
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Leather Seats</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Sunroof / moonroof</li>
                                                    <li class="pt-1"><span class="me-2"><i class="fa-regular fa-circle-check"></i></span>Heated Seats</li>
                                                </ul>
                                                <a href="inventory-details.html" class="at-explore-btn"><span class="me-2">
                                                  <svg width="49" height="28" viewBox="0 0 49 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M42.5 9L47.715 14.1189M47.715 14.1189L42.5 19.3339M47.715 14.1189H19.5" stroke="#FC0012" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <rect x="1" y="1" width="32" height="26" rx="13" stroke="#FC0012" stroke-width="2"/>
                                                  </svg>
                                                  </span>Explore More
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="at-hero-banner position-relative mt-4 mt-sm-0">
                                                <img src="../rent_html/assets/img/home1/hero-car-3.png" alt="car" class="at_hero_car">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a href="#brands" class="position-absolute btn-scroll-down d-none d-xl-block"><span class="me-2">
              <svg width="49" height="28" viewBox="0 0 49 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M42.5 9L47.715 14.1189M47.715 14.1189L42.5 19.3339M47.715 14.1189H19.5" stroke="#FC0012" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <rect x="1" y="1" width="32" height="26" rx="13" stroke="#FC0012" stroke-width="2"/>
              </svg>
              </span>Scroll Down
            </a>
            <div class="at-header-social d-none d-sm-flex align-items-center position-absolute">
                <span class="title">Follow on</span>
                <ul class="social-list ms-3">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </section>
        <!--hero section end-->

        <!--search box -->
        <div class="at-search-box overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="at-search-box-filter bg-white">
                            <ul class="nav nav-tabs border-0 justify-content-center justify-content-sm-start">
                                <li><a href="#all_status" data-bs-toggle="tab" class="active">All Status</a></li>
                                <li><a href="#new_car" data-bs-toggle="tab">New Car</a></li>
                                <li><a href="#used_car" data-bs-toggle="tab">Used Car</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all_status">
                                    <form action="#" class="at-search-filter d-flex align-items-center">
                                        <div class="input-field">
                                            <label>Brand Name</label>
                                            <select class="form-select">
                                                <option>Marcediz Benz</option>
                                                <option>Volkswagen</option>
                                                <option>Hyundai</option>
                                                <option>Ferrari</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Select Type</label>
                                            <select class="form-select">
                                                <option>SUV</option>
                                                <option>Sedan</option>
                                                <option>Wagon</option>
                                                <option>Coup</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Select Models</label>
                                            <select class="form-select">
                                                <option>Brooklands</option>
                                                <option>Mazda MX Miata</option>
                                                <option>Ferrari F12 TRS</option>
                                                <option>Mercedes-Benz E 400</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Transmission</label>
                                            <select class="form-select">
                                                <option>Semi Automatic</option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="submit-btn align-self-end">
                                            <button class="btn btn-secondary btn-md" type="submit">Search Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="new_car">
                                    <form action="#" class="at-search-filter d-flex align-items-center">
                                        <div class="input-field">
                                            <label>Brand Name</label>
                                            <select class="form-select">
                                                <option>Marcediz Benz</option>
                                                <option>Volkswagen</option>
                                                <option>Hyundai</option>
                                                <option>Ferrari</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Select Type</label>
                                            <select class="form-select">
                                                <option>SUV</option>
                                                <option>Sedan</option>
                                                <option>Wagon</option>
                                                <option>Coup</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Select Models</label>
                                            <select class="form-select">
                                                <option>Brooklands</option>
                                                <option>Mazda MX Miata</option>
                                                <option>Ferrari F12 TRS</option>
                                                <option>Mercedes-Benz E 400</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Transmission</label>
                                            <select class="form-select">
                                                <option>Semi Automatic</option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="submit-btn align-self-end">
                                            <button class="btn btn-secondary btn-md" type="submit">Search Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="used_car">
                                    <form action="#" class="at-search-filter d-flex align-items-center">
                                        <div class="input-field">
                                            <label>Brand Name</label>
                                            <select class="form-select">
                                                <option>Marcediz Benz</option>
                                                <option>Volkswagen</option>
                                                <option>Hyundai</option>
                                                <option>Ferrari</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Select Type</label>
                                            <select class="form-select">
                                                <option>SUV</option>
                                                <option>Sedan</option>
                                                <option>Wagon</option>
                                                <option>Coup</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Select Models</label>
                                            <select class="form-select">
                                                <option>Brooklands</option>
                                                <option>Mazda MX Miata</option>
                                                <option>Ferrari F12 TRS</option>
                                                <option>Mercedes-Benz E 400</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label>Transmission</label>
                                            <select class="form-select">
                                                <option>Semi Automatic</option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="submit-btn align-self-end">
                                            <button class="btn btn-secondary btn-md" type="submit">Search Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--search box end-->

        <!--brands section start-->
        <section class="brands-section pt-60 pb-120" id="brands">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="at-section-title text-center">
                            <span class="at-subtitle lead text-primary position-relative">Browse Top Car</span>
                            <h2 class="mt-1 mb-0 h1">Brands With Body Types</h2>
                        </div>
                    </div>
                </div>
                <div class="brands-filter mt-5">
                    <ul class="nav nav-tabs border-0 justify-content-center flex-wrap">
                        <li><a href="#honda" class="active" data-bs-toggle="tab">
                                <img src="../rent_html/assets/img/brands/honda.svg" alt="honda" class="icon-red">
                                <img src="../rent_html/assets/img/brands/honda-white.svg" alt="honda" class="icon-white">
                                <span class="ms-4">Honda</span>
                            </a></li>
                        <li><a href="#toyota" data-bs-toggle="tab">
                                <img src="../rent_html/assets/img/brands/toyota.svg" alt="toyota" class="icon-red">
                                <img src="../rent_html/assets/img/brands/toyota-white.svg" alt="toyota" class="icon-white">
                                <span class="ms-4">Toyota</span>
                            </a></li>
                        <li><a href="#mercedes" data-bs-toggle="tab">
                                <img src="../rent_html/assets/img/brands/mercedes.svg" alt="toyota" class="icon-red">
                                <img src="../rent_html/assets/img/brands/mercedes-white.svg" alt="toyota" class="icon-white">
                                <span class="ms-4">Mercedes Benz</span>
                            </a></li>
                        <li><a href="#volkswagen" data-bs-toggle="tab">
                                <img src="../rent_html/assets/img/brands/volkswagen.svg" alt="toyota" class="icon-red">
                                <img src="../rent_html/assets/img/brands/volkswagen-white.svg" alt="toyota" class="icon-white">
                                <span class="ms-4">Volkswagen</span>
                            </a></li>
                        <li><a href="#hyundai" data-bs-toggle="tab">
                                <img src="../rent_html/assets/img/brands/hyundai.svg" alt="toyota" class="icon-red">
                                <img src="../rent_html/assets/img/brands/hyundai-white.svg" alt="toyota" class="icon-white">
                                <span class="ms-4">Hyundai</span>
                            </a></li>
                        <li><a href="#ferrari" data-bs-toggle="tab">
                                <img src="../rent_html/assets/img/brands/ferrari.svg" alt="toyota" class="icon-red">
                                <img src="../rent_html/assets/img/brands/ferrari-white.svg" alt="toyota" class="icon-white">
                                <span class="ms-4">Ferrari</span>
                            </a></li>
                    </ul>
                    <div class="tab-content mt-5">
                        <div class="tab-pane fade active show" id="honda">
                            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Crossover</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Suv</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sedan</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Wagon</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Coup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Convertible</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Compact</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Pickup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Family MPV</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="toyota">
                            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Convertible</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Compact</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Pickup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Family MPV</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Crossover</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Suv</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sedan</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Wagon</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Coup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mercedes">
                            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Wagon</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Coup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Convertible</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Compact</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Pickup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Family MPV</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Crossover</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Suv</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sedan</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="volkswagen">
                            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Crossover</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Suv</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Convertible</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Compact</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sedan</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Wagon</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Coup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Pickup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Family MPV</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hyundai">
                            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Wagon</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Coup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Convertible</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Crossover</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Suv</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sedan</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Pickup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Family MPV</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Compact</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ferrari">
                            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap">
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Crossover</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Suv</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sedan</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Wagon</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Coup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Convertible</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Compact</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Pickup</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                                <div class="ct-col">
                                    <div class="brand-card text-center bg-white position-relative rounded">
                                        <img src="../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                                        <img src="../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                                        <h5 class="mt-3 mb-0">Family MPV</h5>
                                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brands-explore-btn text-center mt-5">
                    <a href="inventory-listing.html" class="link-btn fw-bold d-inline-flex align-items-center">
                        <span class="me-2"><img src="../rent_html/assets/img/icons/arrow-black.png" alt="arrow"></span>
                        View All
                        <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <!--brands section end-->

        <!--add center start-->
        <section class="add-center pt-120" data-background="../rent_html/assets/img/shapes/banner-bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="at-section-title text-center">
                            <span class="at-subtitle position-relative lead text-primary shape-primary">Latest Offer</span>
                            <h2 class="h1 text-white mt-2 mb-30">Looking to Sale your Cars? Join today Best Offers</h2>
                            <a href="car-listing.html" class="btn btn-primary">Sell your Car Today</a>
                        </div>
                    </div>
                </div>
                <div class="banner-slider swiper pb-80 mt-5">
                    <div class="swiper-wrapper">
                        <div class="single-banner swiper-slide">
                            <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/add-banner-1.jpg" alt="banner" class="img-fluid"></a>
                        </div>
                        <div class="single-banner swiper-slide">
                            <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/add-banner-2.jpg" alt="banner" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--add center end-->

        <!--latest collection start-->
        <section class="latest-collection pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="at-section-title text-center text-lg-start">
                            <span class="at-subtitle position-relative lead text-primary">Latest Submission</span>
                            <h2 class="h1 mt-2 mb-0">Find the Best Deals For You</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="collection-filter-controls d-flex align-items-center justify-content-center justify-content-lg-end flex-wrap mt-5 mt-lg-0">
                            <button class="at-filter-btn active" data-filter="*">Latest Car</button>
                            <button class="at-filter-btn" data-filter=".featured">Featured</button>
                            <button class="at-filter-btn" data-filter=".popular">Popular</button>
                        </div>
                    </div>
                </div>
                <div class="filter-items-wrapper mt-5">
                    <div class="row g-4 justify-content-center filter-grid">
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 latest">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2017</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-1.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Ford Explorer XLT</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 popular latest">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2016</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-2.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Mercedes-Benz</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 featured popular">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2018</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-3.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Mazda MX Miata</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 latest featured popular">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2012</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-4.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Camz Ferrari Portofino M</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 featured">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2013</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-5.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Mercedes-Benz E 400</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 popular latest">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2016</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-6.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>BMW 640 XI Gran Turismo</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 featured latest">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2019</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-7.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Ferrari 458 MM Speciale</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 popular featured">
                            <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                <span class="date position-absolute">2012</span>
                                <div class="feature-thumb position-relative overflow-hidden">
                                    <a href="inventory-details.html"><img src="../rent_html/assets/img/home1/car-8.jpg" alt="car" class="img-fluid"></a>
                                </div>
                                <div class="filter-card-content">
                                    <div class="price-btn text-end position-relative">
                                        <span class="small-btn-meta">$174,900</span>
                                    </div>
                                    <a href="inventory-details.html" class="mt-4 d-block">
                                        <h5>Ferrari F12 TRS</h5>
                                    </a>
                                    <span class="meta-content"><strong>Listed by:</strong> <a href="#">Car House</a></span>
                                    <hr class="spacer mt-3 mb-3">
                                    <div class="card-feature-box d-flex align-items-center mb-4">
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                            120cc
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-steering-wheel"></i></span>
                                            Manual
                                        </div>
                                        <div class="icon-box d-flex align-items-center">
                                            <span class="me-2"><i class="flaticon-petrol"></i></span>
                                            Petrol
                                        </div>
                                    </div>
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="inventory-listing.html" class="at-explore-btn color-secondary"><span class="me-2">
                      <svg width="39" height="26" viewBox="0 0 39 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M32.7143 7.85706L37.5142 12.9999M37.5142 12.9999L32.7143 18.1428M37.5142 12.9999H18.1428" stroke="#FC0012" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                          <circle cx="13" cy="13" r="12" stroke="#FC0012" stroke-width="1.71429"/>
                      </svg>
                      </span>View More
                    </a>
                </div>
            </div>
        </section>
        <!--latest collection end-->

        <!--about section start-->
        <section class="about-section pt-120 pb-220 bg-primary-light position-relative z-1 overflow-hidden" data-background="../rent_html/assets/img/shapes/about-bg.jpg">
            <img src="../rent_html/assets/img/shapes/tire-primary-light.png" alt="tire" class="tire-primary-light position-absolute end-0 top-0 z--1">
            <span class="small-circle-shape position-absolute z--1"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-left position-relative z-1">
                            <span class="circle-large position-absolute z--1"></span>
                            <div class="at-section-title mb-20">
                                <span class="at-subtitle position-relative lead text-primary">Why Choose Us</span>
                                <h2 class="h1 mt-2 mb-4">Don't Waste Your <br> Valuable Time or Money</h2>
                                <p>Collaboratively leverage existing client-centric schemas integrated processes. Inter actively engineer global sources after team driven niche markets. Rapidiously processes with resource maximizing architectures.</p>
                            </div>
                            <img src="../rent_html/assets/img/home1/car-red.png" alt="car" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-right mt-5 mt-lg-0">
                            <div class="about-icon-box bg-white shadow rounded">
                                <div class="ab-icon-box-top d-flex align-items-center mb-3">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-shield"></i></span>
                                    <h5 class="mb-0 ms-3">Expert Certified Mechanics</h5>
                                </div>
                                <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless. Rather than synergistic models.</p>
                            </div>
                            <div class="about-icon-box bg-white shadow rounded mt-20 ms-md-5">
                                <div class="ab-icon-box-top d-flex align-items-center mb-3">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-shield"></i></span>
                                    <h5 class="mb-0 ms-3">Genuine Spares Parts</h5>
                                </div>
                                <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless. Rather than synergistic models.</p>
                            </div>
                            <div class="about-icon-box bg-white shadow rounded mt-20">
                                <div class="ab-icon-box-top d-flex align-items-center mb-3">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-price-tag"></i></span>
                                    <h5 class="mb-0 ms-3">Get Reasonable Price</h5>
                                </div>
                                <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless. Rather than synergistic models.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->

        <!--feedback section start-->
        <section class="feedback-section position-relative" data-background="../rent_html/assets/img/home1/video-bg.jpg">
            <div class="countdown-area">
                <div class="main-countdown-wrapper d-inline-flex align-items-center bg-white">
                    <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i class="flaticon-heart"></i></span>
                        <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                            <h3 class="mb-1"><span class="counter">45</span><span>k+</span></h3>
                            <span class="subtitle">Happy Customer</span>
                        </div>
                    </div>
                    <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i class="flaticon-car-repair"></i></span>
                        <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                            <h3 class="mb-1"><span class="counter">500</span><span>+</span></h3>
                            <span class="subtitle">Cars in Garage</span>
                        </div>
                    </div>
                    <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i class="flaticon-speedometer-1"></i></span>
                        <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                            <h3 class="mb-1"><span class="counter">45</span><span>k+</span></h3>
                            <span class="subtitle">Total Kilometer</span>
                        </div>
                    </div>
                    <div class="countdown-box d-xl-flex text-center text-xl-start align-items-center">
                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary"><i class="flaticon-drive"></i></span>
                        <div class="countdown-box-content ms-xl-3 mt-3 mt-xl-0">
                            <h3 class="mb-1"><span class="counter">50</span><span>+</span></h3>
                            <span class="subtitle">Car Center Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="video-content-wrapper">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="quote-icon">
                                <img src="../rent_html/assets/img/icons/quote-icon.svg" alt="quote" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="video-content text-center">
                                <a href="https://www.youtube.com/watch?v=6WZOxnYi4Cs" class="video-popup-btn bg-primary  text-white"><i class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feedback-slider-area mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feedback-slider position-relative">
                                <div class="swiper at_feedback_slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide feedback-single bg-white position-relative rounded">
                                            <div class="rating-box position-absolute rounded-1">
                                                <span class="me-1"><i class="fa-solid fa-star"></i></span>4.5
                                            </div>
                                            <h4 class="mb-3">Amazing Support!</h4>
                                            <p class="mb-4">Authoritatively grow accurate products rather than collaborative conterpocras tinate enterprise strategic theme areas before functionalized in Phosfluoresc based technology whereas low-risk high-yield vortals. whereas effective functionalities. Holisticly pursue cooperative.</p>
                                            <div class="author-info d-flex align-items-center">
                                                <img src="../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0 border border-2">
                                                <div class="author-info-content ms-3">
                                                    <h6 class="mb-1 text-secondary">Chris Hoang Siama</h6>
                                                    <span>Managing Director</span>
                                                </div>
                                            </div>
                                            <span class="quote-icon position-absolute"><img src="../rent_html/assets/img/icons/quote-icon-sm.svg" alt="quote icon"></span>
                                        </div>
                                        <div class="swiper-slide feedback-single bg-white position-relative rounded">
                                            <div class="rating-box position-absolute rounded-1">
                                                <span class="me-1"><i class="fa-solid fa-star"></i></span>4.5
                                            </div>
                                            <h4 class="mb-3">Amazing Support!</h4>
                                            <p class="mb-4">Authoritatively grow accurate products rather than collaborative conterpocras tinate enterprise strategic theme areas before functionalized in Phosfluoresc based technology whereas low-risk high-yield vortals. whereas effective functionalities. Holisticly pursue cooperative.</p>
                                            <div class="author-info d-flex align-items-center">
                                                <img src="../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0 border border-2">
                                                <div class="author-info-content ms-3">
                                                    <h6 class="mb-1 text-secondary">Chris Hoang Siama</h6>
                                                    <span>Managing Director</span>
                                                </div>
                                            </div>
                                            <span class="quote-icon position-absolute"><img src="../rent_html/assets/img/icons/quote-icon-sm.svg" alt="quote icon"></span>
                                        </div>
                                    </div>
                                    <div class="slide-arrow-btn position-absolute slide-btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                                    <div class="slide-arrow-btn position-absolute slide-btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feedback section end-->

        <!--faq & app section start-->
        <section class="merge-section position-relative z-1 overflow-hidden">
            <img src="../rent_html/assets/img/shapes/net-shape.png" alt="net shape" class="position-absolute end-0 top-0 z--1">
            <img src="../rent_html/assets/img/shapes/net-left.png" alt="net shape" class="position-absolute start-0 bottom-0 z--1">
            <div class="faq-section pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="at-section-title text-center">
                                <span class="at-subtitle position-relative text-primary lead">FAQs</span>
                                <h2 class="h1 mb-0 mt-2">Frequently Ask Question</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="faq-tabs mt-5 brands-filter">
                                <ul class="nav nav-tabs border-0 justify-content-center">
                                    <li><a href="#general" data-bs-toggle="tab" class="active"><span class="me-2"><i class="fa-solid fa-users"></i></span>General Questions</a></li>
                                    <li><a href="#features" data-bs-toggle="tab"><span class="me-2"><i class="fa-solid fa-car-side"></i></span>Car Features</a></li>
                                    <li><a href="#technical" data-bs-toggle="tab"><span class="me-2"><i class="fa-solid fa-screwdriver-wrench"></i></span>Technical Support</a></li>
                                </ul>
                                <div class="tab-content mt-60">
                                    <div class="tab-pane fade show active" id="general">
                                        <div class="row g-4">
                                            <div class="col-xl-6">
                                                <div class="accordion theme-accordion" id="accordion_1">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#ac_1" class="accordion-button" data-bs-toggle="collapse">01 How long does it take to inspect your car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse show" id="ac_1" data-bs-parent="#accordion_1">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#ac_2" class="accordion-button collapsed" data-bs-toggle="collapse">02 Will dealers let you take car mechanic?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="ac_2" data-bs-parent="#accordion_1">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#ac_3" class="accordion-button collapsed" data-bs-toggle="collapse">03 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="ac_3" data-bs-parent="#accordion_1">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#ac_4" class="accordion-button collapsed" data-bs-toggle="collapse">04 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="ac_4" data-bs-parent="#accordion_1">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="accordion theme-accordion" id="accordion_2">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#acc_1" class="accordion-button" data-bs-toggle="collapse">01 How long does it take to inspect your car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse show" id="acc_1" data-bs-parent="#accordion_2">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#acc_2" class="accordion-button collapsed" data-bs-toggle="collapse">02 Will dealers let you take car mechanic?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="acc_2" data-bs-parent="#accordion_2">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#acc_3" class="accordion-button collapsed" data-bs-toggle="collapse">03 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="acc_3" data-bs-parent="#accordion_2">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#acc_4" class="accordion-button collapsed" data-bs-toggle="collapse">04 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="acc_4" data-bs-parent="#accordion_2">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="features">
                                        <div class="row g-4">
                                            <div class="col-xl-6">
                                                <div class="accordion theme-accordion" id="accordion_3">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#accc_1" class="accordion-button" data-bs-toggle="collapse">01 How long does it take to inspect your car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse show" id="accc_1" data-bs-parent="#accordion_3">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#accc_2" class="accordion-button collapsed" data-bs-toggle="collapse">02 Will dealers let you take car mechanic?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="accc_2" data-bs-parent="#accordion_3">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#accc_3" class="accordion-button collapsed" data-bs-toggle="collapse">03 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="accc_3" data-bs-parent="#accordion_3">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#accc_4" class="accordion-button collapsed" data-bs-toggle="collapse">04 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="accc_4" data-bs-parent="#accordion_3">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="accordion theme-accordion" id="accordion_4">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a4_1" class="accordion-button" data-bs-toggle="collapse">01 How long does it take to inspect your car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse show" id="a4_1" data-bs-parent="#accordion_4">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a4_2" class="accordion-button collapsed" data-bs-toggle="collapse">02 Will dealers let you take car mechanic?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a4_2" data-bs-parent="#accordion_4">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a4_3" class="accordion-button collapsed" data-bs-toggle="collapse">03 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a4_3" data-bs-parent="#accordion_4">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a4_4" class="accordion-button collapsed" data-bs-toggle="collapse">04 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a4_4" data-bs-parent="#accordion_4">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="technical">
                                        <div class="row g-4">
                                            <div class="col-xl-6">
                                                <div class="accordion theme-accordion" id="accordion_5">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a5_1" class="accordion-button" data-bs-toggle="collapse">01 How long does it take to inspect your car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse show" id="a5_1" data-bs-parent="#accordion_5">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a5_2" class="accordion-button collapsed" data-bs-toggle="collapse">02 Will dealers let you take car mechanic?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a5_2" data-bs-parent="#accordion_5">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a5_3" class="accordion-button collapsed" data-bs-toggle="collapse">03 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a5_3" data-bs-parent="#accordion_5">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a5_4" class="accordion-button collapsed" data-bs-toggle="collapse">04 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a5_4" data-bs-parent="#accordion_5">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="accordion theme-accordion" id="accordion_6">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a6_1" class="accordion-button" data-bs-toggle="collapse">01 How long does it take to inspect your car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse show" id="a6_1" data-bs-parent="#accordion_6">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a6_2" class="accordion-button collapsed" data-bs-toggle="collapse">02 Will dealers let you take car mechanic?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a6_2" data-bs-parent="#accordion_6">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a6_3" class="accordion-button collapsed" data-bs-toggle="collapse">03 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a6_3" data-bs-parent="#accordion_6">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <a href="#a6_4" class="accordion-button collapsed" data-bs-toggle="collapse">04 How long does it take a mechanic to inspect a used car?</a>
                                                        </div>
                                                        <div class="accordion-collapse collapse" id="a6_4" data-bs-parent="#accordion_6">
                                                            <div class="accordion-body">
                                                                <p>Dynamically reintermediate virtual functionalities for bandwidth. Uniquely expedite cooperative strategic theme areas and sticky e-markets. Holisticly synergize alternative metrics for multifunctional outsourcing without ubiquitous total linkage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <a href="contact.html" class="btn btn-secondary"><span class="me-2"><i class="flaticon-chat"></i></span>Make a Question</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="apps-section">
                <div class="container">
                    <div class="apps-content-wrapper position-relative z-1 overflow-hidden rounded">
                        <img src="../rent_html/assets/img/shapes/apps-bg-shape.png" alt="not found" class="position-absolute z--1 end-0 top-0">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                <div class="apps-left">
                                    <h2 class="h1 mb-3">Autohive User Friendly App Available</h2>
                                    <p class="mb-0">Appropriately monetize one-to-one interfaces rather than cutting-edge Competently disinte rmediate backward.</p>
                                    <div class="apps-btn-group mt-40 d-flex align-items-center flex-wrap">
                                        <a href="#" class="app-btn primary-btn d-inline-flex align-items-center">
                                            <span class="icon-wrapper me-2"><i class="fa-brands fa-google-play"></i></span>
                                            <div class="app-btn-content">
                                                <span>Get it on</span>
                                                <strong>Google Play</strong>
                                            </div>
                                        </a>
                                        <a href="#" class="app-btn white-btn d-inline-flex align-items-center">
                                            <span class="icon-wrapper me-2"><i class="fa-brands fa-apple"></i></span>
                                            <div class="app-btn-content">
                                                <span>Get it on</span>
                                                <strong>App Store</strong>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-6 align-self-end">
                                <div class="apps-right position-relative z-1 mt-60 mt-xl-0">
                                    <button class="bg-white wallet-btn shadow rounded-circle text-primary position-absolute"><i class="fa-solid fa-wallet"></i></button>
                                    <button class="bg-white heart-btn shadow rounded-circle text-primary position-absolute"><i class="fa-solid fa-heart"></i></button>
                                    <div class="download-countdown d-inline-flex align-items-center rounded bg-white shadow position-absolute">
                                        <img src="../rent_html/assets/img/home1/author-1.png" alt="author" class="rounded-cricle flex-shrink-0">
                                        <div class="download-countdown-content ms-3">
                                            <span>Download App</span>
                                            <h5 class="mb-0"><span>14.5</span><span>k+</span></h5>
                                        </div>
                                    </div>
                                    <img src="../rent_html/assets/img/home1/apps-bg.png" alt="car" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq & app section end-->

        <!--blog section start-->
        <section class="blog-section pt-120 overflow-hidden pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="at-section-title text-center">
                            <span class="at-subtitle position-relative text-primary lead">Recent News & Update</span>
                            <h2 class="mt-1 h1">Upcoming Cars & Events</h2>
                            <p class="mb-0">Appropriately monetize one-to-one interfaces rather than cutting-edge portals. backward-compatible schemas through highly efficient total linkage.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-card-wrapper mt-5">
                    <div class="row g-4 justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-sm-10">
                            <article class="blog-card bg-white rounded">
                                <figure class="feature-img position-relative overflow-hidden rounded-top">
                                    <a href="#"><img src="../rent_html/assets/img/home1/blog-1.jpg" alt="feature image" class="img-fluid"></a>
                                </figure>
                                <a href="#" class="small-btn-meta text-primary bg-primary-light">Car News</a>
                                <a href="#">
                                    <h5 class="mt-3 mb-3 blog-title">Philosophy that addresses topics such as Goodness</h5>
                                </a>
                                <p>Struggling to sell onee currently on the market won't stop actress and singer...</p>
                                <div class="blog-card-bottom mt-4 d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="blog-card-author d-inline-flex align-items-center">
                                        <img src="../rent_html/assets/img/author/blog-author-1.jpg" alt="author" class="flex-shrink-0 rounded-circle">
                                        <div class="blog-card-author-details ms-3">
                                            <strong class="fw-bold text-secondary d-block">Thomas Huizar</strong>
                                            <span class="date">july 22, 1982</span>
                                        </div>
                                    </div>
                                    <a href="#" class="blog-explore-btn d-flex align-items-center justify-content-center rounded-circle"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-10">
                            <article class="blog-card bg-white rounded">
                                <figure class="feature-img position-relative overflow-hidden rounded-top">
                                    <a href="#"><img src="../rent_html/assets/img/home1/blog-2.jpg" alt="feature image" class="img-fluid"></a>
                                </figure>
                                <a href="#" class="small-btn-meta text-primary bg-primary-light">Car News</a>
                                <a href="#">
                                    <h5 class="mt-3 mb-3 blog-title">Some philosophers specialize In one or historical Periods</h5>
                                </a>
                                <p>Struggling to sell onee currently on the market won't stop actress and singer...</p>
                                <div class="blog-card-bottom mt-4 d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="blog-card-author d-inline-flex align-items-center">
                                        <img src="../rent_html/assets/img/author/blog-author-1.jpg" alt="author" class="flex-shrink-0 rounded-circle">
                                        <div class="blog-card-author-details ms-3">
                                            <strong class="fw-bold text-secondary d-block">Thomas Huizar</strong>
                                            <span class="date">july 22, 1982</span>
                                        </div>
                                    </div>
                                    <a href="#" class="blog-explore-btn d-flex align-items-center justify-content-center rounded-circle"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-10">
                            <article class="blog-card bg-white rounded">
                                <figure class="feature-img position-relative overflow-hidden rounded-top">
                                    <a href="#"><img src="../rent_html/assets/img/home1/blog-3.jpg" alt="feature image" class="img-fluid"></a>
                                </figure>
                                <a href="#" class="small-btn-meta text-primary bg-primary-light">Car News</a>
                                <a href="#">
                                    <h5 class="mt-3 mb-3 blog-title">A variety of other academic & non-academic Approaches</h5>
                                </a>
                                <p>Struggling to sell onee currently on the market won't stop actress and singer...</p>
                                <div class="blog-card-bottom mt-4 d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="blog-card-author d-inline-flex align-items-center">
                                        <img src="../rent_html/assets/img/author/blog-author-1.jpg" alt="author" class="flex-shrink-0 rounded-circle">
                                        <div class="blog-card-author-details ms-3">
                                            <strong class="fw-bold text-secondary d-block">Thomas Huizar</strong>
                                            <span class="date">july 22, 1982</span>
                                        </div>
                                    </div>
                                    <a href="#" class="blog-explore-btn d-flex align-items-center justify-content-center rounded-circle"><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog section end-->

        <!--footer section start-->
        <footer class="footer-section">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-xl-6">
                            <div class="footer-banner position-relative bg-primary z-3 rounded">
                                <img src="../rent_html/assets/img/shapes/banner-wave.png" alt="wave" class="position-absolute end-0 top-0 z--1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="footer-banner-left">
                                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-search"></i></span>
                                            <h3 class="text-white mt-3 mb-20">Are You Looking to Buy New Car?</h3>
                                            <a href="inventory-listing.html" class="at-explore-btn text-white">
                                                <span class="me-2 text-white"><svg width="39" height="26" viewBox="0 0 39 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M32.6161 7.85693L37.4087 12.9998M37.4087 12.9998L32.6161 18.1426M37.4087 12.9998H18.0671" stroke="#F1F7FE" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <ellipse cx="12.9322" cy="13" rx="11.9815" ry="12" stroke="#F1F7FE" stroke-width="1.71429"/>
                                                  </svg>
                                              </span>
                                                Search Car
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-end">
                                        <div class="footer-banner-right">
                                            <img src="../rent_html/assets/img/home1/footer-car-1.png" alt="car" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="footer-banner position-relative banner-gradient z-3 rounded">
                                <img src="../rent_html/assets/img/shapes/banner-wave.png" alt="wave" class="opacity-50 position-absolute end-0 top-0 z--1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="footer-banner-left">
                                            <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-budget"></i></span>
                                            <h3 class="text-white mt-3 mb-20">Are You Looking to Sell your Car?</h3>
                                            <a href="car-listing.html" class="at-explore-btn text-white">
                                                <span class="me-2 text-white">
                                                  <svg width="39" height="26" viewBox="0 0 39 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M32.6161 7.85693L37.4087 12.9998M37.4087 12.9998L32.6161 18.1426M37.4087 12.9998H18.0671" stroke="#F1F7FE" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <ellipse cx="12.9322" cy="13" rx="11.9815" ry="12" stroke="#F1F7FE" stroke-width="1.71429"/>
                                                  </svg>
                                              </span>Sale your Car
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-end">
                                        <div class="footer-banner-right">
                                            <img src="../rent_html/assets/img/home1/footer-car-2.png" alt="car" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrapper pt-120 position-relative z-1 overflow-hidden has-banner" data-background="../rent_html/assets/img/shapes/texture-bg.png">
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
                                        <a href="index.html" class="footer-logo d-inline-block"><img src="../rent_html/assets/img/logo.png" alt="logo"></a>
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
                                    <p class="mb-0">&copy; All rights reserved. Made by <a href="index.html">ThemeTags</a></p>
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
                                            <img src="../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-1.jpg" alt="feature img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="product_thumb_slider swiper mt-3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../rent_html/assets/img/home4/pd-thumb-1.png" alt="thumbnail" class="img-fluid">
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
@endsection
@section('scripts') @endsection
