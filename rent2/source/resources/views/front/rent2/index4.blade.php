@extends('layouts.front')
@section('styles') @endsection
@section('body')

    <!--hero section start-->
    <section class="h4-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 offset-xl-3">
                    <div class="swiper h4-hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h4-hero-slider-single" data-background="/../rent_html/assets/img/home4/hero-slide-1.jpg">
                                <div class="slide-content">
                                    <span class="h4-subtitle d-inline-block text-primary position-relative fw-semibold">We Are Manufacturer</span>
                                    <h3 class="text-white mt-2 mb-3">Original Equipment <br>Manufacturer</h3>
                                    <p class="mb-40 text-white">Continually leverage other's adaptive synergy without visionary customer service.</p>
                                    <a href="#" class="btn btn-primary btn-md">Discover More</a>
                                </div>
                            </div>
                            <div class="swiper-slide h4-hero-slider-single" data-background="/../rent_html/assets/img/home4/offer-banner-bg.jpg">
                                <div class="slide-content">
                                    <span class="h4-subtitle d-inline-block text-primary position-relative fw-semibold">Online Parts Marketplace</span>
                                    <h3 class="text-white mt-2 mb-3">Auto Repair System Accessories</h3>
                                    <p class="mb-40 text-white">Continually leverage other's adaptive synergy without visionary customer service.</p>
                                    <a href="#" class="btn btn-primary btn-md">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--search box start-->
    <div class="h3-hero-search-box pt-4 pb-100 mt-0">
        <div class="container">
            <div class="h4-search-filter h3-search-box-wrapper bg-white rounded overflow-hidden">
                <h5 class="mb-30 position-relative d-inline-block h4-subtitle">Select Your Vehicle Parts</h5>
                <form action="#" class="at-search-filter d-flex align-items-center">
                    <div class="input-field">
                        <select class="form-select">
                            <option>Select Model</option>
                            <option>Maercedes Benz i7</option>
                            <option>Toyota 4Runner</option>
                            <option>Ford Escape</option>
                            <option>Hyundai Tucson</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="form-select">
                            <option>Select Body</option>
                            <option>Crossover</option>
                            <option>Sedan</option>
                            <option>Wagon</option>
                            <option>Compact</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="form-select">
                            <option>Select Year</option>
                            <option>2010</option>
                            <option>2012</option>
                            <option>2014</option>
                            <option>2015</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <select class="form-select">
                            <option>Select Engine</option>
                            <option>Straight Engine</option>
                            <option>Flat Engine</option>
                            <option>V-Engine Engine</option>
                            <option>Twin Cylinder</option>
                        </select>
                    </div>
                    <div class="submit-btn align-self-end">
                        <button class="btn btn-secondary btn-md" type="submit">Search Parts</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--search box end-->

    <!--feature products start-->
    <section class="h4-feature-product pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title text-center text-xl-start">
                        <h5 class="h4-subtitle position-relative d-inline-block text-primary">Featured Products</h5>
                        <h2 class="h1 mb-0">Auto Parts For All Model</h2>
                    </div>
                </div>
                <div class="col-xl-6 align-self-end">
                    <div class="h4-filter-btn-group d-flex align-items-center justify-content-center justify-content-xl-end mt-4 mt-xl-0 flex-wrap">
                        <button class="h4-filter-btn active" data-filter="*">All Parts</button>
                        <button class="h4-filter-btn" data-filter=".power_tools">Power Tools</button>
                        <button class="h4-filter-btn" data-filter=".hand_tools">Hand Tools</button>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row justify-content-center g-4 filter_grid_2">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 hand_tools">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/fp-1.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 <br>Tire Parts</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 power_tools">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/fp-2.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Glossy Gray 19" Aluminium <br>Wheel AR-19</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 hand_tools">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/fp-3.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Set of Car Floor Mats <br>Brandix Z4</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 power_tools">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/fp-4.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Brandix Spark Plug Kit <br>ASR-400</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature products end-->

    <!--flash sales start-->
    <section class="flash-sales">
        <div class="flash-sales-countdown-area pt-120 position-relative z-1 overflow-hidden" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
            <img src="/../rent_html/assets/img/shapes/tire-print-left.svg" alt="print" class="position-absolute z-1 start-0 top-50 translate-middle-y">
            <img src="/../rent_html/assets/img/shapes/tire-print-right.svg" alt="print" class="position-absolute z-1 end-0 top-50 translate-middle-y">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="flash-sales-content text-center position-relative z-2">
                            <h2 class="h1 text-white">Attension! <span class="text-primary">Flash Sales</span></h2>
                            <p class="mb-4 text-white">Hurry up! Discount up to 70%</p>
                            <ul class="countdown-timer flash-sales-countdown d-flex align-items-center justify-content-center flex-wrap" data-date="12/30/2022 23:59:59">
                                <li class="bg-primary rounded text-center">
                                    <h4 class="mb-0 text-white days">03</h4>
                                    <span class="text-white">Day</span>
                                </li>
                                <li class="bg-primary rounded text-center">
                                    <h4 class="mb-0 text-white hours">06</h4>
                                    <span class="text-white">Hours</span>
                                </li>
                                <li class="bg-primary rounded text-center">
                                    <h4 class="mb-0 text-white minutes">25</h4>
                                    <span class="text-white">Min</span>
                                </li>
                                <li class="bg-primary rounded text-center">
                                    <h4 class="mb-0 text-white seconds">55</h4>
                                    <span class="text-white">Sec</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sales-slider-area overflow-hidden">
            <div class="container">
                <div class="flash-sales-slider-wrapper overflow-hidden">
                    <div class="flash-sales-slider swiper pt-4 pb-120 overflow-visible">
                        <div class="swiper-wrapper">
                            <div class="h4-ft-product-card bg-white rounded swiper-slide">
                                <div class="product-card-top position-relative overflow-hidden">
                                    <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                    <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                    <img src="/../rent_html/assets/img/home4/fuel.jpg" alt="product" class="img-fluid feature-img">
                                    <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                </div>
                                <div class="product-card-bottom mt-4">
                                    <div class="product-rating mb-1">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <a href="product-details.html" class="product-title">Fuel-D556 Coupler 1pc Black with Machine</a>
                                    <div class="product-pricing mt-2">
                                        <span class="sale-price">$120.00</span>
                                        <span class="offer-price text-primary">$95.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="h4-ft-product-card bg-white rounded swiper-slide">
                                <div class="product-card-top position-relative overflow-hidden">
                                    <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                    <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                    <img src="/../rent_html/assets/img/home4/brake.jpg" alt="product" class="img-fluid feature-img">
                                    <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                </div>
                                <div class="product-card-bottom mt-4">
                                    <div class="product-rating mb-1">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <a href="product-details.html" class="product-title">Car Disc brake Automobile repair Shop Brake Pad</a>
                                    <div class="product-pricing mt-2">
                                        <span class="sale-price">$18.00</span>
                                        <span class="offer-price text-primary">$15.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="h4-ft-product-card bg-white rounded swiper-slide">
                                <div class="product-card-top position-relative overflow-hidden">
                                    <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                    <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                    <img src="/../rent_html/assets/img/home4/suspension.jpg" alt="product" class="img-fluid feature-img">
                                    <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                </div>
                                <div class="product-card-bottom mt-4">
                                    <div class="product-rating mb-1">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <a href="product-details.html" class="product-title">Car Suspension Vehicle graphy Automotive Parts</a>
                                    <div class="product-pricing mt-2">
                                        <span class="sale-price">$780.00</span>
                                        <span class="offer-price text-primary">$480.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="h4-ft-product-card bg-white rounded swiper-slide">
                                <div class="product-card-top position-relative overflow-hidden">
                                    <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                    <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                    <img src="/../rent_html/assets/img/home4/fp-1.jpg" alt="product" class="img-fluid feature-img">
                                    <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                        <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                    </div>
                                </div>
                                <div class="product-card-bottom mt-4">
                                    <div class="product-rating mb-1">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <a href="product-details.html" class="product-title">Car Vehicle Spare Automotive Parts</a>
                                    <div class="product-pricing mt-2">
                                        <span class="sale-price">$38.00</span>
                                        <span class="offer-price text-primary">$22.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flash-controls flash-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="flash-controls flash-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--flash sales end-->

    <!--offer section start-->
    <section class="h4-offer-section pt-60 pt-sm-0">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <div class="h4-offer-banner bg-primary box-style-1 rounded position-relative z-1 overflow-hidden">
                        <div class="offer-box-overlay position-absolute start-0 top-0 w-100 h-100 z--1" data-background="/../rent_html/assets/img/shapes/offer-bg.png"></div>
                        <h6 class="h4-subtitle position-relative text-white d-inline-block shape-white">30% Big Offer</h6>
                        <h3 class="mb-30 text-white">Modern Auto Wheel <br>Up To 25% Offer</h3>
                        <a href="product-details.html" class="btn header-white-btn btn-md white-btn">Shop Now</a>
                        <div class="h4-offer-banner-img mt-4">
                            <img src="/../rent_html/assets/img/home4/whell.png" alt="wheel" class="float-end">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-9">
                    <div class="row g-4">
                        <div class="col-xl-12">
                            <div class="h4-offer-banner box-style-2 rounded d-flex align-items-center justify-content-between overflow-hidden">
                                <div class="content-left">
                                    <h6 class="position-relative d-inline-block h4-subtitle text-white">New Arrival</h6>
                                    <h3 class="text-white mb-30">Moteri racing Rally<br class="d-none d-xxl-block"> Gold Custom</h3>
                                    <a href="product-details.html" class="btn btn-md header-white-btn">Shop Now</a>
                                </div>
                                <div class="content-right mt-30 mt-md-0">
                                    <img src="/../rent_html/assets/img/home4/offer-brake.png" alt="brake">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="h4-offer-banner box-style-3 rounded" data-background="/../rent_html/assets/img/home4/offer-banner-bg.jpg">
                                <h6 class="position-relative d-inline-block h4-subtitle text-white">Flash Sales(15%)</h6>
                                <h3 class="mb-30 text-white">Auto Repair System<br> Accessories</h3>
                                <a href="product-details.html" class="btn btn-primary btn-md">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--offer section end-->

    <!--best selling products-->
    <section class="best-selling ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title text-center text-xl-start mb-4 mb-xl-0">
                        <h6 class="position-relative text-primary d-inline-block h4-subtitle">Product</h6>
                        <h2 class="h1 mb-0">Best Selling Products</h2>
                    </div>
                </div>
                <div class="col-xl-6 align-self-end">
                    <div class="bs-filter-btn-group d-flex align-items-center justify-content-center justify-content-xl-end flex-wrap">
                        <button class="bs-filter-btn h4-filter-btn active" data-filter="*">New Arrivals</button>
                        <button class="bs-filter-btn h4-filter-btn" data-filter=".featured">Featured</button>
                        <button class="bs-filter-btn h4-filter-btn" data-filter=".bestsellers">Bestsellers</button>
                        <button class="bs-filter-btn h4-filter-btn" data-filter=".popular">Popular</button>
                    </div>
                </div>
            </div>
            <div class="best-selling-products-list mt-5">
                <div class="row g-4 justify-content-center filter_grid_3">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 popular">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-1.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Car Alternator Vehicle Spare part Automotive Engine Parts</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 featured">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-2.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Car Automobile repair shop Motor Vehicle Service</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 bestsellers">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-3.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 featured popular">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-4.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Car Automotive battery Battery recycling Starter</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 featured bestsellers">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-5.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Piston ring Reciprocating Free engine graphy</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 bestsellers popular">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-6.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Car Air filter Spare part AutoZone Disc brake</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 featured">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-7.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">Car Exhaust system Spark plug Motor vehicle Engine</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 popular bestsellers">
                        <div class="h4-ft-product-card bg-white rounded">
                            <div class="product-card-top position-relative overflow-hidden">
                                <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                <img src="/../rent_html/assets/img/home4/bs-8.jpg" alt="product" class="img-fluid feature-img">
                                <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="product-card-bottom mt-4">
                                <div class="product-rating mb-1">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <a href="product-details.html" class="product-title">black and brown air filter, Toyota RAV4 Car Oil filter</a>
                                <div class="product-pricing mt-2">
                                    <span class="sale-price">$780.00</span>
                                    <span class="offer-price text-primary">$480.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--best selling products end-->

    <!--brands section start-->
    <section class="h4-brands-section bg-secondary ptb-60 position-relative overflow-hidden z-1">
        <div class="brands-overlay-shape position-absolute start-0 top-0 w-100 h-100 z-2" data-background="/../rent_html/assets/img/shapes/offer-bg.png"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="h4-brands-left position-relative z-3">
                        <h3 class="text-white mb-2">Brand We Trust</h3>
                        <p class="mb-4">We carry over 250 of the world's highest quality automotive parts</p>
                        <a href="shop-grid.html" class="expore-btn fw-semibold">
                            <span class="me-2">
                                <svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9" stroke="#FC0012"/>
                                    <path d="M23.5556 6L28 10.5M28 10.5L23.5556 15M28 10.5H8" stroke="#FC0012" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>Browse All Brands
                        </a>
                        <div class="h4-brands-list mt-5 d-flex align-items-center flex-wrap">
                            <div class="brands-item d-inline-flex align-items-center justify-content-center">
                                <img src="/../rent_html/assets/img/brands/nissan.png" alt="nissan" class="img-fluid">
                            </div>
                            <div class="brands-item d-inline-flex align-items-center justify-content-center">
                                <img src="/../rent_html/assets/img/brands/acura.png" alt="nissan" class="img-fluid">
                            </div>
                            <div class="brands-item d-inline-flex align-items-center justify-content-center">
                                <img src="/../rent_html/assets/img/brands/ferrari.png" alt="nissan" class="img-fluid">
                            </div>
                            <div class="brands-item d-inline-flex align-items-center justify-content-center">
                                <img src="/../rent_html/assets/img/brands/hyundai.png" alt="nissan" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="h4-brands-right position-relative z-3 ps-lg-4 mt-100 mt-lg-0">
                        <span class="text-white subtitle fw-semibold">Subscribe To Our Newsletter!</span>
                        <h3 class="mt-2 text-white mb-4">Get The Latest News & <br>Amazing Offers</h3>
                        <form class="h4-sb-form position-relative mb-3">
                            <input type="email" placeholder="Enter Your Email">
                            <button type="submit" class="btn btn-secondary position-absolute end-0 top-0">Subscribe</button>
                        </form>
                        <span class="spam-warning fw-500 text-white">We don't send spam message</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--brands section end-->

    <!--top categories start-->
    <section class="top-categories pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-5">
                        <h2 class="h1 mb-3">Weekly Top Categories</h2>
                        <p class="mb-0">Progressively evisculate technically sound models rather than an expanded array of testing procedures rather than high-quality communities.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-6">
                    <div class="categories-slider-box bg-white overflow-hidden">
                        <div class="slider-box-top d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Wheels & Tires</h4>
                            <a href="shop-grid.html" class="h4-filter-btn btn">View All<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="h4-categories-slider-wrapper overflow-hidden">
                            <div class="h4_ct_slider_1 h4-categories-slider swiper overflow-visible">
                                <div class="swiper-wrapper">
                                    <div class="h4-ft-product-card bg-white rounded swiper-slide h4-categories-card">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <img src="/../rent_html/assets/img/home4/ct-product-1.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-rating">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-1">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded swiper-slide h4-categories-card">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <img src="/../rent_html/assets/img/home4/ct-product-2.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-rating">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-1">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded swiper-slide h4-categories-card">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <img src="/../rent_html/assets/img/home4/ct-product-3.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-rating">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-1">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flash-controls flash-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="flash-controls flash-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="categories-slider-box bg-white overflow-hidden">
                        <div class="slider-box-top d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Engine & Drivetrain</h4>
                            <a href="shop-grid.html" class="h4-filter-btn btn">View All<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="h4-categories-slider-wrapper overflow-hidden">
                            <div class="h4_ct_slider_1 h4-categories-slider swiper overflow-visible">
                                <div class="swiper-wrapper">
                                    <div class="h4-ft-product-card bg-white rounded swiper-slide h4-categories-card">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <img src="/../rent_html/assets/img/home4/ct-product-4.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-rating">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-1">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded swiper-slide h4-categories-card">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <img src="/../rent_html/assets/img/home4/ct-product-5.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-rating">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-1">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded swiper-slide h4-categories-card">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <img src="/../rent_html/assets/img/home4/ct-product-6.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-rating">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-1">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flash-controls flash-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="flash-controls flash-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="categories-slider-box bg-white">
                        <div class="slider-box-top d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Car Interior Parts</h4>
                            <a href="shop-grid.html" class="h4-filter-btn btn">View All<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="h4-categories-slider-wrapper overflow-hidden">
                            <div class="h4_ct_slider_2 h4-categories-slider swiper overflow-visible">
                                <div class="swiper-wrapper">
                                    <div class="h4-ft-product-card bg-white rounded h4-categories-card swiper-slide">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <img src="/../rent_html/assets/img/home4/ct-product-7.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom mt-4">
                                            <div class="product-rating mb-1">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title title-medium">Aluminium Wheel & Car Seat AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded h4-categories-card swiper-slide">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <img src="/../rent_html/assets/img/home4/ct-product-8.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom mt-4">
                                            <div class="product-rating mb-1">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title title-medium">Aluminium Wheel & Car Seat AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded h4-categories-card swiper-slide">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <img src="/../rent_html/assets/img/home4/ct-product-9.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom mt-4">
                                            <div class="product-rating mb-1">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title title-medium">Aluminium Wheel & Car Seat AR-19 Tire Parts</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4-ft-product-card bg-white rounded h4-categories-card swiper-slide">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <img src="/../rent_html/assets/img/home4/ct-product-10.jpg" alt="product" class="img-fluid feature-img">
                                            <div class="at_product_action position-absolute start-50 translate-middle-x z-1">
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn" data-bs-toggle="modal" data-bs-target="#at_product_view"><i class="fa-solid fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="cart-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom mt-4">
                                            <div class="product-rating mb-1">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <a href="product-details.html" class="product-title title-medium">Car BMW Halo head lights Motorcycle car</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flash-controls flash-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="flash-controls flash-button-next"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top categories end-->

    <!--blog section start-->
    <section class="h3-blog-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title-style-2 text-center text-lg-start">
                        <span class="subtitle lead text-secondary">Recent News & <mark class="bg-transparent p-0">Post</mark></span>
                        <h2 class="h1 mt-3 mb-0">Latest News & Offers</h2>
                    </div>
                </div>
                <div class="col-lg-5 align-self-end">
                    <div class="text-center text-lg-end mt-4 mt-lg-0">
                        <a href="blog-grid.html" class="btn btn-primary">More News</a>
                    </div>
                </div>
            </div>
            <div class="h3-blog-wrapper mt-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <article class="h3-blog-card">
                            <div class="feature-img rounded overflow-hidden">
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home3/blog-1.jpg" alt="feature image" class="img-fluid"></a>
                            </div>
                            <div class="h3-blog-card-content rounded">
                                <a href="blog-single.html">
                                    <h5>Toyota RAV4 prime, tesla model Y short by cheap rate...</h5>
                                </a>
                                <span>By <strong>Alice-</strong>02 July 2022</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="h3-blog-card">
                            <div class="feature-img rounded overflow-hidden">
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home3/blog-2.jpg" alt="feature image" class="img-fluid"></a>
                            </div>
                            <div class="h3-blog-card-content rounded">
                                <a href="blog-single.html">
                                    <h5>Toyota RAV4 prime, tesla model Y short by cheap rate...</h5>
                                </a>
                                <span>By <strong>Alice-</strong>02 July 2022</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="h3-blog-card">
                            <div class="feature-img rounded overflow-hidden">
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home3/blog-3.jpg" alt="feature image" class="img-fluid"></a>
                            </div>
                            <div class="h3-blog-card-content rounded">
                                <a href="blog-single.html">
                                    <h5>Toyota RAV4 prime, tesla model Y short by cheap rate...</h5>
                                </a>
                                <span>By <strong>Alice-</strong>02 July 2022</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--features section start-->
    <section class="h4-features position-relative z-2">
        <div class="container">
            <div class="h4-features-wrapper bg-white rounded d-flex align-items-center justify-content-center justify-content-xxl-between flex-wrap">
                <div class="h4-feature-item d-lg-flex align-items-center text-center text-lg-start">
                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center text-primary rounded-circle">
                        <i class="fa-solid fa-truck-fast"></i>
                    </span>
                    <div class="h4-feature-item-content mt-3 mt-lg-0 ms-lg-3">
                        <h6 class="mb-1">Free Shipping</h6>
                        <span class="pera-text-2">For order from $50</span>
                    </div>
                </div>
                <div class="h4-feature-item d-lg-flex align-items-center text-center text-lg-start">
                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center text-primary rounded-circle">
                        <i class="fa-solid fa-handshake"></i>
                    </span>
                    <div class="h4-feature-item-content mt-3 mt-lg-0 ms-lg-3">
                        <h6 class="mb-1">24/7 Customer Support </h6>
                        <span class="pera-text-2">Call us anytime & anywhere</span>
                    </div>
                </div>
                <div class="h4-feature-item d-lg-flex align-items-center text-center text-lg-start">
                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center text-primary rounded-circle">
                        <i class="fa-solid fa-heart"></i>
                    </span>
                    <div class="h4-feature-item-content mt-3 mt-lg-0 ms-lg-3">
                        <h6 class="mb-1">100% Safety & Secure</h6>
                        <span class="pera-text-2">For order from $50</span>
                    </div>
                </div>
                <div class="h4-feature-item d-lg-flex align-items-center text-center text-lg-start">
                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center text-primary rounded-circle">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </span>
                    <div class="h4-feature-item-content mt-3 mt-lg-0 ms-lg-3">
                        <h6 class="mb-1">Satisfied Or Refunded</h6>
                        <span class="pera-text-2">Guaranteed product warranty</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--features section end-->

@endsection
@section('scripts') @endsection
