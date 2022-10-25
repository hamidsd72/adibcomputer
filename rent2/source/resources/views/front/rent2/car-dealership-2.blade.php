@extends('layouts.front')
@section('styles') @endsection
@section('body')

    <!--ofcanvus menu start-->
    <div class="at_offcanvus_menu position-fixed">
        <button class="at-offcanvus-close"><i class="fa-solid fa-xmark"></i></button>
        <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="/../rent_html/assets/img/logo-black.png" alt="logo"></a>
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

    <!--dealership hero start-->
    <section class="dl2-hero-section position-relative overflow-hidden" data-background="/../rent_html/assets/img/dealers/hero-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-10">
                    <div class="dl2-hero-content text-center">
                        <h1 class="display-4 text-white">Welcome to <span class="text-primary">Autohive</span> Car Dealership</h1>
                        <div class="dl2-search-car mt-5 position-relative z-1">
                            <img src="/../rent_html/assets/img/shapes/border-left-linear.png" alt="not found" class="position-absolute border-left-linear z--1">
                            <img src="/../rent_html/assets/img/shapes/border-right-linear.png" alt="not found" class="position-absolute border-right-linear z--1">
                            <ul class="nav nav-tabs border-0">
                                <li><a href="#all" class="active" data-bs-toggle="tab">All</a></li>
                                <li><a href="#new" data-bs-toggle="tab">New</a></li>
                                <li><a href="#used" data-bs-toggle="tab">Used</a></li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="all">
                                    <form action="#" class="dl2-search-form bg-white rounded pt-20 pb-20 px-4 d-flex align-items-center flex-wrap flex-sm-nowrap">
                                        <select class="form-select">
                                            <option>All Makes</option>
                                            <option>All Makes</option>
                                            <option>All Makes</option>
                                        </select>
                                        <select class="form-select">
                                            <option>All Models</option>
                                            <option>All Models</option>
                                            <option>All Models</option>
                                        </select>
                                        <select class="form-select">
                                            <option>Transmission</option>
                                            <option>Transmission</option>
                                            <option>Transmission</option>
                                        </select>
                                        <button type="submit" class="submit-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="new">
                                    <form action="#" class="dl2-search-form bg-white rounded pt-20 pb-20 px-4 d-flex align-items-center flex-wrap flex-sm-nowrap">
                                        <select class="form-select">
                                            <option>All Makes</option>
                                            <option>All Makes</option>
                                            <option>All Makes</option>
                                        </select>
                                        <select class="form-select">
                                            <option>All Models</option>
                                            <option>All Models</option>
                                            <option>All Models</option>
                                        </select>
                                        <select class="form-select">
                                            <option>Transmission</option>
                                            <option>Transmission</option>
                                            <option>Transmission</option>
                                        </select>
                                        <button type="submit" class="submit-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="used">
                                    <form action="#" class="dl2-search-form bg-white rounded pt-20 pb-20 px-4 d-flex align-items-center flex-wrap flex-sm-nowrap">
                                        <select class="form-select">
                                            <option>All Makes</option>
                                            <option>All Makes</option>
                                            <option>All Makes</option>
                                        </select>
                                        <select class="form-select">
                                            <option>All Models</option>
                                            <option>All Models</option>
                                            <option>All Models</option>
                                        </select>
                                        <select class="form-select">
                                            <option>Transmission</option>
                                            <option>Transmission</option>
                                            <option>Transmission</option>
                                        </select>
                                        <button type="submit" class="submit-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="at-header-social d-none d-lg-flex align-items-center position-absolute">
            <span class="title">Follow on</span>
            <ul class="social-list ms-3">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <a href="#brands" class="position-absolute btn-scroll-down d-none d-xl-block"><span class="me-2">
            <svg width="49" height="28" viewBox="0 0 49 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.5 9L47.715 14.1189M47.715 14.1189L42.5 19.3339M47.715 14.1189H19.5" stroke="#FC0012" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <rect x="1" y="1" width="32" height="26" rx="13" stroke="#FC0012" stroke-width="2"></rect>
            </svg>
            </span>Scroll Down
        </a>
    </section>
    <!--dealership hero end-->

    <!--about section start-->
    <section class="dealership-about ptb-120 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title text-center">
                        <h2 class="h1 mb-3">Why Choose Us?</h2>
                        <p>Dramatically plagiarize cost effective products and impactful action items. Credibly impactful sources before frictionless.</p>
                    </div>
                </div>
            </div>
            <div class="ds-about-info mt-5 position-relative z-1">
                <img src="/../rent_html/assets/img/shapes/dots-wide.png" alt="dots wide" class="position-absolute dots-wide z--1">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-info-box bg-white rounded-2">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded bg-light-red">
                                <i class="flaticon-expert"></i>
                            </span>
                            <h5 class="mb-3 mt-4">Expert Certified Mechanics</h5>
                            <p class="mb-0">Credibly maximize resource maximizing channels after interoperable frictionless. Rather than synergistic models.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-info-box bg-white rounded-2">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded bg-light-red">
                                <i class="flaticon-settings-1"></i>
                            </span>
                            <h5 class="mb-3 mt-4">Genuine Spares Parts</h5>
                            <p class="mb-0">Proactively formulate standardized innovation before Dramatically plagiarize business vortals whereas resource sucking infrastructures</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-info-box bg-white rounded-2">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded bg-light-red">
                                <i class="flaticon-price-tag"></i>
                            </span>
                            <h5 class="mb-3 mt-4">Get Reasonable Price</h5>
                            <p class="mb-0">Competently benchmark 24/365 relationships for best-of-breed vortals. Intrinsicly disintermediate 24/365 convergence.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="bs-brands bg-white rounded-3">
                            <div class="title-top d-flex flex-wrap align-items-center justify-content-between mb-30">
                                <h4 class="mb-0 fw-800">Best Selling Brands</h4>
                                <a href="#" class="fw-semibold explore-link">More Brands <span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                            <div class="row justify-content-center g-3">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/hyundai-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/audi-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/ferrari-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/mahindra-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/toyota-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/mitsubishi-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/volkswagen.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="bs-brand-wrapper rounded-3 bg-white d-flex align-items-center justify-content-center">
                                        <img src="/../rent_html/assets/img/brands/mercedes-lg.png" alt="not found" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dl2-banner-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide dl2-banner-single bg-secondary-gradient position-relative z-1 overflow-hidden rounded-3">
                                    <span class="texture-overlay position-absolute start-0 top-0 w-100 h-100 z--1" data-background="/../rent_html/assets/img/shapes/texture-bg.png"></span>
                                    <div class="dl2-banner-content">
                                        <span class="banner-subtitle">Discount 10% off</span>
                                        <h3 class="mb-4 text-white"><span class="fw-semibold">Special offers</span> for <br>Black Friday</h3>
                                        <a href="product-details.html" class="btn btn-primary">Shop Now<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                    <img src="/../rent_html/assets/img/dealers/offer-car-1.png" alt="car" class="img-fluid">
                                    <img src="/../rent_html/assets/img/shapes/dots.png" alt="dots" class="position-absolute dots-shape">
                                    <img src="/../rent_html/assets/img/shapes/tire-circle.png" alt="tire circle" class="position-absolute tire-circle soft-light">
                                </div>
                                <div class="swiper-slide dl2-banner-single bg-secondary-gradient position-relative z-1 overflow-hidden rounded-3">
                                    <span class="texture-overlay position-absolute start-0 top-0 w-100 h-100 z--1" data-background="/../rent_html/assets/img/shapes/texture-bg.png"></span>
                                    <div class="dl2-banner-content">
                                        <span class="banner-subtitle">Discount 10% off</span>
                                        <h3 class="mb-4 text-white"><span class="fw-semibold">Special offers</span> for <br>Black Friday</h3>
                                        <a href="product-details.html" class="btn btn-primary">Shop Now<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                    <img src="/../rent_html/assets/img/dealers/offer-car-1.png" alt="car" class="img-fluid">
                                    <img src="/../rent_html/assets/img/shapes/dots.png" alt="dots" class="position-absolute dots-shape">
                                    <img src="/../rent_html/assets/img/shapes/tire-circle.png" alt="tire circle" class="position-absolute tire-circle soft-light">
                                </div>
                                <div class="swiper-slide dl2-banner-single bg-secondary-gradient position-relative z-1 overflow-hidden rounded-3">
                                    <span class="texture-overlay position-absolute start-0 top-0 w-100 h-100 z--1" data-background="/../rent_html/assets/img/shapes/texture-bg.png"></span>
                                    <div class="dl2-banner-content">
                                        <span class="banner-subtitle">Discount 10% off</span>
                                        <h3 class="mb-4 text-white"><span class="fw-semibold">Special offers</span> for <br>Black Friday</h3>
                                        <a href="product-details.html" class="btn btn-primary">Shop Now<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                    <img src="/../rent_html/assets/img/dealers/offer-car-1.png" alt="car" class="img-fluid">
                                    <img src="/../rent_html/assets/img/shapes/dots.png" alt="dots" class="position-absolute dots-shape">
                                    <img src="/../rent_html/assets/img/shapes/tire-circle.png" alt="tire circle" class="position-absolute tire-circle soft-light">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--about section end-->

    <!--call to action start-->
    <section class="ds-call-to-action ptb-120 position-relative overflow-hidden z-1" data-background="/../rent_html/assets/img/dealers/cta-bg.png">
        <span class="gradient-overlay position-absolute start-0 top-0 w-100 h-100 z--1"></span>
        <img src="/../rent_html/assets/img/shapes/offer-road.png" alt="not found" class="position-absolute start-0 top-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-content text-center position-relative z-1">
                        <h2 class="h1 text-white mb-3">Buy Your Car Quickly And Easily</h2>
                        <p class="mb-5 text-white">Intrinsicly redefine cross functional opportunities vis-a-vis enabled markets. Conveniently negotiate cross-media expertise Compellingly leverage existing fully tested.</p>
                        <div class="cta-btns-wrapper d-flex align-items-center justify-content-center flex-wrap">
                            <a href="inventory-listing.html" class="btn btn-primary">View Inventory</a>
                            <a href="car-listing.html" class="btn header-white-btn">Sell Your Car</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->

    <!--featured listing start-->
    <section class="featured-listing ptb-120">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-between">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="section-title text-center text-xl-start">
                        <h2 class="h1 mb-3">Featured Listing</h2>
                        <p class="mb-0">Dramatically plagiarize cost effective products and impactful action items. Credibly impactful sources before frictionless.</p>
                    </div>
                </div>
                <div class="col-xl-6 align-self-end">
                    <div class="listing-ft-controls d-flex align-items-center justify-content-center justify-content-xl-end flex-wrap mt-5 mt-xl-0">
                        <button type="button" data-filter="*" class="active">Latest Car</button>
                        <button type="button" data-filter=".featured">Featured</button>
                        <button type="button" data-filter=".popular">Popular</button>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row g-4 justify-content-center masonry_grid featured_masonry">
                    <div class="col-xxl-3 col-xl-4 col-md-6 grid_item popular">
                        <div class="filter-card-item position-relative overflow-hidden rounded-3 bg-white">
                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                            <div class="feature-thumb position-relative overflow-hidden">
                                <a href="inventory-details.html"><img src="/../rent_html/assets/img/home1/car-8.jpg" alt="car" class="img-fluid"></a>
                            </div>
                            <div class="filter-card-content">
                                <a href="inventory-details.html" class="mt-4 d-block">
                                    <h5>Lamborghini Huracan</h5>
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
                                <div class="card-btns d-flex align-items-center justify-content-between flex-wrap">
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <span class="fs-sm text-secondary">Price:<strong class="fw-800 fs-6 ms-1">$35000</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 grid_item featured">
                        <div class="filter-card-item position-relative overflow-hidden rounded-3 bg-white">
                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                            <span class="date position-absolute">2019</span>
                            <div class="feature-thumb position-relative overflow-hidden">
                                <a href="inventory-details.html"><img src="/../rent_html/assets/img/home1/car-7.jpg" alt="car" class="img-fluid"></a>
                            </div>
                            <div class="filter-card-content">
                                <a href="inventory-details.html" class="mt-4 d-block">
                                    <h5>Lamborghini Centenario</h5>
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
                                <div class="card-btns d-flex align-items-center justify-content-between flex-wrap">
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <span class="fs-sm text-secondary">Price:<strong class="fw-800 fs-6 ms-1">$35000</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-4 col-lg-6 grid_item featured">
                        <div class="filter-card-lg rounded-3 overflow-hidden bg-white">
                            <div class="feature-img">
                                <a href="inventory-details.html"><img src="/../rent_html/assets/img/home1/car-10-lg.jpg" alt="not found" class="img-fluid"></a>
                            </div>
                            <div class="content-wrapper">
                                <a href="inventory-details.html">
                                    <h4 class="mb-1">Lamborghini Centenario</h4>
                                </a>
                                <span class="fs-sm fw-500"><i class="fa-solid fa-location-dot"></i>71-Wast San Park St, New York</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-4 col-lg-6 grid_item popular">
                        <div class="filter-card-lg rounded-3 overflow-hidden bg-white">
                            <div class="feature-img">
                                <a href="inventory-details.html"><img src="/../rent_html/assets/img/home1/car-11-lg.jpg" alt="not found" class="img-fluid"></a>
                            </div>
                            <div class="content-wrapper">
                                <a href="inventory-details.html">
                                    <h4 class="mb-1">Lamborghini Aventador</h4>
                                </a>
                                <span class="fs-sm fw-500"><i class="fa-solid fa-location-dot"></i>71-Wast San Park St, New York</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 grid_item popular">
                        <div class="filter-card-item position-relative overflow-hidden rounded-3 bg-white">
                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                            <div class="feature-thumb position-relative overflow-hidden">
                                <a href="inventory-details.html"><img src="/../rent_html/assets/img/home1/car-3.jpg" alt="car" class="img-fluid"></a>
                            </div>
                            <div class="filter-card-content">
                                <a href="inventory-details.html" class="mt-4 d-block">
                                    <h5>Lamborghini Huracan</h5>
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
                                <div class="card-btns d-flex align-items-center justify-content-between flex-wrap">
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <span class="fs-sm text-secondary">Price:<strong class="fw-800 fs-6 ms-1">$35000</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 grid_item featured">
                        <div class="filter-card-item position-relative overflow-hidden rounded-3 bg-white">
                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                            <div class="feature-thumb position-relative overflow-hidden">
                                <a href="inventory-details.html"><img src="/../rent_html/assets/img/home1/car-5.jpg" alt="car" class="img-fluid"></a>
                            </div>
                            <div class="filter-card-content">
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
                                <div class="card-btns d-flex align-items-center justify-content-between flex-wrap">
                                    <a href="inventory-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <span class="fs-sm text-secondary">Price:<strong class="fw-800 fs-6 ms-1">$35000</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--featured listing end-->

    <!--counterup section start-->
    <!--coutnerupo section end-->

    <!--feature section start-->
    <section class="dl2-feature pb-120 position-relative z-1 overflow-hidden">
        <div class="dl2-counterup pb-120">
            <div class="container">
                <div class="dl2-counterup-area position-relative z-1 overflow-hidden rounded-3" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
                    <span class="bg-secondary-gradient position-absolute start-0 top-0 w-100 h-100 z--1"></span>
                    <div class="row g-4">
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="dl2-couter-box d-md-flex align-items-center text-center text-md-start position-relative right-line">
                                <span class="icon-wrapper d-inline-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white rounded-circle">
                                    <i class="flaticon-drive"></i>
                                </span>
                                <div class="dl2-counter-box-right ms-md-3 mt-3 mt-md-0">
                                    <h3 class="mb-1 text-white"><span class="counter">950</span></h3>
                                    <span class="text-uppercase text-white fs-md">New Cars In Stork</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="dl2-couter-box d-md-flex align-items-center text-center text-md-start position-relative right-line">
                                <span class="icon-wrapper d-inline-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white rounded-circle">
                                    <i class="flaticon-car-repair"></i>
                                </span>
                                <div class="dl2-counter-box-right ms-md-3 mt-3 mt-md-0">
                                    <h3 class="mb-1 text-white"><span class="counter">45</span><span>k+</span></h3>
                                    <span class="text-uppercase text-white fs-md">Used Cars in stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="dl2-couter-box d-md-flex align-items-center text-center text-md-start position-relative right-line">
                                <span class="icon-wrapper d-inline-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white rounded-circle">
                                    <i class="flaticon-clutch-disc"></i>
                                </span>
                                <div class="dl2-counter-box-right ms-md-3 mt-3 mt-md-0">
                                    <h3 class="mb-1 text-white"><span class="counter">45</span><span>k+</span></h3>
                                    <span class="text-uppercase text-white fs-md">Service centers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="dl2-couter-box d-md-flex align-items-center text-center text-md-start position-relative">
                                <span class="icon-wrapper d-inline-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white rounded-circle">
                                    <i class="flaticon-staff"></i>
                                </span>
                                <div class="dl2-counter-box-right ms-md-3 mt-3 mt-md-0">
                                    <h3 class="mb-1 text-white"><span class="counter">45</span><span>k+</span></h3>
                                    <span class="text-uppercase text-white fs-md">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/../rent_html/assets/img/shapes/dl2-dot-shape.png" alt="not found" class="position-absolute z--1 top-0 end-0">
        <div class="container position-relative z-1">
            <img src="/../rent_html/assets/img/shapes/net.png" alt="not found" class="position-absolute start-0 top-0 z--1">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="h1 mb-0">We're Are Ensuring The Best Customer Experience</h2>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="dl2-feature-content">
                            <ul class="dl2-feature-list">
                                <li class="d-flex align-items-center">
                                    <div class="list-content text-xl-end order-2 order-xl-1 ms-4 ms-xl-0">
                                        <h5 class="mb-1">Most Flexible Payment</h5>
                                        <p class="mb-0">Uniquely revolutionize manufactured for interactive customer service. </p>
                                    </div>
                                    <span class="icon-wrapper order-1 order-xl-2 d-inline-flex align-items-center justify-content-center rounded-3 bg-white text-primary ms-xl-4">
                                        <i class="flaticon-credit-card"></i>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="list-content text-xl-end order-2 order-xl-1 ms-4 ms-xl-0">
                                        <h5 class="mb-1">Most Flexible Payment</h5>
                                        <p class="mb-0">Uniquely revolutionize manufactured for interactive customer service. </p>
                                    </div>
                                    <span class="icon-wrapper order-1 order-xl-2 d-inline-flex align-items-center justify-content-center rounded-3 bg-white text-primary ms-xl-4">
                                        <i class="flaticon-credit-card"></i>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="list-content text-xl-end order-2 order-xl-1 ms-4 ms-xl-0">
                                        <h5 class="mb-1">Most Flexible Payment</h5>
                                        <p class="mb-0">Uniquely revolutionize manufactured for interactive customer service. </p>
                                    </div>
                                    <span class="icon-wrapper order-1 order-xl-2 d-inline-flex align-items-center justify-content-center rounded-3 bg-white text-primary ms-xl-4">
                                        <i class="flaticon-credit-card"></i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                        <div class="text-center">
                            <img src="/../rent_html/assets/img/services/car.png" alt="car" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="dl2-feature-content mt-60 mt-lg-0">
                            <ul class="dl2-feature-list">
                                <li class="d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-3 bg-white text-primary me-4">
                                        <i class="flaticon-drive"></i>
                                    </span>
                                    <div class="list-content">
                                        <h5 class="mb-1">Online Car Appraisal</h5>
                                        <p class="mb-0">Uniquely revolutionize manufactured for interactive customer service. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-3 bg-white text-primary me-4">
                                        <i class="flaticon-staff"></i>
                                    </span>
                                    <div class="list-content">
                                        <h5 class="mb-1">Consumer-First Mentality</h5>
                                        <p class="mb-0">Uniquely revolutionize manufactured for interactive customer service. </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-3 bg-white text-primary me-4">
                                        <i class="flaticon-speedometer-2"></i>
                                    </span>
                                    <div class="list-content">
                                        <h5 class="mb-1">Non-Stop Innovation</h5>
                                        <p class="mb-0">Uniquely revolutionize manufactured for interactive customer service. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--dealers section start-->
    <section class="dl2-dealers bg-white pt-120 position-relative z-1 overflow-hidden">
        <img src="/../rent_html/assets/img/shapes/dl2-bg-dot-right.png" alt="not found" class="position-absolute top-0 end-0 z--1">
        <img src="/../rent_html/assets/img/shapes/dl2-bg-dot-left.png" alt="not found" class="position-absolute bottom-0 start-0 z--1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h2 class="h1 mb-3 ">Best Dealers in City</h2>
                        <p>Rapidiously enable stand-alone e-markets whereas multifunctional channels enterprise-wide meta-services.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="text-lg-end text-center mt-3 mt-lg-0">
                        <a href="dealers.html" class="btn btn-primary">More Dealers</a>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="dl2-dealer-card dl_card_box bg-white pb-4 rounded border overflow-hidden">
                            <div class="figure_img position-relative overflow-hidden">
                                <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-1.jpg" alt="not found" class="img-fluid"></a>
                                <span class="listing-count bg-secondary text-white fw-500 rounded-end shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                            </div>
                            <div class="px-3">
                                <a href="dealer-single.html">
                                    <h5 class="mt-4">Starlight AutoMall.</h5>
                                </a>
                                <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                <hr class="mt-3 mb-3">
                                <div class="dl_social d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="dl2-dealer-card dl_card_box bg-white pb-4 rounded border overflow-hidden">
                            <div class="figure_img position-relative overflow-hidden">
                                <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-2.jpg" alt="not found" class="img-fluid"></a>
                                <span class="listing-count bg-secondary text-white fw-500 rounded-end shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                            </div>
                            <div class="px-3">
                                <a href="dealer-single.html">
                                    <h5 class="mt-4">Starlight AutoMall.</h5>
                                </a>
                                <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                <hr class="mt-3 mb-3">
                                <div class="dl_social d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="dl2-dealer-card dl_card_box bg-white pb-4 rounded border overflow-hidden">
                            <div class="figure_img position-relative overflow-hidden">
                                <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-3.jpg" alt="not found" class="img-fluid"></a>
                                <span class="listing-count bg-secondary text-white fw-500 rounded-end shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                            </div>
                            <div class="px-3">
                                <a href="dealer-single.html">
                                    <h5 class="mt-4">Starlight AutoMall.</h5>
                                </a>
                                <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                <hr class="mt-3 mb-3">
                                <div class="dl_social d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="dl2-dealer-card dl_card_box bg-white pb-4 rounded border overflow-hidden">
                            <div class="figure_img position-relative overflow-hidden">
                                <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-1.jpg" alt="not found" class="img-fluid"></a>
                                <span class="listing-count bg-secondary text-white fw-500 rounded-end shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                            </div>
                            <div class="px-3">
                                <a href="dealer-single.html">
                                    <h5 class="mt-4">Starlight AutoMall.</h5>
                                </a>
                                <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                <hr class="mt-3 mb-3">
                                <div class="dl_social d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--dealers section end-->

    <!--car body types-->
    <section class="body-types">
        <div class="container">
            <div class="car-sorting-box position-relative z-1 overflow-hidden rounded-3 mt--250" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
                <span class="position-absolute start-0 top-0 w-100 h-100 bg-secondary-gradient z--1"></span>
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8">
                        <div class="section-title text-center">
                            <h3 class="mb-2 text-white">Sort Car Body Types</h3>
                            <p class="text-white">Rapidiously enable stand-alone e-markets whereas multifunctional channels enterprise-wide meta-services.</p>
                        </div>
                    </div>
                </div>
                <div class="dl2-car-brands d-flex flex-wrap align-items-center justify-content-center mt-40">
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/suv-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Suv</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/crossover-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Crossover</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/suv-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Suv</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/convertible-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Convertible</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/sedan-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Sedan</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/wagon-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Wagon</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/coup-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Coup</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/compact-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Compact</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/sport-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Sport Coupe</h5>
                    </a>
                    <a href="inventory-listing.html" class="dl2-car-brand-item rounded-2 d-inline-flex align-items-center justify-content-center flex-column">
                        <img src="/../rent_html/assets/img/brands/pickup-white.png" alt="brand" class="img-fluid">
                        <h5 class="mt-1 mb-0 text-white">Pickup</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--car body types end-->

    <!--feedback section start-->
    <section class="dl2-feedback-section ptb-120 position-relative z-1 overflow-hidden">
        <img src="/../rent_html/assets/img/shapes/dot-red-bg.png" alt="not found" class="position-absolute start-0 top-0 z--1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6">
                    <div class="dl2-feedback-left">
                        <h2 class="h1 mb-30">Whats Our People Says</h2>
                        <div class="dl2-feedback-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="dl2-feedback-single swiper-slide">
                                    <img src="/../rent_html/assets/img/icons/quote.png" alt="quote">
                                    <h5 class="mb-3 mt-3">Wonderful Experience Provider.</h5>
                                    <p class="mb-30">Proactively target customer directed infrastructures via parallel e-business. Authoritatively coordinate superior potentialities through value-added content. Rapidiously visualize collaborative growth strategies before client-focused web services. Competently strategize out-of-the-box e-services.</p>
                                    <div class="dl2-feedback-client d-flex align-items-center">
                                        <img src="/../rent_html/assets/img/author/client-2.jpg" alt="client" class="rounded-circle flex-shrink-0">
                                        <div class="ms-3">
                                            <h6 class="mb-1">Drazenka Nikolic</h6>
                                            <span class="fs-md">Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dl2-feedback-single swiper-slide">
                                    <img src="/../rent_html/assets/img/icons/quote.png" alt="quote">
                                    <h5 class="mb-3 mt-3">Wonderful Experience Provider.</h5>
                                    <p class="mb-30">Proactively target customer directed infrastructures via parallel e-business. Authoritatively coordinate superior potentialities through value-added content. Rapidiously visualize collaborative growth strategies before client-focused web services. Competently strategize out-of-the-box e-services.</p>
                                    <div class="dl2-feedback-client d-flex align-items-center">
                                        <img src="/../rent_html/assets/img/author/client-2.jpg" alt="client" class="rounded-circle flex-shrink-0">
                                        <div class="ms-3">
                                            <h6 class="mb-1">Drazenka Nikolic</h6>
                                            <span class="fs-md">Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dl2-feedback-single swiper-slide">
                                    <img src="/../rent_html/assets/img/icons/quote.png" alt="quote">
                                    <h5 class="mb-3 mt-3">Wonderful Experience Provider.</h5>
                                    <p class="mb-30">Proactively target customer directed infrastructures via parallel e-business. Authoritatively coordinate superior potentialities through value-added content. Rapidiously visualize collaborative growth strategies before client-focused web services. Competently strategize out-of-the-box e-services.</p>
                                    <div class="dl2-feedback-client d-flex align-items-center">
                                        <img src="/../rent_html/assets/img/author/client-2.jpg" alt="client" class="rounded-circle flex-shrink-0">
                                        <div class="ms-3">
                                            <h6 class="mb-1">Drazenka Nikolic</h6>
                                            <span class="fs-md">Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="clients-circle mt-5 mt-xl-0">
                        <img src="/../rent_html/assets/img/author/clients-circle.png" alt="clients" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feedback section end-->

    <!--apps section start-->
    <section class="dl2-apps-section">
        <div class="container">
            <div class="dl2-apps-content apps-content-wrapper position-relative z-1 overflow-hidden rounded-3" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
                <span class="position-absolute start-0 top-0 z--1 bg-secondary-gradient w-100 h-100"></span>
                <img src="/../rent_html/assets/img/shapes/apps-bg-shape.png" alt="not found" class="position-absolute z--1 end-0 top-0 bg-circle-shape">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6">
                        <div class="apps-left">
                            <h2 class="h1 mb-3 text-white">Autohive User Friendly App Available</h2>
                            <p class="mb-0 text-white">Appropriately monetize one-to-one interfaces rather than cutting-edge Competently disinte rmediate backward.</p>
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
                        <div class="apps-right position-relative z-1 pb-4">
                            <button class="bg-primary search-btn shadow rounded-3 text-white position-absolute"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <h4 class="text-white text-center mb-4">Easy way to buy and<br> Sell Vehicles</h4>
                            <img src="/../rent_html/assets/img/dealers/apps-bg.png" alt="car" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--apps section end-->

    <!--blog section start-->
    <section class="dl2-blog-section ptb-120 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="h1 mb-3">Upcoming Cars & Events</h2>
                        <p class="mb-0">Appropriately monetize one-to-one interfaces rather than cutting-edge portals. backward-compatible schemas through highly efficient total linkage.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6">
                        <div class="dl2-blog-card position-relative z-1 overflow-hidden rounded-3">
                            <span class="gradient-overlay position-absolute start-0 top-0 w-100 h-100 opacity-75 z-1"></span>
                            <img src="/../rent_html/assets/img/dealers/blog-1.jpg" alt="not found" class="img-fluid">
                            <div class="dl2-blog-card-content">
                                <div class="dl2-blog-meta">
                                    <span><i class="fa-solid fa-tags"></i>Car Updates</span>
                                    <span class="ms-3"><i class="fa-solid fa-tags"></i>May 24, 2022</span>
                                </div>
                                <a href="blog-details.html">
                                    <h4 class="blog-title mt-3 mb-4">The Continued Growth of Delivery and Ride share-2022</h4>
                                </a>
                                <p class="mb-4 text-white">Seamlessly architect technically sound customer service without client-focused team driven opportunities without leveraged materials.</p>
                                <a href="#" class="dl2-blog-explore fw-semibold">Explore More<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row g-4">
                            <div class="col-xl-12">
                                <div class="dl2-blog-card2 d-md-flex align-items-center rounded-3 overflow-hidden bg-white">
                                    <div class="feature-img rounded-start flex-shrink-0 overflow-hidden">
                                        <img src="/../rent_html/assets/img/dealers/blog-2.jpg" alt="not found" class="img-fluid">
                                    </div>
                                    <div class="dl2-blog-card-content ms-md-4 mt-4 mt-md-0">
                                        <div class="blog-meta mb-1">
                                            <span><i class="fa-solid fa-tags"></i>Car Updates</span>
                                            <span class="ms-3"><i class="fa-solid fa-tags"></i>May 24, 2022</span>
                                        </div>
                                        <a href="blog-details.html">
                                            <h5 class="mb-2 blog-title">Automotive Tips for Delivery & Rideshare Drivers</h5>
                                        </a>
                                        <p class="mb-3">Holisticly strategize real-time imperatives with focus imperatives wireless catalysts.</p>
                                        <a href="blog-details.html" class="dl2-blog-explore fw-semibold">Explore More<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="dl2-blog-card2 d-md-flex align-items-center rounded-3 overflow-hidden bg-white">
                                    <div class="feature-img rounded-start flex-shrink-0 overflow-hidden">
                                        <img src="/../rent_html/assets/img/dealers/blog-3.jpg" alt="not found" class="img-fluid">
                                    </div>
                                    <div class="dl2-blog-card-content ms-md-4 mt-4 mt-md-0">
                                        <div class="blog-meta mb-1">
                                            <span><i class="fa-solid fa-tags"></i>Car Updates</span>
                                            <span class="ms-3"><i class="fa-solid fa-tags"></i>May 24, 2022</span>
                                        </div>
                                        <a href="blog-details.html">
                                            <h5 class="mb-2 blog-title">How long does it take to order a rent car?</h5>
                                        </a>
                                        <p class="mb-3">Holisticly strategize real-time imperatives with focus imperatives wireless catalysts.</p>
                                        <a href="blog-details.html" class="dl2-blog-explore fw-semibold">Explore More<span class="ms-1"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

@endsection
@section('scripts') @endsection

