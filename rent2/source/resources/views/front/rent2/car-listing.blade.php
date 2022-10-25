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
                        <h1 class="text-white">Car Listing</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white fw-500">Page</li>
                            <li class="breadcrumb-item text-white fw-500">Car Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--car listing section start-->
    <section class="car-listing-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="car_listing_sidebar">
                        <h4 class="mb-2">Add Your Car Information</h4>
                        <p class="mb-0">Holistically embrace strategic theme and high standards in information.</p>
                        <div class="car_listing_nav mt-4">
                            <ul>
                                <li><a href="#basic" class="active">Basic Info</a></li>
                                <li><a href="#price">Vehicle Price</a></li>
                                <li><a href="#info">Vehicle Information</a></li>
                                <li><a href="#vin">Registration & VIN</a></li>
                                <li><a href="#features">Select Your Car Features</a></li>
                                <li><a href="#gallery">Car Gallery / Video</a></li>
                                <li><a href="#map">Location Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="car_listing_form">
                        <form>
                            <div class="listing_info_box bg-white rounded" id="basic">
                                <h5 class="mb-4">Basic info</h5>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <label>Your car title</label>
                                            <input type="text" placeholder="Mercedes benz e 400 coupe 2017">
                                            <span class="estimated-text">56 characters left</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field mt-4">
                                            <label>Vehicle condition*</label>
                                            <select class="form-select">
                                                <option>Used Car</option>
                                                <option>Brand New</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field mt-4">
                                            <label>Are you listing on Finder as part of a company?</label>
                                            <div class="radio-field">
                                                <label class="d-flex align-items-center">
                                                    <input type="radio" name="finder" class="d-inline-block w-auto" checked="checked">
                                                    <span class="input-circle"></span>
                                                    I am a registered dealer
                                                </label>
                                                <label class="d-flex align-items-center">
                                                    <input type="radio" name="finder" class="d-inline-block w-auto">
                                                    <span class="input-circle"></span>
                                                    I am a private seller
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_info_box bg-white rounded mt-40" id="price">
                                <h4 class="mb-4">Vehicle pricing</h4>
                                <div class="row">
                                    <div class="col-6 col-sm-5">
                                        <div class="input-field">
                                            <label>Currency*</label>
                                            <select class="form-select">
                                                <option>USD</option>
                                                <option>EURO</option>
                                                <option>POUND</option>
                                            </select>
                                            <div class="meta-checkbox mt-1">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="toggle-switch"></span>
                                                    Negotiated price
                                                </label>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-7">
                                        <div class="input-field">
                                            <label>Price*</label>
                                            <input type="text" placeholder="15000.00$">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_info_box bg-white rounded mt-40" id="info">
                                <h5 class="mb-4">Vehicle information</h5>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label>Make*</label>
                                            <input type="text" placeholder="Mecedes benz e 400 coupe 2017">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label>Model*</label>
                                            <select class="form-select">
                                                <option>E-400</option>
                                                <option>E-400</option>
                                                <option>E-400</option>
                                                <option>E-400</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Condition*</label>
                                            <select class="form-select">
                                                <option>New</option>
                                                <option>Used</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Type*</label>
                                            <select class="form-select">
                                                <option>SUV</option>
                                                <option>SUV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Year*</label>
                                            <select class="form-select">
                                                <option>2017</option>
                                                <option>2017</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Drive type*</label>
                                            <select class="form-select">
                                                <option>Front Wheel</option>
                                                <option>Front Wheel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Transmission*</label>
                                            <select class="form-select">
                                                <option>Menual</option>
                                                <option>Menual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Fuel type*</label>
                                            <select class="form-select">
                                                <option>Gasoline</option>
                                                <option>Gasoline</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Engine Size*</label>
                                            <select class="form-select">
                                                <option>2.5 Turbor 6 cylinder</option>
                                                <option>2.5 Tuubor 6 cylinder</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Mileage*</label>
                                            <select class="form-select">
                                                <option>2000km</option>
                                                <option>1500km</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Cylinders*</label>
                                            <select class="form-select">
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Color*</label>
                                            <select class="form-select">
                                                <option>White</option>
                                                <option>Black</option>
                                                <option>Purple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Doors*</label>
                                            <select class="form-select">
                                                <option>4 Doors</option>
                                                <option>3 Doors</option>
                                                <option>2 Doors</option>
                                                <option>1 Doors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <label>Fuel type</label>
                                            <select class="form-select">
                                                <option>Gasoline</option>
                                                <option>Gasoline</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <label>Description</label>
                                            <textarea placeholder="Description" rows="6"></textarea>
                                            <span class="estimated-text">3000 characters left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_info_box bg-white rounded mt-40" id="vin">
                                <h4 class="mb-2">Registration & VIN</h4>
                                <p class="mb-4">Providing both your number plate and VIN will make your potential buyers feel more secure.</p>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label>Number plat*</label>
                                            <input type="text" placeholder="Number plat#">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label>Register date*</label>
                                            <input type="text" placeholder="Register date">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <label>Vehicle identification*</label>
                                            <input type="text" placeholder="Vehicle identification number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_info_box bg-white rounded mt-40" id="features">
                                <h4 class="mb-4">Select Car Feature</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <div class="top-label d-flex mb-4">
                                                <h6 class="mb-0">Interior</h6>
                                                <span class="spacer align-self-end"></span>
                                            </div>
                                            <div class="checkbox-list">
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Multi-zone A/C</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Heated front seats</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Navigation system</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Leather seats</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Intermittent wipers</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Memory seat</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Premium sound system</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Bluetooth</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Android Auto</label>
                                            </div>
                                            <a href="#" class="checkbox-expand-btn fw-semibold mt-3 d-inline-block"><span class="me-1"><i class="fa-solid fa-plus"></i></span>Show More</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <div class="top-label d-flex mb-4">
                                                <h6 class="mb-0">Safety</h6>
                                                <span class="spacer align-self-end"></span>
                                            </div>
                                            <div class="checkbox-list">
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Adaptive Cruise Control</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Cooled Seats</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Keyles Start</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Navigation System</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Remote Start</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Memory seat</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Airbag: driver</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Antilock brakes</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Stability control</label>
                                            </div>
                                            <a href="#" class="checkbox-expand-btn fw-semibold mt-3 d-inline-block"><span class="me-1"><i class="fa-solid fa-plus"></i></span>Show More</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-field">
                                            <div class="top-label d-flex mb-4">
                                                <h6 class="mb-0">Exterior</h6>
                                                <span class="spacer align-self-end"></span>
                                            </div>
                                            <div class="checkbox-list">
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Sunroof</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Panoramic roof</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Tinted glass</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Leather seats</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Fog lights</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Memory seat</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Premium sound system</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Bluetooth</label>
                                                <label><input type="checkbox" class="w-auto d-inline-block me-2">Android Auto</label>
                                            </div>
                                            <a href="#" class="checkbox-expand-btn fw-semibold mt-3 d-inline-block"><span class="me-1"><i class="fa-solid fa-plus"></i></span>Show More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_info_box bg-white rounded mt-40" id="gallery">
                                <h4 class="mb-4">Photos/Video</h4>
                                <ul class="list-content">
                                    <li>The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first</li>
                                    <li>The maximum video size is 10MB. Formats: mp4, mov.</li>
                                </ul>
                                <div class="file_upload mt-4">
                                    <input type="file" class="file_upload_field">
                                    <button class="btn btn-primary btn-md" type="button"><span class="me-2"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>Upload Photo/Video</button>
                                    <span class="file_name d-block fw-semibold mt-1">or Drag them in</span>
                                </div>
                            </div>
                            <div class="listing_info_box bg-white rounded mt-40" id="map">
                                <h4 class="mb-4">Location Map</h4>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label>Country/Region*</label>
                                            <input type="text" placeholder="America">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label>State*</label>
                                            <input type="text" placeholder="New York">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <label>Street address*</label>
                                            <input type="text" placeholder="775 Rolling Green Rd.">
                                        </div>
                                    </div>
                                </div>
                                <div class="map-wrapper mt-40">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.222179060618!2d-74.15607328467121!3d40.7169097046537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250d225bfafdd%3A0x249f013a2cd25d9!2sJersey%20City%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1661765922768!5m2!1sen!2sbd" style="border:0; width:100%; height: 400px;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="form-btns d-flex align-items-center mt-40">
                                <a href="#" class="btn btn-primary">Add Listing<span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                <a href="#" class="btn btn-secondary"><span class="me-2"><i class="fa-solid fa-eye"></i></span>Preview</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--car listing section end-->

@endsection
@section('scripts') @endsection

