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
                        <h1 class="text-white">Checkout</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--checkout section start -->
    <section class="checkout-section ptb-120">
        <div class="container">
            <a href="#" class="checkout-badge bg-primary-light rounded d-block">Returning customer?<strong> Click here to login</strong></a>
            <div class="row">
                <div class="col-xl-7">
                    <div class="checkout-box bg-white rounded mt-30">
                        <h4 class="mb-3">Billing Details</h4>
                        <span class="spacer"></span>
                        <form class="checkout-form mt-30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-field">
                                        <label>First name*</label>
                                        <input type="text" placeholder="First name" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-field">
                                        <label>Last name*</label>
                                        <input type="text" placeholder="Last name" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>Company name(optional)</label>
                                        <input type="text" placeholder="Company name" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>Country / Region*</label>
                                        <input type="text" placeholder="Country / Region" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>Street address</label>
                                        <input type="text" placeholder="House number and street name" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <input type="text" placeholder="Apartment, suite, unit, etc(optional)" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>State/Country*</label>
                                        <input type="text" placeholder="Town/City" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>Postcode / ZIP*</label>
                                        <input type="text" placeholder="Post code" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>Phone*</label>
                                        <input type="tel" placeholder="Phone" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label>Email address*</label>
                                        <input type="email" placeholder="Email address" class="w-100 border rounded">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="alternate-shipping">
                                        <label><input type="checkbox" class="me-2">Ship to a different address?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="alternate-shipping-form mt-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-field">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-field">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="First Name" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field">
                                            <label>Country / Region*</label>
                                            <input type="text" placeholder="Country / Region" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field">
                                            <label>Street address</label>
                                            <input type="text" placeholder="House number and street name" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field">
                                            <input type="text" placeholder="Apartment, suite, unit, etc(optional)" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field">
                                            <label>State/Country*</label>
                                            <input type="text" placeholder="Town/City" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field">
                                            <label>Postcode / ZIP*</label>
                                            <input type="text" placeholder="Post code" class="w-100 border rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-field mb-0">
                                            <label>Phone*</label>
                                            <input type="tel" placeholder="Phone" class="w-100 border rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="order-sidebar bg-white rounded mt-30">
                        <h4 class="mb-3">Your order</h4>
                        <span class="spacer"></span>
                        <table class="w-100">
                            <tr>
                                <th>Product</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>Aluminium Wheel AR-19</td>
                                <td>$1236.000</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>$1236.00</td>
                            </tr>
                            <tr>
                                <td>Shipping Fee</td>
                                <td>$20</td>
                            </tr>
                        </table>
                        <form class="coupon-form d-flex align-items-center my-2">
                            <input type="text" placeholder="coupon" class="border w-100 rounded">
                            <button type="submit" class="btn btn-secondary ms-3">Apply</button>
                        </form>
                        <table class="w-100">
                            <tr>
                                <th>Total:</th>
                                <th>$1256.00</th>
                            </tr>
                        </table>
                        <div class="payments-method mt-4">
                            <label><input type="radio" class="me-2" name="payments">Check Payment</label>
                            <label><input type="radio" class="me-2" name="payments">Paypal<img src="/../rent_html/assets/img/icons/cards.svg" alt="cards" class="ms-3"></label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md mt-40">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--checkout section end-->

@endsection
@section('scripts') @endsection
