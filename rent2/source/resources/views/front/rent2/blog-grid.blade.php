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
                        <h1 class="text-white">Guides & Articles</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Blog Grids</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--blog grid slider -->
    <div class="blog-grid-slider-area pt-120">
        <div class="container">
            <div class="blog-grid-slider swiper pb-120">
                <div class="swiper-wrapper">
                    <div class="bgr-slide-card bg-white rounded d-xl-flex align-items-center position-relative swiper-slide">
                        <img src="/../rent_html/assets/img/shapes/blog-badge.png" alt="badge" class="position-absolute blog-badge">
                        <div class="feature-img overflow-hidden flex-shrink-0">
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/bgr-slide-1.jpg" alt="not found" class="img-fluid"></a>
                        </div>
                        <div class="slide-card-content mt-4 mt-xl-0 ms-xl-4">
                            <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                <a href="blog-list.html" class="btn-meta">Car News</a>
                            </div>
                            <a href="blog-single.html">
                                <h3>How long does It take to order<br> a rent car?</h3>
                            </a>
                            <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                            <div class="bgr-slide-card-bottom d-flex align-items-center justify-content-between mt-30">
                                <div class="blog-author d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jane Ulitskaya</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                                <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>1.5k</span>
                            </div>
                        </div>
                    </div>
                    <div class="bgr-slide-card bg-white rounded d-xl-flex align-items-center position-relative swiper-slide">
                        <img src="/../rent_html/assets/img/shapes/blog-badge.png" alt="badge" class="position-absolute blog-badge">
                        <div class="feature-img overflow-hidden flex-shrink-0">
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/bgr-slide-1.jpg" alt="not found" class="img-fluid"></a>
                        </div>
                        <div class="slide-card-content mt-4 mt-xl-0 ms-xl-4">
                            <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                <a href="blog-list.html" class="btn-meta">Car News</a>
                            </div>
                            <a href="blog-single.html">
                                <h3>How long does It take to order<br> a rent car?</h3>
                            </a>
                            <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                            <div class="bgr-slide-card-bottom d-flex align-items-center justify-content-between mt-30">
                                <div class="blog-author d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jane Ulitskaya</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                                <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>1.5k</span>
                            </div>
                        </div>
                    </div>
                    <div class="bgr-slide-card bg-white rounded d-xl-flex align-items-center position-relative swiper-slide">
                        <img src="/../rent_html/assets/img/shapes/blog-badge.png" alt="badge" class="position-absolute blog-badge">
                        <div class="feature-img overflow-hidden flex-shrink-0">
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/bgr-slide-1.jpg" alt="not found" class="img-fluid"></a>
                        </div>
                        <div class="slide-card-content mt-4 mt-xl-0 ms-xl-4">
                            <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                <a href="blog-list.html" class="btn-meta">Car News</a>
                            </div>
                            <a href="blog-single.html">
                                <h3>How long does It take to order<br> a rent car?</h3>
                            </a>
                            <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                            <div class="bgr-slide-card-bottom d-flex align-items-center justify-content-between mt-30">
                                <div class="blog-author d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jane Ulitskaya</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                                <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>1.5k</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!--blog grid slider end-->

    <!--blog grid section start-->
    <div class="blog-grid-area pb-120">
        <div class="container">
            <div class="row g-4 justify-content-center masonry_grid">
                <div class="col-xl-4 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                            <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-grid-1.jpg" alt="blog thumb" class="img-fluid"></a>
                        </div>
                        <a href="blog-list.html" class="btn-meta mt-30">Automotive News</a>
                        <a href="blog-single.html" class="mt-3 d-block">
                            <h4>Toyota RAV prime, tesla model by cheap rate.</h4>
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
                <div class="col-xl-4 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                            <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-grid-2.jpg" alt="blog thumb" class="img-fluid"></a>
                        </div>
                        <a href="blog-list.html" class="btn-meta mt-30">Automotive News</a>
                        <a href="blog-single.html" class="mt-3 d-block">
                            <h4>How long does It take to order With a rent car?</h4>
                        </a>
                        <div class="blog-author mt-30 d-flex align-items-center">
                            <img src="/../rent_html/assets/img/author/author-2.jpg" alt="author" class="rounded-circle flex-shrink-0">
                            <div class="author-content ms-3">
                                <h6 class="mb-1">Jane Ulitskaya</h6>
                                <span>May 24, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                            <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-grid-3.jpg" alt="blog thumb" class="img-fluid"></a>
                        </div>
                        <a href="blog-list.html" class="btn-meta mt-30">Automotive News</a>
                        <a href="blog-single.html" class="mt-3 d-block">
                            <h4>2023 Nissan Z review: relatively affordable lots</h4>
                        </a>
                        <div class="blog-author mt-30 d-flex align-items-center">
                            <img src="/../rent_html/assets/img/author/author-3.jpg" alt="author" class="rounded-circle flex-shrink-0">
                            <div class="author-content ms-3">
                                <h6 class="mb-1">Jennifer Geiger</h6>
                                <span>May 24, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white rounded d-xl-flex align-items-center">
                        <div class="feature-img overflow-hidden">
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-1.jpg" alt="not found" class="img-fluid"></a>
                        </div>
                        <div class="h2-blog-card-content mt-4 mt-xl-0 ms-xl-4">
                            <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                <a href="blog-list.html" class="btn-meta">Car News</a>
                                <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>Likes</span>
                            </div>
                            <a href="blog-single.html">
                                <h4>How long does It take to order a rent car?</h4>
                            </a>
                            <div class="blog-author mt-30 d-flex align-items-center">
                                <img src="/../rent_html/assets/img/author/author-4.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                <div class="author-content ms-3">
                                    <h6 class="mb-1">Jane Ulitskaya</h6>
                                    <span>May 24, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white rounded d-xl-flex align-items-center">
                        <div class="feature-img overflow-hidden">
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-2.jpg" alt="not found" class="img-fluid"></a>
                        </div>
                        <div class="h2-blog-card-content mt-4 mt-xl-0 ms-xl-4">
                            <div class="blog-card-top d-flex align-items-center justify-content-between mb-3">
                                <a href="blog-list.html" class="btn-meta">Car News</a>
                                <span class="btn-meta like-count"><span class="me-1 text-primary"><i class="fa-solid fa-heart"></i></span>Likes</span>
                            </div>
                            <a href="blog-single.html">
                                <h4>How long does It take to order a rent car?</h4>
                            </a>
                            <div class="blog-author mt-30 d-flex align-items-center">
                                <img src="/../rent_html/assets/img/author/author-5.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                <div class="author-content ms-3">
                                    <h6 class="mb-1">Jane Ulitskaya</h6>
                                    <span>May 24, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                            <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-3.jpg" alt="blog thumb" class="img-fluid"></a>
                        </div>
                        <a href="blog-list.html" class="btn-meta mt-30">Automotive News</a>
                        <a href="blog-single.html" class="mt-3 d-block">
                            <h4>Toyota RAV prime, tesla model by cheap rate.</h4>
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
                <div class="col-xl-4 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                            <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-4.jpg" alt="blog thumb" class="img-fluid"></a>
                        </div>
                        <a href="blog-list.html" class="btn-meta mt-30">Automotive News</a>
                        <a href="blog-single.html" class="mt-3 d-block">
                            <h4>How long does It take to order With a rent car?</h4>
                        </a>
                        <div class="blog-author mt-30 d-flex align-items-center">
                            <img src="/../rent_html/assets/img/author/author-2.jpg" alt="author" class="rounded-circle flex-shrink-0">
                            <div class="author-content ms-3">
                                <h6 class="mb-1">Jane Ulitskaya</h6>
                                <span>May 24, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 grid_item">
                    <div class="h2-blog-card bg-white">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                            <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                            <a href="blog-single.html"><img src="/../rent_html/assets/img/home2/blog-5.jpg" alt="blog thumb" class="img-fluid"></a>
                        </div>
                        <a href="blog-list.html" class="btn-meta mt-30">Automotive News</a>
                        <a href="blog-single.html" class="mt-3 d-block">
                            <h4>2023 Nissan Z review: relatively affordable lots</h4>
                        </a>
                        <div class="blog-author mt-30 d-flex align-items-center">
                            <img src="/../rent_html/assets/img/author/author-3.jpg" alt="author" class="rounded-circle flex-shrink-0">
                            <div class="author-content ms-3">
                                <h6 class="mb-1">Jennifer Geiger</h6>
                                <span>May 24, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="template-pagination mt-50">
                <ul class="d-flex align-items-center">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--blog grid section end-->

@endsection
@section('scripts') @endsection
