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

    <!--breadcrumb section start-->
    <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
        <img src="/../rent_html/assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
        <img src="/../rent_html/assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                        <h1 class="text-white">Shop Grid</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Shop Grid</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--shop page-->
    <div class="shop-page ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="shop-sidebar">
                        <div class="shop-sidebar-widget shop-categories-widget bg-white py-4 px-3">
                            <h6>Filters</h6>
                            <hr class="mt-3 mb-3">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_1" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Categories</a>
                                    </h6>
                                    <div class="collapse show" id="acc_1">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="shop_sidebar_ct_list at_scrollbar">
                                                <li><a href="shop-grid.html">Headlights & Lighting<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Interior Parts <span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Switches & Relays<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Tires & Wheels<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Fuel Systems<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Steering<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Body Parts<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Air Filters<span class="float-end">152</span></a></li>
                                                <li><a href="shop-grid.html">Wipers & Washers<span class="float-end">152</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sidebar-widget shop-brands-widget bg-white py-4 px-3 border-top">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_2" class="accordion-button bg-transparent text-secondary p-0 pe-1 shadow-none" data-bs-toggle="collapse">Parts brand</a>
                                    </h6>
                                    <div class="collapse show" id="acc_2">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar pt-2">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wakita</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Zosch</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>WeVALT</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Hammer</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Mitasia</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Metaggo</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Tesla</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Ford</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Kia</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Tesla</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Honda</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sidebar-widget shop-range-widget bg-white border-top py-4 px-3">
                            <div class="iv2_sidebar_widget iv2_rangeslider_widget">
                                <div class="accordion iv2_sidebar_accordion">
                                    <div class="accordion-item border-0">
                                        <h6 class="accordion-header ">
                                            <a href="#acc_8" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Price Range</a>
                                        </h6>
                                        <div class="collapse show" id="acc_8">
                                            <div class="accordion-body ps-0 pb-0">
                                                <div id="slider-range" class="price-filter-range mt-4"></div>
                                                <form class="range-filter d-flex align-items-center justify-content-between mt-20">
                                                    <div class="d-flex align-items-center">
                                                        <input type="text" oninput="validity.valid||(value='500');" id="min_price" class="price-range-field" />
                                                        <span class="d-inline-block ms-2 me-2 fw-bold">-</span>
                                                        <input type="text" oninput="validity.valid||(value='1000');" id="max_price" class="price-range-field" />
                                                    </div>
                                                    <button type="submit" class="btn btn-sm submit-btn ms-3">Filter</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sidebar-widget shop-colors-widget bg-white border-top py-4 px-3 overflow-hidden">
                            <div class="iv2_sidebar_widget">
                                <div class="accordion iv2_sidebar_accordion">
                                    <div class="accordion-item border-0">
                                        <h6 class="accordion-header ">
                                            <a href="#acc_9" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Color</a>
                                        </h6>
                                        <div class="collapse show" id="acc_9">
                                            <div class="accordion-body ps-0 pb-0">
                                                <form action="#">
                                                    <label><input type="checkbox"><span class="bg-primary"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-secondary"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-success"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-info"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-warning"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-danger"><i class="fa-solid fa-check"></i></span></label>
                                                    <br>
                                                    <label><input type="checkbox"><span class="bg-dark"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-success"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-primary"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-warning"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-info"><i class="fa-solid fa-check"></i></span></label>
                                                    <label><input type="checkbox"><span class="bg-dark"><i class="fa-solid fa-check"></i></span></label>
                                                    <div class="filter-btns mt-5">
                                                        <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                                        <button type="submit" class="btn reset-btn btn-sm">Reset</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sidebar-widget shop-slider-widget bg-white py-4 px-3 mt-4">
                            <h6 class="mb-3">Latest Products</h6>
                            <div class="shop-products-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h4-ft-product-card bg-white rounded border">
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
                                                <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                                <div class="product-pricing mt-2">
                                                    <span class="sale-price">$780.00</span>
                                                    <span class="offer-price text-primary">$480.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h4-ft-product-card bg-white rounded border">
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
                                                <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
                                                <div class="product-pricing mt-2">
                                                    <span class="sale-price">$780.00</span>
                                                    <span class="offer-price text-primary">$480.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h4-ft-product-card bg-white rounded border">
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
                                                <a href="product-details.html" class="product-title">Aluminium Wheel AR-19 Tire Parts</a>
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
                        <div class="shop-sidebar-widget shop-products-widget py-4 px-3 border-top bg-white overflow-hidden">
                            <ul class="products">
                                <li class="d-flex align-items-center">
                                    <a href="product-details.html" class="feature-thumb border rounded d-flex align-items-center justify-content p-1">
                                        <img src="/../rent_html/assets/img/products/product-sm-1.png" alt="not found" class="img-fluid">
                                    </a>
                                    <div class="content-right ms-3">
                                        <ul class="rating-box d-flex">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <a href="product-details.html" class="title">Car AirFilter Spare part Disc brake</a>
                                        <div class="price">
                                            <del>$700</del>
                                            <span class="ms-2 text-primary">$780.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mt-5">
                                    <a href="product-details.html" class="feature-thumb border rounded d-flex align-items-center justify-content p-1">
                                        <img src="/../rent_html/assets/img/products/product-sm-3.png" alt="not found" class="img-fluid">
                                    </a>
                                    <div class="content-right ms-3">
                                        <ul class="rating-box d-flex">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <a href="product-details.html" class="title">Car AirFilter Spare part Disc brake</a>
                                        <div class="price">
                                            <del>$700</del>
                                            <span class="ms-2 text-primary">$780.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mt-5">
                                    <a href="product-details.html" class="feature-thumb border rounded d-flex align-items-center justify-content p-1">
                                        <img src="/../rent_html/assets/img/products/product-sm-1.png" alt="not found" class="img-fluid">
                                    </a>
                                    <div class="content-right ms-3">
                                        <ul class="rating-box d-flex">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <a href="product-details.html" class="title">Car AirFilter Spare part Disc brake</a>
                                        <div class="price">
                                            <del>$700</del>
                                            <span class="ms-2 text-primary">$780.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>







                </div>
                <div class="col-xl-9">
                    <div class="shop-grid">
                        <div class="iv_listing_top d-flex flex-wrap align-items-center bg-white justify-content-center justify-content-sm-between rounded mb-4">
                            <p class="mb-0 fw-500 d-inline-block">Showing 1-12 of 120 Results</p>
                            <div class="iv_listing_filter_menu d-flex flex-wrap align-items-center justify-content-center">
                                <p class="mb-0 flex-shrink-0 fw-semibold">Sort by:</p>
                                <select class="form-select fw-500">
                                    <option>Newest First</option>
                                    <option>Most Popular</option>
                                    <option>Most Rated</option>
                                </select>
                                <a href="#" class="grid_btn active"><i class="flaticon-menu-1"></i></a>
                                <a href="#" class="grid_btn"><i class="flaticon-list-interface-symbol"></i></a>
                            </div>
                        </div>
                        <div class="shop-grid-items mt-4">
                            <div class="row g-4">
                                <div class="col-lg-4 col-sm-6">
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
                                <div class="col-lg-4 col-sm-6">
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
                                            <a href="product-details.html" class="product-title">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
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
                                            <a href="product-details.html" class="product-title">Car Exhaust system Spark plug Motor vehicle Engine</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
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
                                            <a href="product-details.html" class="product-title">Fuel- D556 Coupler 1pc Black with Machine</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-5.jpg" alt="product" class="img-fluid feature-img">
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
                                            <a href="product-details.html" class="product-title">Car Suspension Vehicle graphy Automotive Engine Parts</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-6.jpg" alt="product" class="img-fluid feature-img">
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
                                            <a href="product-details.html" class="product-title">Car Vehicle Spare Automotive Engine Parts</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-7.jpg" alt="product" class="img-fluid feature-img">
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-8.jpg" alt="product" class="img-fluid feature-img">
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
                                            <a href="product-details.html" class="product-title">Car Automobile repair shop Engine Motor Vehicle Service</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-9.jpg" alt="product" class="img-fluid feature-img">
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-10.jpg" alt="product" class="img-fluid feature-img">
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-11.jpg" alt="product" class="img-fluid feature-img">
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-12.jpg" alt="product" class="img-fluid feature-img">
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-13.jpg" alt="product" class="img-fluid feature-img">
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-14.jpg" alt="product" class="img-fluid feature-img">
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
                                            <a href="product-details.html" class="product-title">Car Automotive Battery recycling Starter</a>
                                            <div class="product-pricing mt-2">
                                                <span class="sale-price">$780.00</span>
                                                <span class="offer-price text-primary">$480.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="h4-ft-product-card bg-white rounded">
                                        <div class="product-card-top position-relative overflow-hidden">
                                            <span class="discount-badge position-absolute fw-500 z-1">-30%</span>
                                            <a href="#" class="wish-btn position-absolute rounded-circle z-1"><i class="fas fa-heart"></i></a>
                                            <img src="/../rent_html/assets/img/home4/fp-15.jpg" alt="product" class="img-fluid feature-img">
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
                            </div>
                            <div class="template-pagination pg-style-2 mt-5">
                                <ul class="d-flex">
                                    <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shop page end-->

@endsection
@section('scripts') @endsection
