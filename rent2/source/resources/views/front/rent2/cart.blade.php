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
                        <h1 class="text-white">Shopping Cart</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Shopping Cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--shopping cart-->
    <section class="shopping-cart ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9">
                    <div class="shopping-cart-left">
                        <div class="checkout-badge bg-primary-light d-flex align-items-center justify-content-between">
                            <label>
                                <input type="checkbox" class="me-2">Select All (02 ITEM (S))
                            </label>
                            <a href="#" class="text-secondary"><span class="me-1"><i class="fa-solid fa-trash-can"></i></span>Delete</a>
                        </div>
                        <div class="table-content table-responsive bg-white rounded mt-4">
                            <table class="table">
                                <tr>
                                    <th>
                                        <label class="pera-text-2"><input type="checkbox" class="me-1">Select</label>
                                    </th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/../rent_html/assets/img/products/tire.png" alt="tire" class="img-fluid">
                                    </td>
                                    <td>
                                        <h6 class="mb-0">Aluminium Wheel AR-19</h6>
                                    </td>
                                    <td>$459,00</td>
                                    <td>
                                        <div class="cart-count d-inline-flex align-items-center">
                                            <button class="cart-minus bg-transparent"><i class="fa-solid fa-minus"></i></button>
                                            <input type="text" class="cart-input" value="2">
                                            <button class="cart-plus bg-transparent"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>$918,00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="table-bottom d-flex flex-wrap align-items-center justify-content-between bg-white mt-4 pt-4 pt-lg-0 mt-lg-0">
                            <form class="d-flex align-items-center flex-wrap">
                                <input type="text" placeholder="Coupon code">
                                <button type="submit" class="btn btn-secondary btn-md">Apply Now</button>
                            </form>
                            <button type="button" class="btn btn-primary btn-md mt-3 mt-md-0">Update cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="cart-sidebar bg-white rounded mt-5 mt-xxl-0">
                        <h4 class="mb-3">Cart totals</h4>
                        <span class="spacer"></span>
                        <div class="table-responisve">
                            <table class="table">
                                <tr>
                                    <th>Subtotal</th>
                                    <th class="text-end">$1138,00<br>Flat rate <p class="mb-0 fw-normal">Shipping options will be updated during checkout</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="fw-bold border-0">Total</td>
                                    <td class="fw-bold text-end border-0">$918,00</td>
                                </tr>
                            </table>
                            <a href="#" class="btn btn-primary btn-md d-block mt-4">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shopping cart end-->

@endsection
@section('scripts') @endsection
