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
                            <li class="breadcrumb-item text-white fw-500">Blog Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--blog list section start-->
    <section class="blog-list-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-list-wrapper">
                        <div class="h2-blog-card bg-white p-0">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-list-1.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <div class="h2-blog-card-content p-4">
                                <a href="blog-grid.html" class="btn-meta">Automotive News</a>
                                <a href="blog-single.html" class="mt-3 d-block">
                                    <h3>How long does It take to order a rent car?</h3>
                                </a>
                                <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                                <div class="blog-author mt-30 d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-1.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jennifer Geiger</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h2-blog-card bg-white p-0 mt-30">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-list-2.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <div class="h2-blog-card-content p-4">
                                <a href="blog-grid.html" class="btn-meta">Automotive News</a>
                                <a href="blog-single.html" class="mt-3 d-block">
                                    <h3>1989 porsche 944 S2 is our bring trailer pick of the day</h3>
                                </a>
                                <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                                <div class="blog-author mt-30 d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-2.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jennifer Geiger</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h2-blog-card bg-white p-0 mt-30">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-list-3.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <div class="h2-blog-card-content p-4">
                                <a href="blog-grid.html" class="btn-meta">Automotive News</a>
                                <a href="blog-single.html" class="mt-3 d-block">
                                    <h3>NHTSA Links Hundreds of Crashes to Driver Assists</h3>
                                </a>
                                <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                                <div class="blog-author mt-30 d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-3.jpg" alt="author" class="rounded-circle flex-shrink-0">
                                    <div class="author-content ms-3">
                                        <h6 class="mb-1">Jennifer Geiger</h6>
                                        <span>May 24, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h2-blog-card bg-white p-0 mt-30">
                            <div class="feature-img position-relative overflow-hidden w-100 rounded-top">
                                <span class="btn-meta text-primary bg-white position-absolute z-2"><span class="me-1"><i class="fas fa-heart"></i></span>Likes</span>
                                <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/blog-list-2.jpg" alt="blog thumb" class="img-fluid"></a>
                            </div>
                            <div class="h2-blog-card-content p-4">
                                <a href="blog-grid.html" class="btn-meta">Automotive News</a>
                                <a href="blog-single.html" class="mt-3 d-block">
                                    <h3>Zany Green corvette Z06 and NFT to be auctioned</h3>
                                </a>
                                <p>Professionally build unique markets via parallel total linkage. Monotonectally maximize corporate intellectual capital whereas granular catalysts for change. Assertively provide access to inexpensive technologies whereas virtual platforms.</p>
                                <div class="blog-author mt-30 d-flex align-items-center">
                                    <img src="/../rent_html/assets/img/author/author-4.jpg" alt="author" class="rounded-circle flex-shrink-0">
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
                <div class="col-xl-4">
                    <div class="blog-sidebar mt-60 mt-xl-0">
                        <div class="sidebar-widget tmg-search-widget bg-white widget-padding rounded">
                            <form class="d-flex align-items-center justify-content-between" action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-widget tmg-categories-widget bg-white widget-padding rounded mt-4">
                            <div class="widget-top d-flex">
                                <h5 class="mb-0 flex-shrink-0">Categories</h5>
                                <span class="spacer align-self-end"></span>
                            </div>
                            <ul class="widget-nav mt-30">
                                <li><a href="blog-grid.html">Auto Detailing <span class="float-end">(06)</span></a></li>
                                <li><a href="blog-grid.html">Car News <span class="float-end">(14)</span></a></li>
                                <li><a href="blog-grid.html">Engine Solution <span class="float-end">(09)</span></a></li>
                                <li><a href="blog-grid.html">Transmission <span class="float-end">(10)</span></a></li>
                                <li><a href="blog-grid.html">Steering <span class="float-end">(18)</span></a></li>
                                <li><a href="blog-grid.html">Car Reviews <span class="float-end">(14)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget recent_post-widget bg-white widget-padding rounded mt-4">
                            <div class="widget-top d-flex">
                                <h5 class="mb-0 flex-shrink-0">Recent Post</h5>
                                <span class="spacer align-self-end"></span>
                            </div>
                            <ul class="recent_posts_list mt-30">
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper">
                                        <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/recent-post-1.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="rp_content">
                                        <a href="blog-single.html" class="mb-1">1989 porsche 944 S2 is our bring trailer pick of the day</a>
                                        <span class="date">21 Jun 2022</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper">
                                        <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/recent-post-2.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="rp_content">
                                        <a href="blog-single.html" class="mb-1">1989 porsche 944 S2 is our bring trailer pick of the day</a>
                                        <span class="date">21 Jun 2022</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper">
                                        <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/recent-post-3.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="rp_content">
                                        <a href="blog-single.html" class="mb-1">1989 porsche 944 S2 is our bring trailer pick of the day</a>
                                        <span class="date">21 Jun 2022</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper">
                                        <a href="blog-single.html"><img src="/../rent_html/assets/img/blog/recent-post-4.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="rp_content">
                                        <a href="blog-single.html" class="mb-1">1989 porsche 944 S2 is our bring trailer pick of the day</a>
                                        <span class="date">21 Jun 2022</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget tags-widget widget-padding bg-white rounded mt-4">
                            <div class="widget-top d-flex">
                                <h5 class="mb-0 flex-shrink-0">Popular Tags</h5>
                                <span class="spacer align-self-end"></span>
                            </div>
                            <div class="tags-list mt-30">
                                <a href="#">Car Dealership</a>
                                <a href="#">Breaks Discs</a>
                                <a href="#">WordPress</a>
                                <a href="#">Car Dealership</a>
                                <a href="#">Spares</a>
                                <a href="#">Sedan</a>
                                <a href="#">Diesel</a>
                                <a href="#">Luxury</a>
                                <a href="#">Sport</a>
                            </div>
                        </div>
                        <div class="sidebar-widget subscribe-widget bg-white rounded overflow-hidden mt-4">
                            <div class="sb-top text-center has-overlay" data-background="/../rent_html/assets/img/blog/sb-bg.jpg">
                                <img src="/../rent_html/assets/img/icons/mail.png" alt="main" class="img-fluid">
                                <h4 class="mt-3 mb-4 text-white">Subscribe us</h4>
                                <p class="mb-0 text-white">Subscribe us and get latest news and upcoming events.</p>
                            </div>
                            <div class="widget-padding text-center">
                                <form class="sb-form d-block">
                                    <input type="email" placeholder="Enter Email Address" class="d-block w-100 bg-transparent border-bottom text-center">
                                    <button type="submit" class="btn btn-primary rounded-0 mt-30">Subscribe</button>
                                </form>
                                <p class="mb-0 mt-3 fw-semibold fs-sm">*Never share your email with others.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog list section end-->

@endsection
@section('scripts') @endsection

