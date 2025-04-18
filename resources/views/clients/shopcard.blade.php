@extends('layouts.client')

@section('title', 'Shop Card')

@section('content')
    <!-- Breakcrumbs -->
    <div class="tf-sp-3 pb-0">
        <div class="container">
            <ul class="breakcrumbs">
                <li><a href="index-2.html" class="body-small link">Home</a></li>
                <li class="d-flex align-items-center">
                    <i class="icon icon-arrow-right"></i>
                </li>
                <li><span class="body-small">Cart</span></li>
            </ul>
        </div>
    </div>
    <!-- /Breakcrumbs -->

    <!-- Shopping Cart -->
    <div class="s-shoping-cart tf-sp-2">
        <div class="container">
            <div class="checkout-status tf-sp-2 pt-0">
                <div class="checkout-wrap">
                    <span class="checkout-bar first"></span>
                    <div class="step-payment ">
                        <span class="icon">
                            <i class="icon-shop-cart-1"></i>
                        </span>
                        <a href="shop-cart.html" class="text-secondary body-text-3">Shopping Cart</a>
                    </div>
                    <div class="step-payment">
                        <span class="icon">
                            <i class="icon-shop-cart-2"></i>
                        </span>
                        <a href="checkout.html" class="link-secondary body-text-3">Shopping & Checkout</a>

                    </div>
                    <div class="step-payment">
                        <span class="icon">
                            <i class="icon-shop-cart-3"></i>
                        </span>
                        <a href="order-details.html" class="link-secondary body-text-3">Confirmation</a>
                    </div>
                </div>
            </div>
            <form action="#" class="form-discount">
                <div class="overflow-x-auto">
                    <table class="tf-table-page-cart">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tf-cart-item">
                                <td class="tf-cart-item_product">
                                    <a href="#" class="img-box"><img
                                            src="{{ asset('clients/images/product/shop-cart-1.jpg') }}" alt=""></a>
                                    <div class="cart-info">
                                        <a href="#" class="cart-title body-md-2 fw-semibold link">
                                            5Pcs/Lot Trolling Bait
                                            Minnow Fishing Lure 8.37g Bass Crankbait
                                            Tackle Wobbler
                                        </a>
                                        <div class="variant-box">
                                            <p class="body-text-3">Color:</p>
                                            <div class="tf-select">
                                                <select>
                                                    <option selected="selected">Yellow</option>
                                                    <option>Green</option>
                                                    <option>Black</option>
                                                    <option>Red</option>
                                                    <option>Beige</option>
                                                    <option>Pink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-cart-title="Price" class="tf-cart-item_price ">
                                    <p class="cart-price price-on-sale price-text fw-medium">$22.99</p>
                                </td>
                                <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                    <div class="wg-quantity">
                                        <span class="btn-quantity btn-decrease">
                                            <i class="icon-minus"></i>
                                        </span>
                                        <input class="quantity-product" type="text" name="number" value="1">
                                        <span class="btn-quantity btn-increase">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                </td>
                                <td data-cart-title="Total" class="tf-cart-item_total">
                                    <p class="cart-total total-price price-text fw-medium">$22.99</p>
                                </td>
                                <td data-cart-title="Remove" class="remove-cart text-xxl-end">
                                    <span class="remove icon icon-close link"></span>
                                </td>
                            </tr>
                            <tr class="tf-cart-item">
                                <td class="tf-cart-item_product">
                                    <a href="#" class="img-box"><img
                                            src="{{ asset('clients/images/product/shop-cart-2.jpg') }}" alt=""></a>
                                    <div class="cart-info">
                                        <a href="#" class="cart-title body-md-2 fw-semibold link">
                                            Intel Core i9-12900K Unlocked Desktop Processor - 16 <br
                                                class="d-none d-xl-block"> Cores And 24
                                            Threads
                                        </a>
                                        <div class="variant-box">
                                            <p class="body-text-3">Color:</p>
                                            <div class="tf-select">
                                                <select>
                                                    <option>Yellow</option>
                                                    <option>Green</option>
                                                    <option selected="selected">Black</option>
                                                    <option>Red</option>
                                                    <option>Beige</option>
                                                    <option>Pink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-cart-title="Price" class="tf-cart-item_price ">
                                    <p class="cart-price price-on-sale price-text fw-medium">$549.99</p>
                                </td>
                                <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                    <div class="wg-quantity">
                                        <span class="btn-quantity btn-decrease">
                                            <i class="icon-minus"></i>
                                        </span>
                                        <input class="quantity-product" type="text" name="number" value="1">
                                        <span class="btn-quantity btn-increase">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                </td>
                                <td data-cart-title="Total" class="tf-cart-item_total">
                                    <p class="cart-total total-price price-text fw-medium">$549.99</p>
                                </td>
                                <td data-cart-title="Remove" class="remove-cart text-xxl-end">
                                    <span class="remove icon icon-close link"></span>
                                </td>
                            </tr>
                            <tr class="tf-cart-item">
                                <td class="tf-cart-item_product">
                                    <a href="#" class="img-box"><img
                                            src="{{ asset('clients/images/product/shop-cart-3.jpg') }}"
                                            alt=""></a>
                                    <div class="cart-info">
                                        <a href="#" class="cart-title body-md-2 fw-semibold link">
                                            Xiaomi Redmi Note 9 Pro 6/128GB GLOBAL VERSION <br class="d-none d-xl-block">
                                            6.67" Snapdragon 720G By
                                            FedEx
                                        </a>
                                        <div class="variant-box">
                                            <p class="body-text-3">Color:</p>
                                            <div class="tf-select">
                                                <select>
                                                    <option>Yellow</option>
                                                    <option selected="selected">Green</option>
                                                    <option>Black</option>
                                                    <option>Red</option>
                                                    <option>Beige</option>
                                                    <option>Pink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-cart-title="Price" class="tf-cart-item_price ">
                                    <p class="cart-price price-on-sale price-text fw-medium">$279.71</p>
                                </td>
                                <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                    <div class="wg-quantity">
                                        <span class="btn-quantity btn-decrease">
                                            <i class="icon-minus"></i>
                                        </span>
                                        <input class="quantity-product" type="text" name="number" value="1">
                                        <span class="btn-quantity btn-increase">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                </td>
                                <td data-cart-title="Total" class="tf-cart-item_total">
                                    <p class="cart-total total-price price-text fw-medium">$279.71</p>
                                </td>
                                <td data-cart-title="Remove" class="remove-cart text-xxl-end">
                                    <span class="remove icon icon-close link"></span>
                                </td>
                            </tr>
                            <tr class="tf-cart-item">
                                <td class="tf-cart-item_product">
                                    <a href="#" class="img-box"><img
                                            src="{{ asset('clients/images/product/shop-cart-4.jpg') }}"
                                            alt=""></a>
                                    <div class="cart-info">
                                        <a href="#" class="cart-title body-md-2 fw-semibold link">
                                            Lenovo G27Q 27" QHD (2560 x 1440) IPS 165Hz 1ms <br class="d-none d-xl-block">
                                            FreeSync Premium Gaming
                                            Monitor
                                        </a>
                                        <div class="variant-box">
                                            <p class="body-text-3">Color:</p>
                                            <div class="tf-select">
                                                <select>
                                                    <option>Yellow</option>
                                                    <option>Green</option>
                                                    <option selected="selected">Black</option>
                                                    <option>Red</option>
                                                    <option>Beige</option>
                                                    <option>Pink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-cart-title="Price" class="tf-cart-item_price ">
                                    <p class="cart-price price-on-sale price-text fw-medium">$199.99</p>
                                </td>
                                <td data-cart-title="Quantity" class="tf-cart-item_quantity">
                                    <div class="wg-quantity">
                                        <span class="btn-quantity btn-decrease">
                                            <i class="icon-minus"></i>
                                        </span>
                                        <input class="quantity-product" type="text" name="number" value="1">
                                        <span class="btn-quantity btn-increase">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                </td>
                                <td data-cart-title="Total" class="tf-cart-item_total">
                                    <p class="cart-total total-price price-text fw-medium">$199.99</p>
                                </td>
                                <td data-cart-title="Remove" class="remove-cart text-xxl-end">
                                    <span class="remove icon icon-close link"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="cart-bottom">
                    <div class="ip-discount-code">
                        <input type="text" placeholder="Enter your cupon code" required>
                        <button type="submit" class="tf-btn btn-gray">
                            <span class="text-white">Apply coupon</span>
                        </button>
                    </div>
                    <span class="last-total-price main-title fw-semibold">Total:</span>
                </div>
            </form>
            <div class="box-btn">
                <a href="404-2.html" class="tf-btn btn-gray"><span class="text-white">Continue
                        shopping</span></a>
                <a href="checkout.html" class="tf-btn"><span class="text-white">Proceed to checkout</span></a>
            </div>

        </div>
    </div>
    <!-- /Shopping Cart -->

    <!-- Testimonial -->
    <div class="themesFlat">
        <div class="container">
            <div class="tf-cart-sold">
                <div class="notification-progress">
                    <div class="delivery-progress">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 50%;"></div>
                        </div>
                        <p class="body-text-3">
                            <i class="icon-delivery-2 fs-24"></i>
                            Free shipping on all orders over <span class="fw-bold">$250</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper tf-sw-products" data-preview="3" data-tablet="2" data-mobile-sm="1" data-mobile="1"
                data-space-lg="30" data-space-md="15" data-space="15" data-pagination="1" data-pagination-sm="1"
                data-pagination-md="2" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="wg-testimonial">
                            <div class="entry_image">
                                <img src="{{ asset('clients/images/avatar/review-1.jpg') }}"
                                    data-src="{{ asset('clients/images/avatar/review-1.jpg') }}" alt=""
                                    class="lazyload">
                            </div>
                            <div class="content">
                                <div class="box-title">
                                    <a href="#" class="entry_name product-title link fw-semibold">
                                        Cameron Williamson
                                    </a>
                                    <ul class="entry_meta">
                                        <li>
                                            <p class="body-small text-main-2">Color: Black</p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li>
                                            <p class="body-small text-main-2 fw-semibold">Verified Purchase</p>
                                        </li>
                                    </ul>
                                    <ul class="list-star">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                                <p class="entry_text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla iaculis
                                    velit,
                                    pharetra aliquet urna faucibus et. Vivamus blandit vulputate risus. Praesent at
                                    justo sed
                                    nibh interdum viverra at non magna
                                </p>
                                <p class="entry_date body-small">
                                    December 14, 2020 at 17:20
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="wg-testimonial">
                            <div class="entry_image">
                                <img src="images/avatar/review-1.jpg" data-src="images/avatar/review-1.jpg"
                                    alt="" class="lazyload">
                            </div>
                            <div class="content">
                                <div class="box-title">
                                    <a href="#" class="entry_name product-title link fw-semibold">
                                        Cameron Williamson
                                    </a>
                                    <ul class="entry_meta">
                                        <li>
                                            <p class="body-small text-main-2">Color: Black</p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li>
                                            <p class="body-small text-main-2 fw-semibold">Verified Purchase</p>
                                        </li>
                                    </ul>
                                    <ul class="list-star">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                                <p class="entry_text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla iaculis
                                    velit,
                                    pharetra aliquet urna faucibus et. Vivamus blandit vulputate risus. Praesent at
                                    justo sed
                                    nibh interdum viverra at non magna
                                </p>
                                <p class="entry_date body-small">
                                    December 14, 2020 at 17:20
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="wg-testimonial">
                            <div class="entry_image">
                                <img src="images/avatar/review-1.jpg" data-src="images/avatar/review-1.jpg"
                                    alt="" class="lazyload">
                            </div>
                            <div class="content">
                                <div class="box-title">
                                    <a href="#" class="entry_name product-title link fw-semibold">
                                        Cameron Williamson
                                    </a>
                                    <ul class="entry_meta">
                                        <li>
                                            <p class="body-small text-main-2">Color: Black</p>
                                        </li>
                                        <li class="br-line"></li>
                                        <li>
                                            <p class="body-small text-main-2 fw-semibold">Verified Purchase</p>
                                        </li>
                                    </ul>
                                    <ul class="list-star">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                                <p class="entry_text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla iaculis
                                    velit,
                                    pharetra aliquet urna faucibus et. Vivamus blandit vulputate risus. Praesent at
                                    justo sed
                                    nibh interdum viverra at non magna
                                </p>
                                <p class="entry_date body-small">
                                    December 14, 2020 at 17:20
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex d-xl-none sw-dot-default sw-pagination-products justify-content-center"></div>
            </div>
        </div>
    </div>
    <!-- /Testimonial -->

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
