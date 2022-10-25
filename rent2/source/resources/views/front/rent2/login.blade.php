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
                        <h1 class="text-white">Login</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--login section-->
    <section class="login-section ptb-120 position-relative z-1 overflow-hidden">
        <span class="bg-primary-blur position-absolute z--1 start-50 top-0 tarnslate-middle-x"></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-xxl-4">
                    <div class="login-form-area">
                        <h2 class="mb-5">Hey there!<br>Welcome back.</h2>
                        <form class="login-form">
                            <label class="fw-semibold text-secondary mb-2">Email</label>
                            <input type="email" placeholder="Enter your email" class="w-100 rounded">

                            <label class="fw-semibold text-secondary mb-2 mt-4">Password</label>
                            <input type="password" placeholder="Enter your email" class="w-100 rounded">
                            <div class="cookies-area d-flex align-items-center flex-wrap justify-content-between mt-3">
                                <label><input type="checkbox" class="me-1">Remember for 30 days</label>
                                <a href="#" class="forgot-pass">Forgot Password</a>
                            </div>
                            <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap mt-40">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                <a href="#" class="btn outline-btn">
                                    <span class="me-2"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.397 6.60938H8.87037C8.58258 6.60938 8.34961 6.84235 8.34961 7.13014V9.2166C8.34961 9.50439 8.58258 9.73736 8.87037 9.73736H12.5465C12.1457 10.7823 11.3919 11.656 10.4361 12.211L12.0018 14.9244C14.5131 13.4718 16 10.9194 16 8.06545C16 7.65775 15.9692 7.36653 15.9109 7.04106C15.8629 6.79096 15.6471 6.60938 15.397 6.60938Z" fill="#167EE6"/>
                                    <path d="M8.00023 12.8685C6.20155 12.8685 4.63242 11.8853 3.78961 10.4326L1.07617 11.9949C2.45687 14.3897 5.04354 16 8.00023 16C9.45288 16 10.8199 15.6094 12.0019 14.9276V14.9242L10.4362 12.2107C9.71669 12.6287 8.88758 12.8685 8.00023 12.8685Z" fill="#12B347"/>
                                    <path d="M12.0002 14.9278V14.9244L10.4345 12.2109C9.71841 12.6255 8.8893 12.8687 8.00195 12.8687V16.0002C9.4546 16.0002 10.8216 15.6096 12.0002 14.9278Z" fill="#0F993E"/>
                                    <path d="M3.13337 7.99966C3.13337 7.11232 3.37662 6.28321 3.79117 5.56716L1.07773 4.00488C0.392524 5.18002 0.00195312 6.54359 0.00195312 7.99966C0.00195312 9.45574 0.392524 10.8193 1.07773 11.9944L3.79117 10.4322C3.37319 9.71612 3.13337 8.88701 3.13337 7.99966Z" fill="#FFD500"/>
                                    <path d="M8.00023 3.13142C9.17194 3.13142 10.2512 3.54939 11.0905 4.24146C11.2995 4.41276 11.601 4.39906 11.7894 4.21062L13.2661 2.73399C13.4819 2.51815 13.4648 2.16527 13.2352 1.96656C11.8271 0.740028 9.9942 0 8.00023 0C5.04354 0 2.45687 1.61025 1.07617 4.00506L3.78961 5.56734C4.63242 4.11469 6.20155 3.13142 8.00023 3.13142Z" fill="#FF4B26"/>
                                    <path d="M11.0923 4.24146C11.3012 4.41276 11.6027 4.39906 11.7912 4.21062L13.2678 2.73399C13.4836 2.51815 13.4665 2.16527 13.237 1.96656C11.8289 0.740028 9.99592 0 8.00195 0V3.13142C9.17366 3.13142 10.2529 3.54597 11.0923 4.24146Z" fill="#D93F21"/>
                                </svg></span>
                                    Sign with Google</a>
                            </div>
                            <p class="text-xl-center mt-4">Don't have an account? <a href="signup.html">Sign Up</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 offset-xl-2">
                    <div class="login-form-right position-relative z-1 mt-5 mt-xl-0">
                        <img src="/../rent_html/assets/img/login-illustration.png" alt="not found" class="img-fluid">
                        <span class="bg-star-color position-absolute z--1 end-0 bottom-0"></span>
                        <img src="/../rent_html/assets/img/shapes/ball.png" alt="not found" class="position-absolute ball-shape z--1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--login section end-->

@endsection
@section('scripts') @endsection
