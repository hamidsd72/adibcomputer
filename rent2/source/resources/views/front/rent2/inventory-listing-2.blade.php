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
                        <h1 class="text-white">Inventory Listings</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Vehicle Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--inventory details-->
    <section class="inventory-details-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="iv2_sidebar bg-white rounded overflow-hidden">
                        <div class="iv2_sidebar_widget iv2_search_widget">
                            <h6 class="mb-3">What Are You Looking For</h6>
                            <form class="d-flex align-items-center">
                                <input type="text" placeholder="Search Vehicle" class="border border-end-0 rounded-start w-100">
                                <button type="submit" class="bg-transparent border rounded-end flex-shrink-0"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_1" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Make</a>
                                    </h6>
                                    <div class="collapse show" id="acc_1">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Chevrolet</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Ford</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Honda</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Kia</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Honda</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Marcediz Benz</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>MG</label></li>
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
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_2" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Body Type</a>
                                    </h6>
                                    <div class="collapse show" id="acc_2">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Suv</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Crossover</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Compact</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Convertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Marcediz Benz</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Covertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_3" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Offer Type</a>
                                    </h6>
                                    <div class="collapse" id="acc_3">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Suv</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Crossover</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Compact</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Convertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Marcediz Benz</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Covertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_4" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Year</a>
                                    </h6>
                                    <div class="collapse" id="acc_4">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2022</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2021</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2020</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2019</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2018</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2017</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2016</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2015</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2014</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2013</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2012</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2011</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_5" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Transmission</a>
                                    </h6>
                                    <div class="collapse" id="acc_5">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Suv</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Crossover</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Compact</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Convertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Marcediz Benz</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Covertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_6" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Drive Type</a>
                                    </h6>
                                    <div class="collapse" id="acc_6">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Suv</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Crossover</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Compact</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Convertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Marcediz Benz</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Sedan</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Covertible</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Wagon</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Pickup</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_7" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Exterior Color</a>
                                    </h6>
                                    <div class="collapse" id="acc_7">
                                        <div class="accordion-body ps-0 pb-0 pe-2">
                                            <ul class="iv2_sidebar_list at_scrollbar">
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>White</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Black</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Gray</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Silver</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Red</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Blue</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Brown</label></li>
                                                <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Green</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iv2_sidebar_widget iv2_rangeslider_widget">
                            <div class="accordion iv2_sidebar_accordion">
                                <div class="accordion-item border-0">
                                    <h6 class="accordion-header">
                                        <a href="#acc_8" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Price Range</a>
                                    </h6>
                                    <div class="collapse" id="acc_8">
                                        <div class="accordion-body ps-0 pb-0">
                                            <div id="slider-range" class="price-filter-range">

                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <input type="text" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                                                <span class="d-inline-block ms-2 me-2 fw-bold">-</span>
                                                <input type="text" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-secondary btn-md mt-40 w-100">Filter Result</a>
                    </div>
                    <div class="iv_banner_widget mt-4 rounded overflow-hidden">
                        <a href="#"><img src="/../rent_html/assets/img/inventory/banner.jpg" alt="not found" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="iv_listing mt-5 mt-xl-0">
                        <div class="iv_listing_top d-flex flex-wrap align-items-center bg-white justify-content-center justify-content-sm-between rounded mb-4">
                            <p class="mb-0 fw-500 d-inline-block">Showing 1-12 of 120 Results</p>
                            <div class="iv_listing_filter_menu d-flex flex-wrap align-items-center justify-content-center">
                                <p class="mb-0 flex-shrink-0 fw-semibold">Sort by:</p>
                                <select class="form-select fw-500">
                                    <option>Newest First</option>
                                    <option>Most Popular</option>
                                    <option>Most Rated</option>
                                </select>
                                <a href="inventory-listing.html" class="grid_btn"><i class="flaticon-menu-1"></i></a>
                                <a href="inventory-listing-2.html" class="grid_btn active"><i class="flaticon-list-interface-symbol"></i></a>
                            </div>
                        </div>
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-1.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Ford Explorer XLT-2018</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-2.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Mazda MX Miata</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-3.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Tesla Roadster 2021</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-4.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Lexus RX-350 2021</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-5.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Chevrolet Suburban 2021</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-6.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Ford Explorer XLT-2018</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="car-rental.html"><img src="/../rent_html/assets/img/inventory/list-7.jpg" alt="car" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">$174,900</span>
                                        <a href="car-rental.html">
                                            <h5 class="mb-1">Ford Explorer XLT-2018</h5>
                                        </a>
                                        <span class="meta-text"><strong class="fw-semibold">Listed by : </strong> Mickey Dominguez</span>
                                        <p class="mt-3 mb-4 pera-text-2">Proactively harness intermandated manufactured products and one-to-one communities. Efficiently whiteboard interoperable markets before.</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                120cc
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                Manual
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                Petrol
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="template-pagination mt-5 pg-style-2">
                            <ul class="d-flex align-items-center justify-content-center">
                                <li><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inventory details end-->

@endsection
@section('scripts') @endsection
    