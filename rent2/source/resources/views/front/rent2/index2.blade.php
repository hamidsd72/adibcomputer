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

    <!--hero section start-->
    <section class="rent-hero position-relative overflow-hidden z-1" data-background="/../rent_html/assets/img/home2/hero-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11">
                    <div class="rent-hero-content text-center">
                        <h1 class="display-3 text-white mb-4">Search Book & <br class="d-none d-sm-block"> Rent Vehicle Easily</h1>
                        <p class="lead fw-normal">Minitrinsicly conceptualize enterprise-wide services for high-quality expertise Synergistically sources vis-a-vis bleeding-edge action.</p>
                        <div class="apps-btn-group mt-40 d-flex align-items-center justify-content-center flex-wrap">
                            <a href="#" class="app-btn primary-btn d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2"><i class="fa-brands fa-google-play"></i></span>
                                <div class="app-btn-content text-start">
                                    <span>Get it on</span>
                                    <strong>Google Play</strong>
                                </div>
                            </a>
                            <a href="#" class="app-btn white-btn d-inline-flex align-items-center">
                                <span class="icon-wrapper me-2"><i class="fa-brands fa-apple"></i></span>
                                <div class="app-btn-content text-start">
                                    <span>Get it on</span>
                                    <strong>App Store</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--brand section start-->
    <section class="brands-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="at-section-title text-center">
                        <span class="at-subtitle lead text-primary position-relative">Browse Top Car</span>
                        <h2 class="mt-1 mb-0 h1">Popular Car Body Types</h2>
                    </div>
                </div>
            </div>
            <div class="ct-row d-flex align-items-center justify-content-center flex-wrap mt-5">
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/crossover.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/crossover-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Crossover</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/suv.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/suv-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Suv</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/sedan.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/sedan-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Sedan</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/wagon.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/wagon-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Wagon</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/coup.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/coup-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Coup</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/convertible.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/convertible-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Convertible</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/compact.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/compact-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Compact</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/sport-coupe.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/sport-coupe-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Sport Coupe</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/pickup.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/pickup-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Pickup</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="ct-col">
                    <div class="brand-card text-center bg-white position-relative rounded">
                        <img src="/../rent_html/assets/img/icons/mpv.svg" alt="crossover" class="img-fluid icon-black">
                        <img src="/../rent_html/assets/img/icons/mpv-red.svg" alt="crossover" class="img-fluid icon-red">
                        <h5 class="mt-3 mb-0">Family MPV</h5>
                        <a href="inventory-listing.html" class="explore-btn position-absolute text-white"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="brands-explore-btn text-center mt-5">
                <a href="inventory-listing.html" class="link-btn fw-bold d-inline-flex align-items-center">
                    <span class="me-2"><img src="/../rent_html/assets/img/icons/arrow-black.png" alt="arrow"></span>
                    View All
                    <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!--brand section end-->

    <!--steps area start-->
    <section class="steps-area pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="steps-left">
                        <div class="at-section-title">
                            <span class="at-subtitle position-relative text-primary lead">How It Works</span>
                            <h2 class="h1 mb-0 mt-2">How Autohive <br> Car Rental Works 3 Steps.</h2>
                        </div>
                        <div class="steps-list mt-5">
                            <div class="steps-box about-icon-box bg-white rounded d-flex align-items-center position-relative">
                                <div class="ab-icon-box-top d-flex align-items-center">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-pin"></i></span>
                                </div>
                                <div class="icon-box-content ms-4">
                                    <h5 class="mb-2">Choose Location</h5>
                                    <p class="mb-0">Quickly integrate holistic sources via wireless internal or organic sources. Efficiently deploy.</p>
                                </div>
                                <span class="icon-bg position-absolute"><i class="flaticon-pin"></i></span>
                            </div>
                            <div class="steps-box about-icon-box bg-white rounded d-flex align-items-center mt-4 position-relative">
                                <div class="ab-icon-box-top d-flex align-items-center">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-calendar"></i></span>
                                </div>
                                <div class="icon-box-content ms-4">
                                    <h5 class="mb-2">Pick Up Date</h5>
                                    <p class="mb-0">Dynamically exploit professional outsourcing before visionary band width. build compelling platforms.</p>
                                </div>
                                <span class="icon-bg position-absolute"><i class="flaticon-calendar"></i></span>
                            </div>
                            <div class="steps-box about-icon-box bg-white rounded d-flex align-items-center mt-4 position-relative">
                                <div class="ab-icon-box-top d-flex align-items-center">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded"><i class="flaticon-drive"></i></span>
                                </div>
                                <div class="icon-box-content ms-4">
                                    <h5 class="mb-2">Book Your Car</h5>
                                    <p class="mb-0">Quickly integrate holistic sources via wireless internal or organic sources. Efficiently deploy.</p>
                                </div>
                                <span class="icon-bg position-absolute"><i class="flaticon-drive"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="pickup-form-wrapper mt-50 mt-lg-0 position-relative z-1">
                        <ul class="nav nav-tabs border-0">
                            <li><a href="#new_car" data-bs-toggle="tab">New Car</a></li>
                            <li><a href="#motor_bike" class="active" data-bs-toggle="tab">Motor Bike</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="new_car">
                                <form class="pickup-form bg-white rounded-1">
                                    <h5 class="mb-3">Pick UP</h5>
                                    <select class="form-select">
                                        <option>Uttara, Dhaka, Bangladesh</option>
                                        <option>Mirpur, Dhaka, Bangladesh</option>
                                        <option>Gazipur, Dhaka, Bangladesh</option>
                                    </select>
                                    <div class="checkbox-field mt-2">
                                        <input type="checkbox" id="pickup-checkbox">
                                        <label for="pickup-checkbox" class="ms-2">Return the same Location</label>
                                    </div>
                                    <div class="date-field mt-20 position-relative">
                                        <input type="text" class="border w-100 rounded theme-date-input" placeholder="08/09/2022 11:36 AM">
                                    </div>
                                    <div class="return-field mt-30">
                                        <h5 class="mb-3">Return</h5>
                                        <select class="form-select">
                                            <option>Downtown Location</option>
                                            <option>Mirpur, Dhaka, Bangladesh</option>
                                            <option>Gazipur, Dhaka, Bangladesh</option>
                                        </select>
                                        <div class="date-field mt-20 position-relative">
                                            <input type="text" class="border w-100 rounded theme-date-input" placeholder="08/09/2022 11:36 AM">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary mt-5">Find a Vehicle<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                            <div class="tab-pane fade show active" id="motor_bike">
                                <form class="pickup-form bg-white rounded-1">
                                    <h5 class="mb-3">Pick UP</h5>
                                    <select class="form-select">
                                        <option>Uttara, Dhaka, Bangladesh</option>
                                        <option>Mirpur, Dhaka, Bangladesh</option>
                                        <option>Gazipur, Dhaka, Bangladesh</option>
                                    </select>
                                    <div class="checkbox-field mt-2">
                                        <input type="checkbox" id="pickup-checkbox2">
                                        <label for="pickup-checkbox2" class="ms-2">Return the same Location</label>
                                    </div>
                                    <div class="date-field mt-20 position-relative">
                                        <input type="text" class="border w-100 rounded theme-date-input" placeholder="08/09/2022 11:36 AM">
                                    </div>
                                    <div class="return-field mt-30">
                                        <h5 class="mb-3">Return</h5>
                                        <select class="form-select">
                                            <option>Downtown Location</option>
                                            <option>Mirpur, Dhaka, Bangladesh</option>
                                            <option>Gazipur, Dhaka, Bangladesh</option>
                                        </select>
                                        <div class="date-field mt-20 position-relative">
                                            <input type="text" class="border w-100 rounded theme-date-input" placeholder="08/09/2022 11:36 AM">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary mt-5">Find a Vehicle<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                        <img src="/../rent_html/assets/img/shapes/primary-tire-gradient.png" alt="tire shape" class="position-absolute z--1 tire-shape">
                        <img src="/../rent_html/assets/img/shapes/dot-shape.png" alt="dot shape" class="position-absolute dot-shape z--1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--steps area end-->

    <!--offer section start-->
    <section class="offer-section position-relative z-1 overflow-hidden pt-120 position-relative z-1 overflow-hidden" data-background="/../rent_html/assets/img/shapes/texture-bg.png">
        <img src="/../rent_html/assets/img/shapes/offer-double-circle.png" alt="shape" class="position-absolute offer-double-circle z--1">
        <img src="/../rent_html/assets/img/shapes/offer-road.png" alt="road" class="position-absolute start-0 top-0 z--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="offer-left">
                        <div class="title-style-2">
                            <span class="subtitle d-block text-white lead mb-20">Limited time <mark class="text-primary bg-transparent p-0">offer</mark></span>
                            <h2 class="h1 text-white mb-20">Marcediz Benz Pro 2.0</h2>
                            <p class="mb-40">Authoritatively synthesize integrated value through flexible metrics. Seamlessly evolve scenarios without customer directed channels. </p>
                            <a href="car-rental.html" class="btn btn-primary">Book Now<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end order-1 order-lg-2">
                    <div class="offer-right position-relative z-1">
                        <span class="small-circle-shape position-absolute z--1"></span>
                        <img src="/../rent_html/assets/img/home2/offer-car.png" alt="not found" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--offer section end-->

    <!--car slider start-->
    <section class="car-slider ptb-120 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-style-2 text-center">
                        <span class="subtitle text-secondary lead">Special <mark class="bg-transparent text-primary p-0">Car</mark></span>
                        <h2 class="h1 mt-3 mb-0">Choose Your Perfect Car</h2>
                    </div>
                </div>
            </div>
            <div class="car-double-slider position-relative mt-5 position-relative">
                <img src="/../rent_html/assets/img/shapes/plus-rectangle.png" alt="plus" class="position-absolute plus-rectangle">
                <div class="car-thumb-slider-wrapper">
                    <div class="swiper car-thumb-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide car-thumb-single">
                                <img src="/../rent_html/assets/img/home2/car-thumb-1.png" alt="car" class="img-fluid">
                            </div>
                            <div class="swiper-slide car-thumb-single">
                                <img src="/../rent_html/assets/img/home2/car-thumb-2.png" alt="car" class="img-fluid">
                            </div>
                            <div class="swiper-slide car-thumb-single">
                                <img src="/../rent_html/assets/img/home2/car-thumb-3.png" alt="car" class="img-fluid">
                            </div>
                            <div class="swiper-slide car-thumb-single">
                                <img src="/../rent_html/assets/img/home2/car-thumb-3.png" alt="car" class="img-fluid">
                            </div>
                        </div>
                        <div class="slider-button-next slider-btn"><i class="fa-solid fa-arrow-right"></i></div>
                        <div class="slider-button-prev slider-btn"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                </div>
                <div class="car-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="car-slider-single position-relative overflow-hidden swiper-slide">
                            <div class="car-slider-item-left bg-white p-4">
                                <img src="/../rent_html/assets/img/home2/car-slide-1.jpg" alt="not found" class="img-fluid">
                            </div>
                            <div class="car-slider-item-right bg-white rounded">
                                <span class="btn-meta bg-primary-light text-secondary"><span class="me-1 text-primary"><i class="fas fa-heart"></i></span>1.5k likes</span>
                                <a href="car-rental.html">
                                    <h4>Maercedes Benz i7</h4>
                                </a>
                                <div class="pricing-info d-flex align-items-center mt-4">
                                    <div class="info-left">
                                        <span class="text-secondary fw-semibold"><span class="h4 text-primary mb-0 d-inline-block">$380</span> /Day</span>
                                    </div>
                                    <div class="info-right ms-4">
                                        <span class="text-secondary fw-semibold"><span class="h4 mb-0 d-inline-block">$38500</span> /Month</span>
                                    </div>
                                </div>
                                <p class="mt-4 mb-3">Credibly customize value-added for end-to-end delivery Enthusiastically synergize process-centric partnerships through paradigms. </p>
                                <ul class="car-info mt-3 mb-30 fw-semibold fs-md">
                                    <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                    <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                    <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                                </ul>
                                <a href="car-rental.html" class="btn btn-primary btn-sm">Order Now</a>
                            </div>
                        </div>
                        <div class="car-slider-single position-relative overflow-hidden swiper-slide">
                            <div class="car-slider-item-left bg-white p-4">
                                <img src="/../rent_html/assets/img/home2/car-slide-1.jpg" alt="not found" class="img-fluid">
                            </div>
                            <div class="car-slider-item-right bg-white rounded">
                                <span class="btn-meta bg-primary-light text-secondary"><span class="me-1 text-primary"><i class="fas fa-heart"></i></span>1.5k likes</span>
                                <a href="car-rental.html">
                                    <h4>Maercedes Benz i7</h4>
                                </a>
                                <div class="pricing-info d-flex align-items-center mt-4">
                                    <div class="info-left">
                                        <span class="text-secondary fw-semibold"><span class="h4 text-primary mb-0 d-inline-block">$380</span> /Day</span>
                                    </div>
                                    <div class="info-right ms-4">
                                        <span class="text-secondary fw-semibold"><span class="h4 mb-0 d-inline-block">$38500</span> /Month</span>
                                    </div>
                                </div>
                                <p class="mt-4 mb-3">Credibly customize value-added for end-to-end delivery Enthusiastically synergize process-centric partnerships through paradigms. </p>
                                <ul class="car-info mt-3 mb-30 fw-semibold fs-md">
                                    <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                    <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                    <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                                </ul>
                                <a href="car-rental.html" class="btn btn-primary btn-sm">Order Now</a>
                            </div>
                        </div>
                        <div class="car-slider-single position-relative overflow-hidden swiper-slide">
                            <div class="car-slider-item-left bg-white p-4">
                                <img src="/../rent_html/assets/img/home2/car-slide-1.jpg" alt="not found" class="img-fluid">
                            </div>
                            <div class="car-slider-item-right bg-white rounded">
                                <span class="btn-meta bg-primary-light text-secondary"><span class="me-1 text-primary"><i class="fas fa-heart"></i></span>1.5k likes</span>
                                <a href="car-rental.html">
                                    <h4>Maercedes Benz i7</h4>
                                </a>
                                <div class="pricing-info d-flex align-items-center mt-4">
                                    <div class="info-left">
                                        <span class="text-secondary fw-semibold"><span class="h4 text-primary mb-0 d-inline-block">$380</span> /Day</span>
                                    </div>
                                    <div class="info-right ms-4">
                                        <span class="text-secondary fw-semibold"><span class="h4 mb-0 d-inline-block">$38500</span> /Month</span>
                                    </div>
                                </div>
                                <p class="mt-4 mb-3">Credibly customize value-added for end-to-end delivery Enthusiastically synergize process-centric partnerships through paradigms. </p>
                                <ul class="car-info mt-3 mb-30 fw-semibold fs-md">
                                    <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                    <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                    <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                                </ul>
                                <a href="car-rental.html" class="btn btn-primary btn-sm">Order Now</a>
                            </div>
                        </div>
                        <div class="car-slider-single position-relative overflow-hidden swiper-slide">
                            <div class="car-slider-item-left bg-white p-4">
                                <img src="/../rent_html/assets/img/home2/car-slide-1.jpg" alt="not found" class="img-fluid">
                            </div>
                            <div class="car-slider-item-right bg-white rounded">
                                <span class="btn-meta bg-primary-light text-secondary"><span class="me-1 text-primary"><i class="fas fa-heart"></i></span>1.5k likes</span>
                                <a href="car-rental.html">
                                    <h4>Maercedes Benz i7</h4>
                                </a>
                                <div class="pricing-info d-flex align-items-center mt-4">
                                    <div class="info-left">
                                        <span class="text-secondary fw-semibold"><span class="h4 text-primary mb-0 d-inline-block">$380</span> /Day</span>
                                    </div>
                                    <div class="info-right ms-4">
                                        <span class="text-secondary fw-semibold"><span class="h4 mb-0 d-inline-block">$38500</span> /Month</span>
                                    </div>
                                </div>
                                <p class="mt-4 mb-3">Credibly customize value-added for end-to-end delivery Enthusiastically synergize process-centric partnerships through paradigms. </p>
                                <ul class="car-info mt-3 mb-30">
                                    <li class="fw-semibold"><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                    <li class="fw-semibold"><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                    <li class="fw-semibold"><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                                </ul>
                                <a href="car-rental.html" class="btn btn-primary btn-sm">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--car slider end-->

    <!--tutorial section start-->
    <section class="tutorial-section ptb-120 position-relative z-1" data-background="/../rent_html/assets/img/home2/tutorial-bg.jpg">
        <a href="https://www.youtube.com/watch?v=6WZOxnYi4Cs" class="video-popup-btn d-inline-flex align-items-center justify-content-center rounded-circle text-white bg-primary"><i class="fas fa-play"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="tutorial-left mb-5 mb-xl-0">
                        <div class="at-section-title pe-0 pe-sm-5">
                            <span class="at-subtitle position-relative lead text-white shape-primary">Do you Need a <mark class="text-primary bg-transparent p-0">Tutorial</mark></span>
                            <h2 class="h1 text-white mt-20">Save Time & Money with Top Rent Car Service Your Country.</h2>
                            <a href="inventory-listing.html" class="fw-bold mt-30 d-inline-block">
                                <span class="me-2">
                                    <svg width="50" height="28" viewBox="0 0 50 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="33.4436" height="25.2685" rx="12.6342" stroke="#FC0012" stroke-width="1.48638"/>
                                        <path d="M48.75 13.6343H18.6508M42.0613 6.94556L48.75 13.6343L42.0613 6.94556ZM48.75 13.6343L42.0613 20.323L48.75 13.6343Z" stroke="#FC0012" stroke-width="2.22957" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                looking for Rent Car?
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-xl-6 col-lg-4 col-md-6">
                            <div class="h2-countdown-box bg-white rounded-2 position-relative z-1 overflow-hidden d-flex align-items-center" data-background="../rent_html//img/shapes/box-bg-shape.png">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary flex-shrink-0">
                                    <i class="flaticon-pin"></i>
                                </span>
                                <div class="countdown-box-right ms-3">
                                    <h3 class="mb-1"><span class="counter">750</span></h3>
                                    <span class="fw-semibold">Car Center Solution</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-6">
                            <div class="row g-4">
                                <div class="col-xl-12 col-lg-6">
                                    <div class="h2-countdown-box bg-white rounded-2 position-relative z-1 overflow-hidden d-flex align-items-center" data-background="/../rent_html/assets/img/shapes/box-bg-shape.png">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary flex-shrink-0">
                                            <i class="flaticon-heart"></i>
                                        </span>
                                        <div class="countdown-box-right ms-3">
                                            <h3 class="mb-1"><span class="counter">50</span>k+</h3>
                                            <span class="fw-semibold">Happy Customers</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6">
                                    <div class="h2-countdown-box bg-white rounded-2 position-relative z-1 overflow-hidden d-flex align-items-center" data-background="/../rent_html/assets/img/shapes/box-bg-shape.png">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary flex-shrink-0">
                                            <i class="flaticon-drive"></i>
                                        </span>
                                        <div class="countdown-box-right ms-3">
                                            <h3 class="mb-1"><span class="counter">750</span></h3>
                                            <span class="fw-semibold">Total Car Count</span>
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
    <!--tutorial section end-->

    <!--car booking section-->
    <section class="car-booking ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-style-2 text-center">
                        <span class="subtitle lead text-secondary">Regular <mark class="bg-transparent p-0 text-primary">Car</mark></span>
                        <h2 class="h1 mt-20 mb-20">Book Your Suitable Car</h2>
                    </div>
                </div>
            </div>
            <div class="car-search-filter d-flex align-items-center mt-30">
                <div class="input-field has-icon">
                    <label class="text-secondary fw-bold">Search Name</label>
                    <input type="text" placeholder="Search Name" class="d-block w-100 border rounded has-icon">
                </div>
                <div class="input-field">
                    <label class="text-secondary fw-bold">Brand Name</label>
                    <select class="form-select">
                        <option>Brand Name</option>
                        <option>Mercedes Benz</option>
                        <option>BMV 4 Series</option>
                        <option>Hyundai</option>
                    </select>
                </div>
                <div class="input-field">
                    <label class="text-secondary fw-bold">Car Model</label>
                    <select class="form-select">
                        <option>Sedan</option>
                        <option>Wagon</option>
                        <option>Coup</option>
                        <option>Compact</option>
                        <option>Crossover</option>
                        <option>Suv</option>
                    </select>
                </div>
                <div class="input-field">
                    <label class="text-secondary fw-bold">Ratting</label>
                    <select class="form-select">
                        <option>5 Star</option>
                        <option>4 Star</option>
                        <option>3 Star</option>
                        <option>2 Star</option>
                        <option>1 Star</option>
                    </select>
                </div>
            </div>
            <div class="row mt-30 g-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="car-card">
                        <div class="feature-img overflow-hidden">
                            <img src="/../rent_html/assets/img/home2/car-1.jpg" alt="car" class="img-fluid">
                        </div>
                        <div class="card-content bg-white position-relative">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-1"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <a href="car-rental.html">
                                <h5>Mercedes Benz i7</h5>
                            </a>
                            <div class="pricing-info d-flex align-items-center">
                                <div class="info-left">
                                    <span><strong class="text-primary fw-bold">$380</strong> /Day</span>
                                </div>
                                <div class="info-right ms-4">
                                    <span class="text-secondary"><strong class="fw-bold">$38500</strong> /Month</span>
                                </div>
                            </div>
                            <ul class="car-info mt-3">
                                <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                            </ul>
                            <div class="card-btns mt-4">
                                <a href="car-rental.html" class="btn btn-secondary btn-sm">Booking Now</a>
                                <a href="car-rental.html" class="btn btn-sm ms-2 border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="car-card">
                        <div class="feature-img overflow-hidden">
                            <img src="/../rent_html/assets/img/home2/car-2.jpg" alt="car" class="img-fluid">
                        </div>
                        <div class="card-content bg-white position-relative">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-1"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <a href="car-rental.html">
                                <h5>Luxurious BMW 4 Series</h5>
                            </a>
                            <div class="pricing-info d-flex align-items-center">
                                <div class="info-left">
                                    <span><strong class="text-primary fw-bold">$380</strong> /Day</span>
                                </div>
                                <div class="info-right ms-4">
                                    <span class="text-secondary"><strong class="fw-bold">$38500</strong> /Month</span>
                                </div>
                            </div>
                            <ul class="car-info mt-3">
                                <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                            </ul>
                            <div class="card-btns mt-4">
                                <a href="car-rental.html" class="btn btn-secondary btn-sm">Booking Now</a>
                                <a href="car-rental.html" class="btn btn-sm ms-2 border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="car-card">
                        <div class="feature-img overflow-hidden">
                            <img src="/../rent_html/assets/img/home2/car-3.jpg" alt="car" class="img-fluid">
                        </div>
                        <div class="card-content bg-white position-relative">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-1"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <a href="car-rental.html">
                                <h5>Hyundai Accent Limited</h5>
                            </a>
                            <div class="pricing-info d-flex align-items-center">
                                <div class="info-left">
                                    <span><strong class="text-primary fw-bold">$380</strong> /Day</span>
                                </div>
                                <div class="info-right ms-4">
                                    <span class="text-secondary"><strong class="fw-bold">$38500</strong> /Month</span>
                                </div>
                            </div>
                            <ul class="car-info mt-3">
                                <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                            </ul>
                            <div class="card-btns mt-4">
                                <a href="car-rental.html" class="btn btn-secondary btn-sm">Booking Now</a>
                                <a href="car-rental.html" class="btn btn-sm ms-2 border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="car-card">
                        <div class="feature-img overflow-hidden">
                            <img src="/../rent_html/assets/img/home2/car-4.jpg" alt="car" class="img-fluid">
                        </div>
                        <div class="card-content bg-white position-relative">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-1"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <a href="car-rental.html">
                                <h5>Jeep 2018 Wrangler</h5>
                            </a>
                            <div class="pricing-info d-flex align-items-center">
                                <div class="info-left">
                                    <span><strong class="text-primary fw-bold">$380</strong> /Day</span>
                                </div>
                                <div class="info-right ms-4">
                                    <span class="text-secondary"><strong class="fw-bold">$38500</strong> /Month</span>
                                </div>
                            </div>
                            <ul class="car-info mt-3">
                                <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                            </ul>
                            <div class="card-btns mt-4">
                                <a href="car-rental.html" class="btn btn-secondary btn-sm">Booking Now</a>
                                <a href="car-rental.html" class="btn btn-sm ms-2 border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="car-card">
                        <div class="feature-img overflow-hidden">
                            <img src="/../rent_html/assets/img/home2/car-5.jpg" alt="car" class="img-fluid">
                        </div>
                        <div class="card-content bg-white position-relative">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-1"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <a href="car-rental.html">
                                <h5>Mercedes Benz i7</h5>
                            </a>
                            <div class="pricing-info d-flex align-items-center">
                                <div class="info-left">
                                    <span><strong class="text-primary fw-bold">$380</strong> /Day</span>
                                </div>
                                <div class="info-right ms-4">
                                    <span class="text-secondary"><strong class="fw-bold">$38500</strong> /Month</span>
                                </div>
                            </div>
                            <ul class="car-info mt-3">
                                <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                            </ul>
                            <div class="card-btns mt-4">
                                <a href="car-rental.html" class="btn btn-secondary btn-sm">Booking Now</a>
                                <a href="car-rental.html" class="btn btn-sm ms-2 border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="car-card">
                        <div class="feature-img overflow-hidden">
                            <img src="/../rent_html/assets/img/home2/car-6.jpg" alt="car" class="img-fluid">
                        </div>
                        <div class="card-content bg-white position-relative">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-1"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <a href="car-rental.html">
                                <h5>Mercedes Benz i7</h5>
                            </a>
                            <div class="pricing-info d-flex align-items-center">
                                <div class="info-left">
                                    <span><strong class="text-primary fw-bold">$380</strong> /Day</span>
                                </div>
                                <div class="info-right ms-4">
                                    <span class="text-secondary"><strong class="fw-bold">$38500</strong> /Month</span>
                                </div>
                            </div>
                            <ul class="car-info mt-3">
                                <li><span class="me-2"><i class="flaticon-drive"></i></span>Passengers: 06</li>
                                <li><span class="me-2"><i class="flaticon-suitcase"></i></span>Suitcase: 1 Large, 2 Small</li>
                                <li><span class="me-2"><i class="flaticon-car-door"></i></span>Doors: 02</li>
                            </ul>
                            <div class="card-btns mt-4">
                                <a href="car-rental.html" class="btn btn-secondary btn-sm">Booking Now</a>
                                <a href="car-rental.html" class="btn btn-sm ms-2 border">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--car booking section-->

    <!--contact section start-->
    <div class="h2-contact-section position-relative">
        <div class="container">
            <div class="h2-contact-wrapper bg-secondary rounded overflow-hidden">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="h2-contact-left position-relative z-1 bg-primary text-center text-sm-start">
                            <h3 class="mb-0 text-white">Trusted Source in Car Rent <mark class="bg-transparent p-0 text-white position-relative">Services</mark></h3>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="h2-contact-right d-sm-flex align-items-center text-center text-sm-start">
                            <span class="icon-wrapper bg-white d-inline-flex align-items-center justify-content-center flex-shrink-0 rounded-circle text-primary"><i class="flaticon-chat-1"></i></span>
                            <div class="h2-contact-right-content ms-sm-3 mt-4 mt-sm-0">
                                <h6 class="mb-0 text-white">Need help? Talk to an <mark class="text-primary position-relative bg-transparent p-0">Expert</mark></h6>
                                <h3 class="mt-3 mb-0 text-white">Free +98 (000)-9850</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact section end-->

    <!--feedback section start-->
    <section class="h2-feedback-section pb-80 bg-white" data-background="/../rent_html/assets/img/shapes/bg-net-overlay.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="title-style-2 text-center">
                        <span class="subtitle text-primary lead">Customer <mark class="bg-transparent p-0 text-primary">Feedback</mark></span>
                        <h2 class="h1 mt-3 mb-3">Our Happy Customer Saying</h2>
                        <p class="mb-0 pera-text-2">Credibly customize value-added paradigms for end-to-end delivera Enthusiastically synergize process-centric partnerships through paradigms. </p>
                    </div>
                </div>
            </div>
            <div class="swiper h2-feedback-slider mt-5">
                <div class="swiper-wrapper">
                    <div class="h2-feedback-single swiper-slide">
                        <img src="/../rent_html/assets/img/home2/feedback-1.jpg" alt="not found" class="img-fluid rounded">
                        <div class="h2-feedback-content bg-white rounded position-relative">
                            <div class="feedback-top d-flex align-items-center justify-content-between">
                                <img src="/../rent_html/assets/img/author/client-1.jpg" alt="client" class="rounded-circle border border-2 border-white">
                                <span class="star-rating rounded-pill"><span class="me-2"><i class="fa-solid fa-star"></i></span>4.5</span>
                            </div>
                            <p class="mt-3 mb-4">Assertive disseminate integrated human capital through dynamic bandwidth. independent partnerships. Energy statically extend B2C potentialities without backend synergy.</p>
                            <div class="client-info">
                                <h6 class="mb-0">Adam Smith</h6>
                                <span>Founder</span>
                            </div>
                            <img src="/../rent_html/assets/img/icons/quote.svg" alt="quote" class="position-absolute quote-icon">
                        </div>
                    </div>
                    <div class="h2-feedback-single swiper-slide">
                        <img src="/../rent_html/assets/img/home2/feedback-2.jpg" alt="not found" class="img-fluid rounded">
                        <div class="h2-feedback-content bg-white rounded position-relative pt-5">
                            <span class="star-rating rounded-pill position-absolute"><span class="me-2"><i class="fa-solid fa-star"></i></span>4.5</span>
                            <p class="mb-4">Assertive disseminate integrated human capital through dynamic bandwidth. independent partnerships. Energy statically extend B2C potentialities without backend synergy.</p>
                            <div class="clients-info-content d-flex align-items-center">
                                <img src="/../rent_html/assets/img/author/client-2.jpg" class="rounded-circle flex-shrink-0" alt="not found">
                                <div class="client-info ms-3">
                                    <h6 class="mb-0">Adam Smith</h6>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <img src="/../rent_html/assets/img/icons/quote.svg" alt="quote" class="position-absolute quote-icon">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--feedback section end-->

    <!--map section start-->
    <section class="map-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-style-2 text-center">
                        <span class="subtitle lead text-secondary">Worldwide <mark class="bg-transparent p-0 text-primary">Location</mark></span>
                        <h2 class="h1 mb-3 mt-3">Worldwide Car Rental Locations</h2>
                        <p class="mb-0 pera-text-2">Credibly customize value-added paradigms for end-to-end delivers Enthusiastically synergies process-centric partnerships through paradigms. </p>
                    </div>
                </div>
            </div>
            <div class="map-area position-relative mt-5" data-background="/../rent_html/assets/img/home2/map.jpg">
                <div class="location-info bg-white rounded">
                    <h4 class="mb-3">Uttara Rent a Car</h4>
                    <div class="address d-flex align-items-center">
                        <span class="icon-wrapper text-primary">
                            <i class="flaticon-pin"></i>
                        </span>
                        <p class="mb-0 ms-3">Abraham-Kuyperborch 180 Dhaka-1230 Bangladesh</p>
                    </div>
                    <div class="opening-date mt-3 mb-3">
                        <h6 class="position-relative d-inline-block">Office Opening</h6>
                        <div class="opening"><span class="text-primary"><i class="flaticon-callendar"></i></span>Monday to Saturday: <mark class="bg-transparent p-0 text-primary ms-1">9.00 AM - 10.00 PM</mark></div>
                    </div>
                    <a href="#" class="map-explore mt-4 fw-bold">Explore More <span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--map section end-->

    <!--blog section start-->
    <section class="h2-blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-style-2 text-center text-lg-start">
                        <span class="subtitle lead text-primary">Blog & <mark class="bg-transparent p-0 text-primary">News</mark></span>
                        <h2 class="h1 text-secondary mt-3">Latest News & Offers</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center text-lg-end mt-3 mt-lg-0">
                        <a href="blog-grid.html" class="btn btn-primary">More Post</a>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="h2-blog-card bg-white rounded d-xl-flex align-items-center">
                            <div class="feature-img overflow-hidden">
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-1.jpg" alt="not found" class="img-fluid"></a>
                            </div>
                            <div class="h2-blog-card-content mt-4 mt-xl-0 ms-xl-4">
                                <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                    <a href="blog-grid.html" class="btn-meta">Car News</a>
                                    <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>Likes</span>
                                </div>
                                <a href="blog-single.html">
                                    <h4>How long does It take to order a rent car?</h4>
                                </a>
                                <div class="blog-author mt-30 d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jane Ulitskaya</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="h2-blog-card bg-white rounded d-xl-flex align-items-center">
                            <div class="feature-img overflow-hidden">
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-2.jpg" alt="not found" class="img-fluid"></a>
                            </div>
                            <div class="h2-blog-card-content mt-4 mt-xl-0 ms-xl-4">
                                <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                    <a href="blog-grid.html" class="btn-meta">Car News</a>
                                    <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>Likes</span>
                                </div>
                                <a href="blog-single.html">
                                    <h4>How long does It take to order a rent car?</h4>
                                </a>
                                <div class="blog-author mt-30 d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jane Ulitskaya</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="h2-blog-card bg-white">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-3.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <a href="blog-grid.html" class="btn-meta mt-30">Automotive News</a>
                            <a href="blog-single.html" class="mt-3 d-block">
                                <h4>Toyota RAV prime, tesla model short by cheap rate.</h4>
                            </a>
                            <div class="blog-author mt-30 d-flex align-items-center">
                                <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                <div class="author-content ms-3">
                                    <h6 class="mb-1">Jennifer Geiger</h6>
                                    <span>May 24, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="h2-blog-card bg-white">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-4.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <a href="blog-grid.html" class="btn-meta mt-30">Automotive News</a>
                            <a href="blog-single.html" class="mt-3 d-block">
                                <h4>How long does It take to order With a rent car?</h4>
                            </a>
                            <div class="blog-author mt-30 d-flex align-items-center">
                                <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                <div class="author-content ms-3">
                                    <h6 class="mb-1">Jane Ulitskaya</h6>
                                    <span>May 24, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="h2-blog-card bg-white">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-5.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <a href="blog-grid.html" class="btn-meta mt-30">Automotive News</a>
                            <a href="blog-single.html" class="mt-3 d-block">
                                <h4>2023 Nissan Z review: relatively affordable lots</h4>
                            </a>
                            <div class="blog-author mt-30 d-flex align-items-center">
                                <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                <div class="author-content ms-3">
                                    <h6 class="mb-1">Jennifer Geiger</h6>
                                    <span>May 24, 2022</span>
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
    