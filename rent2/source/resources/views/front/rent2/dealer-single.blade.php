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
                        <h1 class="text-white">Starlight AutoMall</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Dealer Single</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--dealers section start-->
    <div class="dealers-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="dealer-single-info bg-white rounded d-lg-flex align-items-center">
                        <div class="dl_single_left rounded position-relative flex-shrink-0">
                            <img src="/../rent_html/assets/img/dealers/dealer-info-1.jpg" alt="not found" class="img-fluid rounded">
                            <span class="listing-count bg-white shadow py-1 px-3 fw-semibold rounded position-absolute start-0 bottom-0">15 Listing</span>
                        </div>
                        <div class="dl_single_right ms-lg-4 mt-4 mt-lg-0">
                            <ul class="rating_box d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li class="ms-1"><a href="#" class="pera-text-2">(5 Customer Review)</a></li>
                            </ul>
                            <h4 class="mb-0 mt-1">Starlight AutoMall</h4>
                            <div class="info-meta mt-1">
                                <span><i class="fa-solid fa-location-dot"></i>2690 USA-165, New York City, USA</span>
                                <a href="#" class="ms-3">Get Directions</a>
                            </div>
                            <p class="mt-3">Although brokers and agents do similar workbrokers are licensed to manage their owner real estate businesses brokers and agents do similar.</p>
                            <ul class="dl_info_meta d-flex align-items-center flex-wrap">
                                <li><a href="tel:+9087784565154"><span class="me-2"><i class="fa-brands fa-whatsapp"></i></span>+9087784565154</a></li>
                                <li><a href="tel:+9087784565154"><span class="me-2"><i class="fa-solid fa-envelope"></i></span>autohive@gmail.com</a></li>
                                <li><a href="tel:+9087784565154"><span class="me-2"><i class="fa-regular fa-clock"></i></span>+8.00-16.00PM</a></li>
                            </ul>
                            <div class="review_share_btns mt-20">
                                <a href="#"><span class="me-2"><i class="fa-solid fa-star"></i></span>Write a Review</a>
                                <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="dealer-single-tab mt-60">
                        <ul class="nav nav-tabs">
                            <li><a href="#inventory" class="active" data-bs-toggle="tab">Dealer's Inventory</a></li>
                            <li><a href="#reviews" data-bs-toggle="tab">Dealer's Reviews</a></li>
                            <li><a href="#review-box" data-bs-toggle="tab">Dealer's Write a Review</a></li>
                        </ul>
                        <div class="tab-content mt-30">
                            <div class="tab-pane fade active show" id="inventory">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-1.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-2.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-3.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-4.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-5.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-6.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-7.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-3.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="filter-card-item position-relative overflow-hidden rounded bg-white">
                                            <a href="#" class="icon-btn compare-btn position-absolute"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="icon-btn wish-btn position-absolute"><i class="fa-solid fa-heart"></i></a>
                                            <span class="date position-absolute">2017</span>
                                            <div class="feature-thumb position-relative overflow-hidden">
                                                <a href="car-rental.html"><img src="/../rent_html/assets/img/home1/car-8.jpg" alt="car" class="img-fluid"></a>
                                            </div>
                                            <div class="filter-card-content">
                                                <div class="price-btn text-end position-relative">
                                                    <span class="small-btn-meta">$174,900</span>
                                                </div>
                                                <a href="car-rental.html" class="mt-4 d-block">
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
                                                <a href="car-rental.html" class="btn outline-btn btn-sm d-block">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="template-pagination mt-5 pg-style-2">
                                    <ul class="d-flex justify-content-center justify-content-xxl-start">
                                        <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#" class="active">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <ul class="dealer_reviews">
                                    <li class="d-flex align-items-center">
                                        <img src="/../rent_html/assets/img/author/cm-user-1.jpg" alt="client" class="flex-shrink-0 rounded-circle">
                                        <div class="review_content ms-3">
                                            <h6 class="mb-1">Daisy Waterstone. <span class="date ms-4">January 13, 2021</span></h6>
                                            <ul class="review-stars d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <p class="mb-0 mt-3">Aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien auctor tortoris vulput sapien tortor velit. Sed nulla congue Curabitr.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="/../rent_html/assets/img/author/cm-user-2.jpg" alt="client" class="flex-shrink-0 rounded-circle">
                                        <div class="review_content ms-3">
                                            <h6 class="mb-1">Hamil Alexander. <span class="date ms-4">January 13, 2021</span></h6>
                                            <ul class="review-stars d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <p class="mb-0 mt-3">Aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien auctor tortoris vulput sapien tortor velit. Sed nulla congue Curabitr.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="/../rent_html/assets/img/author/seller.jpg" alt="client" class="flex-shrink-0 rounded-circle">
                                        <div class="review_content ms-3">
                                            <h6 class="mb-1">Daisy Waterstone <span class="date ms-4">January 13, 2021</span></h6>
                                            <ul class="review-stars d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <p class="mb-0 mt-3">Aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien auctor tortoris vulput sapien tortor velit. Sed nulla congue Curabitr.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="review-box">
                                <div class="review_box bg-white p-4 rounded">
                                    <h6>Write a Review</h6>
                                    <hr class="w-50 mb-4">
                                    <div class="review-form-wrap">
                                        <span>Your Rating & Review</span>
                                        <ul class="rating d-flex">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <form action="#" class="mt-4">
                                            <input type="text" placeholder="Your Title" class="border w-100 rounded">
                                            <textarea class="border w-100 mt-3 rounded px-3 py-2" rows="6" placeholder="Your Review"></textarea>
                                            <button type="submit" class="btn btn-primary btn-md mt-4">Submit Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="dl_single_sidebar mt-5 mt-xl-0">
                        <div class="dl_sidebar_widget dl_contact_widget bg-white">
                            <h6 class="mb-3">Contact With This Automall</h6>
                            <form action="#" class="dl_form_style">
                                <input type="text" placeholder="Your full name" class="border w-100 rounded">
                                <input type="tel" placeholder="Phone" class="border w-100 rounded mt-3">
                                <input type="email" placeholder="Email" class="border w-100 rounded mt-3">
                                <textarea placeholder="Message" class="border mt-3 w-100 rounded" rows="4"></textarea>
                                <button class="btn btn-secondary w-100 btn-md mt-4">Submit Now</button>
                            </form>
                        </div>
                        <div class="dl_sidebar_widget dl_info_widget bg-white p-3 pb-4 mt-4">
                            <img src="/../rent_html/assets/img/dealers/man.jpg" alt="not found" class="img-fluid rounded">
                            <h6 class="mt-20 mb-3">Do you want to join our Autohive Car Network?</h6>
                            <a href="#" class="btn btn-primary btn-sm">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--dealers section end-->

@endsection
@section('scripts') @endsection
