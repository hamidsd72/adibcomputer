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
                        <h1 class="text-white">Wishlist</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Wishlist</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--wishlist section start-->
    <section class="wishlist-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wishlist-table table-responsive bg-white">
                        <table class="table">
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Stock Status</th>
                                <th class="price-column pe-0">Price</th>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <img src="/../rent_html/assets/img/products/tire.png" alt="tire" class="img-fluid">
                                </td>
                                <td>
                                    <h6 class="mb-1">Aluminium Wheel AR-19 Tire Parts</h6>
                                    <ul class="rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span class="ms-2 fw-semibold">(3 reviews)</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="stock-btn rounded-pill">In Stock</span>
                                </td>
                                <td>
                                    <span class="price fw-bold">$918.00</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-5">Add to Cart</a>
                                    <a href="#" class="close-btn ms-3"><i class="fas fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <img src="/../rent_html/assets/img/products/brake.png" alt="tire" class="img-fluid">
                                </td>
                                <td>
                                    <h6 class="mb-1">Glossy Gray 19" Aluminium Wheel AR-19</h6>
                                    <ul class="rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span class="ms-2 fw-semibold">(3 reviews)</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="stock-btn rounded-pill">In Stock</span>
                                </td>
                                <td>
                                    <span class="price fw-bold">$918.00</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-5">Add to Cart</a>
                                    <a href="#" class="close-btn ms-3"><i class="fas fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <img src="/../rent_html/assets/img/products/bolt.png" alt="tire" class="img-fluid">
                                </td>
                                <td>
                                    <h6 class="mb-1">Brandix Spark Plug Kit ASR-400</h6>
                                    <ul class="rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span class="ms-2 fw-semibold">(3 reviews)</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="stock-btn rounded-pill">In Stock</span>
                                </td>
                                <td>
                                    <span class="price fw-bold">$918.00</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-5">Add to Cart</a>
                                    <a href="#" class="close-btn ms-3"><i class="fas fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <img src="/../rent_html/assets/img/products/tire.png" alt="tire" class="img-fluid">
                                </td>
                                <td>
                                    <h6 class="mb-1">Brandix Spark Plug Kit ASR-400</h6>
                                    <ul class="rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span class="ms-2 fw-semibold">(3 reviews)</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="stock-btn rounded-pill">In Stock</span>
                                </td>
                                <td>
                                    <span class="price fw-bold">$918.00</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-5">Add to Cart</a>
                                    <a href="#" class="close-btn ms-3"><i class="fas fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <img src="/../rent_html/assets/img/products/brake.png" alt="tire" class="img-fluid">
                                </td>
                                <td>
                                    <h6 class="mb-1">Aluminium Wheel AR-19 Tire Parts</h6>
                                    <ul class="rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span class="ms-2 fw-semibold">(3 reviews)</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="stock-btn rounded-pill">In Stock</span>
                                </td>
                                <td>
                                    <span class="price fw-bold">$918.00</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-5">Add to Cart</a>
                                    <a href="#" class="close-btn ms-3"><i class="fas fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <img src="/../rent_html/assets/img/products/bolt.png" alt="tire" class="img-fluid">
                                </td>
                                <td>
                                    <h6 class="mb-1">Glossy Gray 19" Aluminium Wheel AR-19</h6>
                                    <ul class="rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><span class="ms-2 fw-semibold">(3 reviews)</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="stock-btn rounded-pill">In Stock</span>
                                </td>
                                <td>
                                    <span class="price fw-bold">$918.00</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-5">Add to Cart</a>
                                    <a href="#" class="close-btn ms-3"><i class="fas fa-close"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--wishlist section end-->

@endsection
@section('scripts') @endsection
