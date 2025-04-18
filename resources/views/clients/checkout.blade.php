@extends('layouts.client')

@section('title', 'Checkout')

@section('content')
    <!-- Breakcrumbs -->
    <div class="tf-sp-3 pb-0">
        <div class="container">
            <ul class="breakcrumbs">
                <li>
                    <a href="index-2.html" class="body-small link">
                        Home
                    </a>
                </li>
                <li class="d-flex align-items-center">
                    <i class="icon icon-arrow-right"></i>
                </li>
                <li>
                    <span class="body-small"> Check Out</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Breakcrumbs -->

    <!-- Check Out Cart -->
    <section class="tf-sp-2">
        <div class="container">
            <div class="checkout-status tf-sp-2 pt-0">
                <div class="checkout-wrap">
                    <span class="checkout-bar next"></span>
                    <div class="step-payment ">
                        <span class="icon">
                            <i class="icon-shop-cart-1"></i>
                        </span>
                        <a href="shop-cart.html" class="link body-text-3">Shopping Cart</a>
                    </div>
                    <div class="step-payment">
                        <span class="icon">
                            <i class="icon-shop-cart-2"></i>
                        </span>
                        <a href="checkout.html" class="text-secondary link body-text-3">Shopping & Checkout</a>

                    </div>
                    <div class="step-payment">
                        <span class="icon">
                            <i class="icon-shop-cart-3"></i>
                        </span>
                        <a href="order-details.html" class="link body-text-3">Confirmation</a>
                    </div>
                </div>
            </div>
            <div class="tf-checkout-wrap flex-lg-nowrap">
                <div class="page-checkout">
                    <div class="wrap">
                        <h5 class="title has-account">
                            <span class="fw-semibold">Contact</span>
                            <span class="body-text-3">Have an account? <a href="#register" data-bs-toggle="modal"
                                    class="body-text-3 text-secondary link">Login</a></span>

                        </h5>
                        <form action="#" class="form-checkout-contact">
                            <label class="body-md-2 fw-semibold">Email or Phone</label>
                            <input class="def" type="text" placeholder="Your contact" required>
                            <p class="caption text-main-2 font-2">Order information will be sent to your email</p>
                        </form>
                    </div>
                    <div class="wrap">
                        <h5 class="title fw-semibold">
                            Delivery
                        </h5>
                        <form action="#" class="def">
                            <fieldset>
                                <label>Country/Region</label>
                                <div class="tf-select">
                                    <select>
                                        <option selected>Select your Country/Region</option>
                                        <option>American</option>
                                    </select>
                                </div>
                            </fieldset>
                            <div class="cols">
                                <fieldset>
                                    <label>First name</label>
                                    <input type="text" placeholder="e.g. Jonn" required>
                                </fieldset>
                                <fieldset>
                                    <label>Last name</label>
                                    <input type="text" placeholder="e.g. Doe" required>
                                </fieldset>
                            </div>
                            <div class="cols">
                                <fieldset>
                                    <label>City</label>
                                    <input type="text" placeholder="e.g. New York" required>
                                </fieldset>
                                <fieldset>
                                    <label>State</label>
                                    <div class="tf-select">
                                        <select>
                                            <option selected>Select</option>
                                            <option>Alabam</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Georgia</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label>ZIP code</label>
                                    <input type="text" placeholder="e.g. 83254" required>
                                </fieldset>
                            </div>
                            <fieldset>
                                <label>Address</label>
                                <input type="email" placeholder="Your detailed address" required>
                            </fieldset>
                            <fieldset>
                                <label>Order note</label>
                                <textarea placeholder="Note on your order"></textarea>
                            </fieldset>
                        </form>
                    </div>
                    <div class="wrap">
                        <h5 class="title">
                            Payment
                        </h5>
                        <form action="#" class="form-payment">
                            <div class="payment-box" id="payment-box">
                                <div class="payment-item payment-choose-card active">
                                    <label for="credit-card-method" class="payment-header" data-bs-toggle="collapse"
                                        data-bs-target="#credit-card-payment" aria-controls="credit-card-payment"
                                        aria-expanded="true">
                                        <span class="body-md-2 fw-semibold title">Select payment method</span>
                                        <input type="radio" name="payment-method" class="d-none tf-check-rounded"
                                            id="credit-card-method" checked="">
                                        <p class="select-payment">
                                            Mastercard
                                        </p>
                                    </label>
                                    <div id="credit-card-payment" class="collapse show" data-bs-parent="#payment-box">
                                        <div class="payment-body">
                                            <fieldset>
                                                <label>Credit Card number</label>
                                                <input type="text" class="number-credit-card"
                                                    placeholder="xxxx   xxxx   xxxx   xxxx">
                                            </fieldset>
                                            <div class="cols">
                                                <fieldset>
                                                    <label>Expiration date</label>
                                                    <input type="date">
                                                </fieldset>
                                                <fieldset>
                                                    <label>CVV</label>
                                                    <input type="number" placeholder="xxx">
                                                </fieldset>
                                            </div>
                                            <fieldset>
                                                <label>Name on card</label>
                                                <input type="text" placeholder="e.g. JOHNDOE">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-item">
                                    <label for="delivery-method" class="payment-header radio-item collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#delivery-payment"
                                        aria-controls="delivery-payment" aria-expanded="false">
                                        <input type="radio" name="payment-method" class="tf-check-rounded"
                                            id="delivery-method">
                                        <span class="body-text-3">Cash on delivery</span>
                                    </label>
                                    <div id="delivery-payment" class="collapse" data-bs-parent="#payment-box"></div>
                                </div>
                            </div>
                            <div class="box-btn">
                                <a href="order-details.html" class="tf-btn w-100">
                                    <span class="text-white">Place order</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flat-sidebar-checkout">
                    <div class="sidebar-checkout-content">
                        <h5 class="fw-semibold">Order Summary</h5>
                        <ul class="list-product">
                            <li class="item-product">
                                <a href="#" class="img-product">
                                    <img src="{{ asset('clients/images/product/sc-2.jpg') }}" alt="">
                                </a>
                                <div class="content-box">
                                    <a href="#" class="link-secondary body-md-2 fw-semibold">
                                        Audio-Technica ATH-AD700X Audiophile Open-Air
                                    </a>
                                    <p class="price-quantity price-text fw-semibold">
                                        $80.000
                                        <span class="body-md-2 text-main-2 fw-normal">X1</span>
                                    </p>
                                    <p class="body-md-2 text-main-2">Gray</p>
                                </div>
                            </li>
                        </ul>
                        <div class="">
                            <p class="body-md-2 fw-semibold sub-type">Discount code</p>
                            <form action="#" class="ip-discount-code style-2">
                                <input type="text" class="def" placeholder="Your code" required="">
                                <button type="submit" class="tf-btn btn-gray-2">
                                    <span>Apply</span>
                                </button>
                            </form>
                        </div>
                        <ul class="sec-total-price">
                            <li><span class="body-text-3">Sub total</span><span class="body-text-3">$80.000</span>
                            </li>
                            <li><span class="body-text-3">Shipping</span><span class="body-text-3">Free
                                    shipping</span></li>
                            <li><span class="body-md-2 fw-semibold">Total</span><span
                                    class="body-md-2 fw-semibold text-primary">$80.000</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Check Out Cart -->

    <!-- Recently -->
    <section class="tf-sp-2">
        <div class="container">
            <div class="flat-title">
                <h5 class="fw-semibold">Recently Viewed</h5>
                <div class="box-btn-slide relative">
                    <div class="swiper-button-prev nav-swiper nav-prev-products">
                        <i class="icon-arrow-left-lg"></i>
                    </div>
                    <div class="swiper-button-next nav-swiper nav-next-products">
                        <i class="icon-arrow-right-lg"></i>
                    </div>
                </div>
            </div>
            <div class="swiper tf-sw-products" data-preview="5" data-tablet="4" data-mobile-sm="3" data-mobile="2"
                data-space-lg="30" data-space-md="20" data-space="15" data-pagination="2" data-pagination-sm="3"
                data-pagination-md="4" data-pagination-lg="5">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border wow fadeInLeft" data-wow-delay="0s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-134.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-134.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-detail-12.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-detail-12.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Headphone</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            Urbanears Pampas – Wireless Over-Ear Headphones with Immersive Sound
                                            (Almond Beige)
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$48.990</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-2.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-2.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-detail-9.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-detail-9.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Headphone</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            Upgrader Headphones – Altec Lansing by ECCO Design, Premium Sound &
                                            Comfort
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$27.500</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-3.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-3.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-10.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-10.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Smartwatch</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            Apple Watch Series 6 (GPS) – 40mm Aluminum Case with Sport Band,
                                            Official Warranty
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$63.999</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-4.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-4.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-19.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-19.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Laptop & Computer</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            Lenovo Yoga 910-13IKB – 2-in-1 Ultrabook with Touchscreen & 360° Hinge
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$39.990</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-5.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-5.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-153.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-153.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Wireless Earphones</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            JBL LIVE200BT – Wireless Neckband Earphones with Premium Sound & Comfort
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$14.999</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 6 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-6.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-6.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-43.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-43.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Electronics</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            SteelSeries Aerox 9 Wireless – Ultra-Lightweight Gaming Mouse with 12
                                            Programmable Buttons
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$87.500</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 7 -->
                    <div class="swiper-slide">
                        <div class="card-product style-img-border">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="img-product lazyload"
                                        src="{{ asset('clients/images/product/product-7.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-7.jpg') }}"
                                        alt="image-product">
                                    <img class="img-hover lazyload"
                                        src="{{ asset('clients/images/product/product-7.jpg') }}"
                                        data-src="{{ asset('clients/images/product/product-7.jpg') }}"
                                        alt="image-product">
                                </a>
                                <ul class="list-product-btn">
                                    <li>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="box-icon add-to-cart btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-cart2"></span>
                                            <span class="tooltip">Add to Cart</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block wishlist">
                                        <a href="javascript:void(0);"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-heart2"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#quickView" data-bs-toggle="modal"
                                            class="box-icon quickview btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#compare" data-bs-toggle="offcanvas"
                                            class="box-icon btn-icon-action hover-tooltip tooltip-left">
                                            <span class="icon icon-compare1"></span>
                                            <span class="tooltip">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-product-info">
                                <div class="box-title">
                                    <div class="d-flex flex-column">
                                        <p class="caption text-main-2 font-2">Wired Earphones</p>
                                        <a href="product-detail.html"
                                            class="name-product body-md-2 fw-semibold text-secondary link">
                                            3.5mm Stereo Earphones – HiFi Bass Headphones with Microphone for Music
                                            & Calls
                                        </a>
                                    </div>
                                    <p class="price-wrap fw-medium">
                                        <span class="new-price price-text fw-medium">$74.600</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex d-lg-none sw-dot-default sw-pagination-products justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Recently -->

    <!-- Iconbox -->
    <div class="tf-sp-2 pt-0">
        <div class="container">
            <div class="swiper tf-sw-iconbox" data-preview="5" data-tablet="3" data-mobile-sm="2" data-mobile="1"
                data-space-lg="20" data-space-md="20" data-space="15">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <i class="icon icon-delivery text-black"></i>
                            </div>
                            <div class="content">
                                <p class="body-text fw-semibold">Free delivery</p>
                                <p class="body-text-3 text-cl-1">Velit ullamco elit et aliqua magna</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <i class="icon icon-check-2 text-black"></i>
                            </div>
                            <div class="content">
                                <p class="body-text fw-semibold">Support 24/7</p>
                                <p class="body-text-3 text-cl-1">Velit ullamco elit et aliqua magna</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <i class="icon icon-money-bag text-black"></i>
                            </div>
                            <div class="content">
                                <p class="body-text fw-semibold">Payment</p>
                                <p class="body-text-3 text-cl-1">Velit ullamco elit et aliqua magna</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <i class="icon icon-shield text-black"></i>
                            </div>
                            <div class="content">
                                <p class="body-text fw-semibold">Reliable</p>
                                <p class="body-text-3 text-cl-1">Velit ullamco elit et aliqua magna</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box">
                            <div class="icon-box">
                                <i class="icon icon-accept text-black"></i>
                            </div>
                            <div class="content">
                                <p class="body-text fw-semibold">Guarantee</p>
                                <p class="body-text-3 text-cl-1">Velit ullamco elit et aliqua magna</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-iconbox sw-dot-default justify-content-center"></div>
            </div>
        </div>
    </div>
    <!-- /Iconbox -->
@endsection
