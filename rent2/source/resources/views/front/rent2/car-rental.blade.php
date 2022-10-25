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

    <!--hero banner start-->
    <div class="cr-hero-banner">
        <img src="/../rent_html/assets/img/rental/banner.jpg" alt="not found" class="img-fluid">
    </div>
    <!--hero banner end-->

    <!--car info-->
    <section class="car-info pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="car-info-box bg-white rounded d-flex flex-wrap align-items-center justify-content-between">
                        <div class="info-left">
                            <h3>Lamborghini Aventador</h3>
                            <span class="location"><i class="fa-solid fa-location-dot"></i>Wast San Park St, New York, NY 98</span>
                            <span class="pricing text-primary d-block fw-bold mt-4">$3400.00/<span>Per Day</span></span>
                        </div>
                        <div class="right-btns d-flex flex-wrap align-items-center mt-30 mt-md-0">
                            <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                            <a href="#"><i class="fa-solid fa-code-compare"></i></a>
                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                            <a href="#"><i class="fa-solid fa-print"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--car info end-->

    <!--rental description-->
    <section class="rental-description pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="rental-feature-box bg-white rounded overflow-hidden">
                        <div class="title-wrapper d-flex mb-30">
                            <h4 class="mb-0 flex-shrink-0">Key Features</h4>
                            <span class="spacer align-self-end ms-3"></span>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-drive"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Body Type</span>
                                        <span class="title">Crossover</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-speedometer"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Mileage</span>
                                        <span class="title">70,000 (Mi)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-energy"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Transmission</span>
                                        <span class="title">Autometic</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-car-repair"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Condition</span>
                                        <span class="title">Used</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-engine"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Engine Size</span>
                                        <span class="title">1,599 (cc)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-new-year"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Year</span>
                                        <span class="title">2018</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-steering-wheel-1"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Drivetrian</span>
                                        <span class="title">Front Wheel</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-petrol"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Fuel Type</span>
                                        <span class="title">Diesel</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-drive"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Color</span>
                                        <span class="title">Black</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-gas-tank"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Cylinders</span>
                                        <span class="title">06</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-drive"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">VIN</span>
                                        <span class="title">1C4TJPBA1CD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="iv_info_item d-flex align-items-center">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                    <i class="flaticon-car-door"></i>
                                </span>
                                    <div class="info_content">
                                        <span class="meta">Doors</span>
                                        <span class="title">2 Doors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-wrapper d-flex mt-70 mb-4">
                            <h4 class="mb-0 flex-shrink-0">About this Vehicle</h4>
                            <span class="spacer align-self-end ms-3"></span>
                        </div>
                        <p>How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr. Fogg’s manoeuvre simply glorious. The captain had said “between eleven and twelve knots,” and the Henrietta confirmed his prediction.Collaboratively incubate global e-services before parallel process improvements. Distinctively coordinate seamless core competencies after interoperable imperatives. Rapidiously administrate highly efficient architectures and timely information. Globally engage enterprise-wide sources and granular mindshare. Phosfluorescently pursue frictionless communities whereas distinctive applications.</p>
                        <p>Uniquely empower enterprise e-markets vis-a-vis multidisciplinary functionalities. Compellingly incubate 24/7 action items via multidisciplinary best practices. Conveniently scale one-to-one e-services whereas timely strategic theme areas. Seamlessly productivate transparent functionalities with seamless niches. Monotonectally.</p>
                        <h6 class="mb-3"><span class="dot me-2"></span>Refueling</h6>
                        <p class="mb-4">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                        <h6 class="mb-3"><span class="me-2"></span>Car Wash</h6>
                        <p class="mb-4">Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
                        <h6 class="mb-3"><span class="me-2"></span>Smoking</h6>
                        <p>Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
                    </div>
                    <div class="rental-review-box mt-30 rounded bg-white overflow-hidden">
                        <div class="top-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="review-star d-flex flex-wrap">
                                <h4 class="mb-0 d-inline-block">Reviews(1)</h4>
                                <ul class="d-flex">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li class="ms-2">(5 out of 5)</li>
                                </ul>
                            </div>
                            <a href="#" class="btn outline-btn border-primary mt-4 mt-md-0 btn-md">Write a Review</a>
                        </div>
                        <hr class="spacer mt-40 mb-40">
                        <div class="users_review">
                            <div class="d-flex align-items-center flex-wrap gap-24 justify-content-between">
                                <div class="top-left d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/user-1.jpg" alt="user" class="flex-shrink-0 rounded">
                                    <div class="ms-3">
                                        <h6 class="mb-1">Helena Garcia</h6>
                                        <span>2 January, 2018</span>
                                    </div>
                                </div>
                                <ul class="rating-field d-flex">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <p class="mt-3 mb-0">Information on technical characteristics, the delivery set, the country of manufacture and the appearance of the goods is for reference only and is based on the latest information of publication.</p>
                        </div>
                        <hr class="my-3">
                        <h5>Leave a Reply</h5>
                        <p class="mb-4">Your email address will not be published. Required fields are marked*</p>

                        <p class="mb-0 fw-semibold text-secondary">Your Rating & Review</p>
                        <ul class="d-flex rating-field">
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <form class="review-form mt-4">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <input type="text" placeholder="Your Name" class="border rounded w-100">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <input type="email" placeholder="Your Email" class="border rounded w-100">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-field">
                                        <textarea placeholder="comment" rows="5" class="border rounded w-100"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-40">Post Comment</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar-widgets-wrapper">
                        <div class="sidebar-widget reservation-widget bg-white rounded widget-padding">
                            <h4 class="mb-30">Vehicle Reservation</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-field">
                                            <label class="fw-semibold text-secondary mb-2">Full Name*</label>
                                            <input type="text" placeholder="Full Name" class="border w-100 rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-field mt-4">
                                            <label class="fw-semibold text-secondary mb-2">Email Address*</label>
                                            <input type="email" placeholder="Full Name" class="border w-100 rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-field mt-4">
                                            <label class="fw-semibold text-secondary mb-2">Phone*</label>
                                            <input type="tel" placeholder="Phone" class="border w-100 rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-field mt-4">
                                            <label class="fw-semibold text-secondary mb-2">Pickup Date</label>
                                            <input type="text" class="theme-date-input border w-100 rounded-2" placeholder="08/16/2022 4:28 PM">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-field mt-4">
                                            <label class="fw-semibold text-secondary mb-2">Drop Off Date</label>
                                            <input type="text" class="theme-date-input border w-100 rounded-2" placeholder="08/16/2022 4:28 PM">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mt-40">Booking This Car</button>
                            </form>
                        </div>
                        <div class="sidebar-widget advisor-widget bg-white rounded widget-padding mt-4">
                            <div class="widget-top d-flex">
                                <h4 class="mb-0 flex-shrink-0">Listed by Advisor</h4>
                                <span class="spacer align-self-end"></span>
                            </div>
                            <div class="author-info d-flex align-items-center mt-30">
                                <img src="/../rent_html/assets/img/author/rental-author.jpg" alt="author" class="rounded-circle">
                                <div class="ms-3 author-info-content">
                                    <h5 class="mb-2">Mickey Dominguez</h5>
                                    <ul class="rating-star d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="ms-1">(5 reviews)</li>
                                    </ul>
                                    <a href="#" class="fw-bold mt-1 d-inline-block">Advisor Profile</a>
                                </div>
                            </div>
                            <div class="mt-30">
                                <form action="#" class="advisor-form">
                                    <input type="text" placeholder="Your Name*" class="w-100 border rounded">
                                    <input type="email" placeholder="Your Email" class="w-100 border rounded mt-3">
                                    <textarea placeholder="Your Message" rows="5" class="w-100 border rounded mt-3"></textarea>
                                    <button type="submit" class="btn btn-secondary mt-30 w-100">Submit Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--rental description end-->

    <!--inventory slider start-->
    <section class="inventory-slider">
        <div class="container overflow-hidden">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="h1">You May be Interested in</h2>
                    </div>
                </div>
            </div>
            <div class="inventroy-slider swiper mt-40 pb-120 overflow-visible">
                <div class="swiper-wrapper">
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white swiper-slide">
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
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white swiper-slide">
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
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white swiper-slide">
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
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white swiper-slide">
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
                <div class="slider-btn-prev swiper-btn"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="slider-btn-next swiper-btn"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>
    <!--inventory slider end-->

@endsection
@section('scripts') @endsection
