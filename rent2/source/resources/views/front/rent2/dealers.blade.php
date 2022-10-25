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
                        <h1 class="text-white">Inventory Dealers</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Dealership</li>
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
                <div class="col-xl-3">
                    <div class="dealer_sidebar">
                        <div class="dl_sidebar_widget dl_search_widget bg-white rounded">
                            <h6 class="mb-3">Advanced Search</h6>
                            <form action="#" class="dl_form_style">
                                <input type="text" placeholder="Search By Name" class="border rounded w-100">
                                <select class="form-select mt-3">
                                    <option>Select City</option>
                                    <option>Newyork, USA</option>
                                    <option>Hong Kong</option>
                                    <option>Bangkok</option>
                                    <option>London</option>
                                </select>
                                <div class="rating-box mt-3">
                                    <span>Rating</span>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 btn-md mt-30">Search By Name</button>
                            </form>
                        </div>
                        <div class="dl_sidebar_widget dl_slider_widget bg-white rounded overflow-hidden mt-4">
                            <h5 class="mb-3">Featured Agents</h5>
                            <div class="dl_slider_wrapper">
                                <div class="dl_card_box bg-white">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-1.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="dl_card_box bg-white">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-2.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="dl_card_box bg-white">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-3.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="dl_card_box bg-white">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-2.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dl_sidebar_widget dl_products_widget bg-white rounded mt-4">
                            <h6>Latest Products</h6>
                            <hr class="mt-30 mb-4">
                            <ul class="dl_posts">
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper rounded-1 overflow-hidden flex-shrink-0">
                                        <a href="inventory-details.html"><img src="/../rent_html/assets/img/dealers/pl-1.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="dl_post_content ms-3">
                                        <a href="inventory-details.html">
                                            <h6 class="mb-1">Volkswagon GTI S</h6>
                                        </a>
                                        <span class="meta-text"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                        <span class="text-primary fw-semibold price">$35000</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper rounded-1 overflow-hidden flex-shrink-0">
                                        <a href="inventory-details.html"><img src="/../rent_html/assets/img/dealers/pl-2.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="dl_post_content ms-3">
                                        <a href="inventory-details.html">
                                            <h6 class="mb-1">Mercedes-Benz C- 2015</h6>
                                        </a>
                                        <span class="meta-text"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                        <span class="text-primary fw-semibold price">$35000</span>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="thumb-wrapper rounded-1 overflow-hidden flex-shrink-0">
                                        <a href="inventory-details.html"><img src="/../rent_html/assets/img/dealers/pl-3.jpg" alt="not found" class="img-fluid"></a>
                                    </div>
                                    <div class="dl_post_content ms-3">
                                        <a href="inventory-details.html">
                                            <h6 class="mb-1">Nissan Altima 2019</h6>
                                        </a>
                                        <span class="meta-text"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                        <span class="text-primary fw-semibold price">$35000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="dl_listing">
                        <div class="iv_listing_top d-flex flex-wrap align-items-center bg-white justify-content-center justify-content-sm-between rounded mb-4">
                            <p class="mb-0 fw-500 d-inline-block">9 Search Results Found</p>
                            <div class="iv_listing_filter_menu d-flex flex-wrap align-items-center justify-content-center">
                                <p class="mb-0 flex-shrink-0 fw-semibold">Sort by:</p>
                                <select class="form-select fw-500">
                                    <option>Newest First</option>
                                    <option>Most Popular</option>
                                    <option>Most Rated</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-1.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Starlight AutoMall.</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-2.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-3.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Motorlane Automotive</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-2.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Starlight AutoMall.</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-3.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Starlight AutoMall.</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-1.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Starlight AutoMall.</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-1.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-2.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Starlight AutoMall.</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                    <div class="figure_img position-relative">
                                        <a href="dealer-single.html"><img src="/../rent_html/assets/img/dealers/dealer-3.jpg" alt="not found" class="img-fluid"></a>
                                        <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">08 Listing</span>
                                    </div>
                                    <a href="dealer-single.html">
                                        <h5 class="mt-4">Fitz Way Auto Holdings</h5>
                                    </a>
                                    <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot"></i>New York City, USA</span>
                                    <span class="slide_meta_text d-block phone mt-2"><i class="fa-brands fa-whatsapp"></i>+9087784565154</span>
                                    <hr class="mt-3 mb-3">
                                    <div class="dl_social d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="template-pagination pg-style-2 mt-5">
                            <ul class="d-flex align-items-center justify-content-center">
                                <li><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
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
    </div>
    <!--dealers section end-->

@endsection
@section('scripts') @endsection
