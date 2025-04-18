 <!-- Top Bar-->
 <div class="tf-topbar line-bt">
     <div class="container">
         <div class="row">
             <div class="col-xl-6 col-12">
                 <div class="topbar-left justify-content-xl-start h-100">
                     <p class="body-small text-main-2">
                         <i class="icon-headphone"></i>
                         Call us for free:
                         <a href="tel:+18001234567" class="text-primary link-secondary fw-semibold">
                             +1(800) 123 4567
                         </a>
                     </p>
                     <p class="body-small text-main-2">
                         Free Shipping on Orders
                         <span class="fw-semibold text-main">$50+</span>
                     </p>
                 </div>
             </div>
             <div class="col-xl-6 d-none d-xl-block">
                 <div class="tf-cur justify-content-end bar-lang">
                     <div class="tf-cur-item tf-currencies gap-0">
                         <i class="icon icon-budget"></i>
                         <div class="tf-curs">
                             <select class="image-select center style-default type-cur">
                                 <option selected>USD | United States ($)</option>
                                 <option>EUR | France (€)</option>
                                 <option>EUR | Germany (€)</option>
                                 <option>VND | Vietnam (₫)</option>
                             </select>
                         </div>
                     </div>
                     <div class="tf-cur-item tf-languages gap-0">
                         <i class="icon icon-global"></i>
                         <div class="tf-lans">
                             <select class="image-select center style-default type-lan">
                                 <option>English</option>
                                 <option>العربية</option>
                                 <option>简体中文</option>
                                 <option>اردو</option>
                             </select>
                         </div>
                     </div>
                     <a href="#log" data-bs-toggle="modal" class="tf-cur-item link">
                         <i class="icon-user-3"></i>
                         <span class="body-small">My account:</span>
                         <i class="icon-arrow-down"></i>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /Top Bar -->

 <!-- Header -->
 <header class="tf-header style-2">
     <div class="inner-header">
         <div class="container">
             <div class="row">
                 <div class="col-md-3 col-7 d-flex align-items-center">
                     <div class="logo-site">
                         <a href="index-2.html">
                             <a href="{{ route('client.home') }}">
                                 <img src="{{ asset('clients/images/logo/logo.svg') }}" alt="Logo">
                             </a>
                     </div>
                 </div>
                 <div class="col-md-6 d-none d-md-block">
                     <div class="header-center justify-content-end">
                         <form action="#" class="form-search-product style-2">
                             <div class="select-category">
                                 <select name="product_cat" id="product_cat" class="dropdown_product_cat">
                                     <option value="" selected="selected">All categories</option>
                                     <option class="level-0" value="apple-products">Apple products</option>
                                     <option class="level-0" value="audio-equipments">Audio Equipments</option>
                                     <option class="level-0" value="camera-video">Camera & Video</option>
                                     <option class="level-0" value="game-room-furniture">Game & Room Furniture
                                     </option>
                                     <option class="level-0" value="gaming-accessories">Gaming Accessories
                                     </option>
                                     <option class="level-0" value="headphone">Headphone</option>
                                     <option class="level-0" value="laptop-tablet">Laptop & Tablet</option>
                                     <option class="level-0" value="server-workstation">Server & Workstation
                                     </option>
                                     <option class="level-0" value="smartphone">Smartphone</option>
                                     <option class="level-0" value="smartwatch">Smartwatch</option>
                                     <option class="level-0" value="storage-digital-devices">Storage & Digital
                                         Devices</option>
                                     <option class="level-0" value="tv-computer-screen">TV & Computer Screen
                                     </option>
                                 </select>
                                 <ul class="select-options">
                                     <li class="link" rel=""><span>All categories</span></li>
                                     <li class="link" rel="apple-products"><span>Apple products</span> </li>
                                     <li class="link" rel="audio-equipments"><span>Audio Equipments</span></li>
                                     <li class="link" rel="camera-video"><span>Camera & Video</span></li>
                                     <li class="link" rel="game-room-furniture"><span>Game & Room
                                             Furniture</span></li>
                                     <li class="link" rel="gaming-accessories"><span>Gaming Accessories</span>
                                     </li>
                                     <li class="link" rel="headphone"><span>Headphone</span></li>
                                     <li class="link" rel="laptop-tablet"><span>Laptop & Tablet</span></li>
                                     <li class="link" rel="server-workstation"><span>Server &
                                             Workstation</span>
                                     </li>
                                     <li class="link" rel="smartphone"><span>Smartphone</span></li>
                                     <li class="link" rel="smartwatch"><span>Smartwatch</span></li>
                                     <li class="link" rel="storage-digital-devices"><span>Storage & Digital
                                             Devices</span></li>
                                     <li class="link" rel="tv-computer-screen"><span>TV & Computer
                                             Screen</span>
                                     </li>
                                 </ul>
                             </div>
                             <span class="br-line type-vertical bg-line"></span>
                             <fieldset>
                                 <input type="text" placeholder="Search for products">
                             </fieldset>
                             <button type="submit" class="btn-submit-form">
                                 <i class="icon-search"></i>
                             </button>
                         </form>
                     </div>
                 </div>
                 <div class="col-md-3 col-5 d-flex align-items-center justify-content-end">
                     <div class="header-right">
                         <div class="support-wrap d-none d-xl-flex">
                             <img src="{{ asset('clients/icons/headphone-2.svg') }}" alt=""
                                 class="flex-shrink-0" style="height: 44px; width: 44px;">
                             <div class="content">
                                 <p class="call-us body-text-3">
                                     Call us now:
                                     <a href="tel:1234567" class="text-primary link-main body-md-2">+1(800) 123
                                         4567</a>
                                 </p>
                                 <p class="mail-us body-text-3">
                                     Email:
                                     <a href="mailto:Onsus@support.com"
                                         class="text-secondary link-main ">Onsus@support.com</a>
                                 </p>
                             </div>
                         </div>
                         <ul class="nav-icon justify-content-xl-center d-xl-none">
                             <li class="nav-account">
                                 <a href="#log" data-bs-toggle="modal" class="link nav-icon-item">
                                     <span>
                                         <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M10.9998 11.5283C5.20222 11.5283 0.485352 16.2452 0.485352 22.0428C0.485352 22.2952 0.69017 22.5 0.942518 22.5C1.19487 22.5 1.39968 22.2952 1.39968 22.0428C1.39968 16.749 5.70606 12.4426 10.9999 12.4426C16.2937 12.4426 20.6001 16.749 20.6001 22.0428C20.6001 22.2952 20.8049 22.5 21.0572 22.5C21.3096 22.5 21.5144 22.2952 21.5144 22.0428C21.5144 16.2443 16.7975 11.5283 10.9998 11.5283Z"
                                                 fill="#333E48" stroke="#333E48" stroke-width="0.3"></path>
                                             <path
                                                 d="M10.9999 0.5C8.22767 0.5 5.97119 2.75557 5.97119 5.52866C5.97119 8.30174 8.22771 10.5573 10.9999 10.5573C13.772 10.5573 16.0285 8.30174 16.0285 5.52866C16.0285 2.75557 13.772 0.5 10.9999 0.5ZM10.9999 9.64303C8.73146 9.64303 6.88548 7.79705 6.88548 5.52866C6.88548 3.26027 8.73146 1.41429 10.9999 1.41429C13.2682 1.41429 15.1142 3.26027 15.1142 5.52866C15.1142 7.79705 13.2682 9.64303 10.9999 9.64303Z"
                                                 fill="#333E48" stroke="#333E48" stroke-width="0.3"></path>
                                         </svg>

                                     </span>
                                     <p class="body-small">
                                         Sign in
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-cart">
                                 <a href="#shoppingCart" data-bs-toggle="offcanvas" class="link nav-icon-item">
                                     <span>
                                         <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M8.55865 19.1096C6.8483 19.1096 5.46191 20.496 5.46191 22.2064C5.46191 23.9165 6.8483 25.3029 8.55865 25.3029C10.2688 25.3029 11.6552 23.9165 11.6552 22.2064C11.6534 20.4969 10.2681 19.1114 8.55865 19.1096ZM8.55865 24.1644C7.47712 24.1644 6.60037 23.2877 6.60037 22.2064C6.60037 21.1248 7.47712 20.2481 8.55865 20.2481C9.63996 20.2481 10.5167 21.1248 10.5167 22.2064C10.5167 23.2877 9.63996 24.1644 8.55865 24.1644Z"
                                                 fill="#333E48"></path>
                                             <path
                                                 d="M25.436 6.1144H5.33643L4.92663 3.82036C4.67403 2.40819 3.56715 1.30353 2.15453 1.05382L0.668757 0.792113C0.359017 0.736969 0.0635073 0.943536 0.00836329 1.25305C-0.0465584 1.56279 0.159787 1.8583 0.469527 1.91345L1.96086 2.17516C2.90187 2.34193 3.63853 3.07859 3.80529 4.01959L5.82027 15.387C6.05819 16.7472 7.24001 17.7393 8.62083 17.738H20.5746C21.8305 17.7418 22.9396 16.9197 23.3014 15.7172L25.9767 6.84861C26.0263 6.67562 25.995 6.48929 25.8913 6.34209C25.7831 6.19956 25.6147 6.11551 25.436 6.1144ZM22.214 15.3813C21.9992 16.1035 21.3337 16.5975 20.5804 16.5938H8.62661C7.79745 16.596 7.08769 15.9994 6.94739 15.182L5.54144 7.24707H24.6731L22.214 15.3813Z"
                                                 fill="#333E48"></path>
                                             <path
                                                 d="M20.512 19.1096C18.8017 19.1096 17.4153 20.496 17.4153 22.2064C17.4153 23.9165 18.8017 25.3029 20.512 25.3029C22.2221 25.3029 23.6085 23.9165 23.6085 22.2064C23.6068 20.4969 22.2215 19.1114 20.512 19.1096ZM20.512 24.1644C19.4305 24.1644 18.5537 23.2877 18.5537 22.2064C18.5537 21.1248 19.4305 20.2481 20.512 20.2481C21.5933 20.2481 22.4701 21.1248 22.4701 22.2064C22.4701 23.2877 21.5933 24.1644 20.512 24.1644Z"
                                                 fill="#333E48"></path>
                                         </svg>
                                     </span>
                                     <p class="body-small">
                                         Your cart:
                                     </p>
                                 </a>
                             </li>
                             <li class="d-flex align-items-center d-xl-none">
                                 <a href="#mobileMenu" class="mobile-button" data-bs-toggle="offcanvas"
                                     aria-controls="mobileMenu">
                                     <span></span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header-bottom bg-gray-5 d-none d-xl-block">
         <div class="container relative">
             <div class="row">
                 <div class="col-xl-9 col-12">
                     <div class="header-bt-left">
                         <nav class="main-nav-menu">
                             <ul class="nav-list">
                                 <li class="nav-item active pst-unset">
                                     <a href="{{ route('client.home') }}"
                                         class="item-link link body-md-2 fw-semibold">
                                         <span>Home</span>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('client.shop') }}" class="item-link body-md-2 fw-semibold">
                                         <span>Shop</span>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('client.detail') }}" class="item-link body-md-2 fw-semibold">
                                         <span>Product</span>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="javascript:void(0)" class="item-link body-md-2 fw-semibold">
                                         <span>Blog</span>
                                         <i class="icon icon-arrow-down"></i>
                                     </a>
                                     <div class="sub-menu-container">
                                         <ul class="sub-menu-list">
                                             <li>
                                                 <a href="blog-list.html" class="body-md-2 link">
                                                     <span>Blog List</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="blog-grid.html" class="body-md-2 link">
                                                     <span>Blog Grid</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="blog-detail.html" class="body-md-2 link">
                                                     <span>Blog Detail</span>
                                                 </a>
                                             </li>
                                         </ul>
                                     </div>
                                 </li>
                                 <li class="nav-item relative">
                                     <a href="javascript:void(0)" class="item-link body-md-2 fw-semibold">
                                         <span>Page</span>
                                         <i class="icon icon-arrow-down"></i>
                                     </a>
                                     <div class="sub-menu-container">
                                         <ul class="sub-menu-list">
                                             <li>
                                                 <a href="contact.html" class="body-md-2 link">
                                                     <span>Contact</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="about.html" class="body-md-2 link">
                                                     <span>About</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="privacy.html" class="body-md-2 link">
                                                     <span>Privacy</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="faq.html" class="body-md-2 link">
                                                     <span>FAQs</span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="404.html" class="body-md-2 link">
                                                     <span>404</span>
                                                 </a>
                                             </li>
                                         </ul>
                                     </div>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
                 <div class="col-xl-3 d-none d-xl-flex align-items-center justify-content-end">
                     <div class="header-bt-right">
                         <ul class="nav-icon style-2">
                             <li><a href="#compare" data-bs-toggle="offcanvas">
                                     <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M7.85714 10.4286L4.42857 13.8572L1 10.4286" stroke="#333E48"
                                             stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                         <path d="M18.1429 15.625L21.5714 12.1964L25 15.625" stroke="#333E48"
                                             stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                         <path
                                             d="M7 20.7142C7 19.2941 5.84874 18.1428 4.42858 18.1428C3.00841 18.1428 1.85715 19.2941 1.85715 20.7142C1.85715 22.1344 3.00841 23.2856 4.42858 23.2856C5.84874 23.2856 7 22.1344 7 20.7142Z"
                                             stroke="#333E48" stroke-width="1.2" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                         <path
                                             d="M24.1429 5.28575C24.1429 3.86559 22.9916 2.71432 21.5714 2.71432C20.1513 2.71432 19 3.86559 19 5.28575C19 6.70591 20.1513 7.85718 21.5714 7.85718C22.9916 7.85718 24.1429 6.70591 24.1429 5.28575Z"
                                             stroke="#333E48" stroke-width="1.2" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                         <path
                                             d="M4.42856 13L4.42856 8.5C4.42856 7.64752 4.76721 6.82995 5.37 6.22716C5.9728 5.62436 6.79036 5.28571 7.64284 5.28571L19 5.28571"
                                             stroke="#333E48" stroke-width="1.2" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                         <path
                                             d="M21.5714 13.0535L21.5714 17.5535C21.5714 18.406 21.2328 19.2236 20.63 19.8264C20.0272 20.4292 19.2096 20.7678 18.3571 20.7678L7 20.7678"
                                             stroke="#333E48" stroke-width="1.2" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                     </svg>
                                     <span class="count-box">0</span>
                                 </a></li>
                             <li><a href="wishlist.html" class="d-flex">
                                     <i class="icon-hearth text-main fs-26 link"></i>
                                     <span class="count-box">4</span>

                                 </a></li>
                             <li class="nav-shop-cart ">
                                 <a href="#shoppingCart" data-bs-toggle="offcanvas" class="d-flex">
                                     <i class="icon-cart text-main fs-26 link"></i>
                                     <span class="count-box">10</span>
                                 </a>
                             </li>
                         </ul>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- /Header -->
