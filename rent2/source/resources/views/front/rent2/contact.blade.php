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
                        <h1 class="text-white">Get In Touch</h1>
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

    <!--contact section start-->
    <section class="contact-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-form-area bg-white rounded">
                        <h4 class="mb-3">Need Help? Send Message</h4>
                        <p class="mb-4">Monotonectally pursue e-business sources whereas end-to-end applications. Holisticly</p>
                        <form action="#" class="ct-form-wrapper">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1">Name</label>
                                        <input type="text" placeholder="Full Name" class="border w-100 rounded">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1">Email</label>
                                        <input type="email" placeholder="Email" class="border w-100 rounded">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1">Phone</label>
                                        <input type="tel" placeholder="Full Name" class="border w-100 rounded">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1">Service</label>
                                        <select class="form-select">
                                            <option>Select Service</option>
                                            <option>Car Dealership</option>
                                            <option>Car Rental</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1">Message</label>
                                        <textarea placeholder="Message" class="border w-100 rounded" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-md mt-4" type="submit">Get in Touch</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-sidebar-widget py-5 px-4 bg-white rounded mt-5 mt-xl-0">
                        <h4 class="mb-4">Contact Details</h4>
                        <ul class="fs-md">
                            <li class="fw-500"><strong class="fw-bold text-secondary">Office Address-1: </strong>Autohive Car Delarship Agency (United Estate Of America) Co., Ltd. Bridge 8, Room 9201,</li>
                            <li class="mt-30 fw-500"><strong class="fw-bold text-secondary">Office Address-2: </strong>#25 Jocker Goru Zhong Road, NYPD 200025 USA</li>
                        </ul>
                        <hr class="mt-4 mb-4">
                        <ul class="contact-info">
                            <li class="d-flex align-items-center">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i class="fa-brands fa-whatsapp"></i></span>
                                <div class="ms-3 info-content">
                                    <span class="d-block">Emergency Call:</span>
                                    <a href="tel:905431478798">+90 54 3147 8789</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i class="fa-regular fa-envelope"></i></span>
                                <div class="ms-3 info-content">
                                    <span class="d-block">General communication</span>
                                    <a href="maito:exampleautohive@gmail.com">exampleautohive@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                        <hr class="mt-30 mb-40">
                        <h6 class="mb-3">Social Share</h6>
                        <div class="contact-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-dribbble "></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact section end-->

    <!--map area started-->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48385.971229388386!2d-74.103750331968!3d40.71530426584408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250d225bfafdd%3A0x249f013a2cd25d9!2sJersey%20City%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1662355682290!5m2!1sen!2sbd" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!--map area end-->

    <!--dealership slider start-->
    <section class="dealership-slider-area">
        <div class="container pt-80 position-relative mt--80 rounded-top">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="h1">Our Dealership Located 50+ country in worldwide</h2>
                    </div>
                </div>
            </div>
            <div class="dealership-slider swiper pb-120 mt-5">
                <div class="swiper-wrapper">
                    <div class="dealership-single pt-3 pb-30 px-3 bg-white rounded swiper-slide">
                        <img src="/../rent_html/assets/img/dealers/01.jpg" alt="not round" class="img-fluid rounded">
                        <h4 class="mt-4 mb-3">New York City</h4>
                        <ul class="dealers-info">
                            <li class="d-flex align-items-center">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                <span class="info-text ms-3">1840 E Garvey Ave South West <br> Covina, CA 91791</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-brands fa-whatsapp"></i></span>
                                <span class="info-text ms-3">+90 87 78 45 65 154</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-regular fa-envelope"></i></span>
                                <span class="info-text ms-3">autohive@gmail.com</span>
                            </li>
                        </ul>
                        <a href="#" class="map-btn mt-4 d-inline-block">View on Map<span class="ms-1"><i class="fa-solid fa-caret-right"></i></span></a>
                    </div>
                    <div class="dealership-single pt-3 pb-30 px-3 bg-white rounded swiper-slide">
                        <img src="/../rent_html/assets/img/dealers/02.jpg" alt="not round" class="img-fluid rounded">
                        <h4 class="mt-4 mb-3">Redline Autos</h4>
                        <ul class="dealers-info">
                            <li class="d-flex align-items-center">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                <span class="info-text ms-3">Plot-03 Shah Makhdum Ave, <br> Dhaka 1230</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-brands fa-whatsapp"></i></span>
                                <span class="info-text ms-3">+90 87 78 45 65 154</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-regular fa-envelope"></i></span>
                                <span class="info-text ms-3">autohive@gmail.com</span>
                            </li>
                        </ul>
                        <a href="#" class="map-btn mt-4 d-inline-block">View on Map<span class="ms-1"><i class="fa-solid fa-caret-right"></i></span></a>
                    </div>
                    <div class="dealership-single pt-3 pb-30 px-3 bg-white rounded swiper-slide">
                        <img src="/../rent_html/assets/img/dealers/03.jpg" alt="not round" class="img-fluid rounded">
                        <h4 class="mt-4 mb-3">Showroom Auto</h4>
                        <ul class="dealers-info">
                            <li class="d-flex align-items-center">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                <span class="info-text ms-3">42-08 35th Ave, Queens, NY 11101, <br> United Stats</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-brands fa-whatsapp"></i></span>
                                <span class="info-text ms-3">+90 87 78 45 65 154</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-regular fa-envelope"></i></span>
                                <span class="info-text ms-3">autohive@gmail.com</span>
                            </li>
                        </ul>
                        <a href="#" class="map-btn mt-4 d-inline-block">View on Map<span class="ms-1"><i class="fa-solid fa-caret-right"></i></span></a>
                    </div>
                    <div class="dealership-single pt-3 pb-30 px-3 bg-white rounded swiper-slide">
                        <img src="/../rent_html/assets/img/dealers/04.jpg" alt="not round" class="img-fluid rounded">
                        <h4 class="mt-4 mb-3">New York City</h4>
                        <ul class="dealers-info">
                            <li class="d-flex align-items-center">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                <span class="info-text ms-3">1840 E Garvey Ave South West <br> Covina, CA 91791</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-brands fa-whatsapp"></i></span>
                                <span class="info-text ms-3">+90 87 78 45 65 154</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="fa-regular fa-envelope"></i></span>
                                <span class="info-text ms-3">autohive@gmail.com</span>
                            </li>
                        </ul>
                        <a href="#" class="map-btn mt-4 d-inline-block">View on Map<span class="ms-1"><i class="fa-solid fa-caret-right"></i></span></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--dealership slider end-->

@endsection
@section('scripts') @endsection
