<?php include('head.php') ?>

 <style>
    .cart-icon-wrapper {
        cursor: pointer;
        position: relative; 
        z-index: 10002; 
    }

    /* CART PANEL */
    .cart-dropdown-wrap {
        position: fixed;
        top: 0;
        right: -350px; 
        width: 350px;
        height: 100%;
        background: #fff;
        z-index: 10001; 
        padding: 20px;
        overflow-y: auto;
        box-shadow: -4px 0 10px rgba(0,0,0,0.1);

        transition: right 0.3s ease; 
    }



    .cart-dropdown-wrap.active {
        right: 0;
        display: block;
        visibility: visible;
        opacity: 1;
    }

    /* OVERLAY */
    .cart-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        background: rgba(0, 0, 0, 0.5);
        z-index: 10000; /* Below cart panel */
        
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease;
    }

    .cart-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    button.btn.btn-sm.btn-light.p-1.cart-close {
    padding: 2px 5px 2px 5px !important;
}

    .cart-items {

      height: 60vh;

    }

    .cart-close {
    border: none;
    background: none;
}

.cart-close .fi-rs-cross-small {

    font-size: 20px !important;
    color: black !important;
 
}

.checkout-btn {
    border: 1px solid black !important;
    background: black !important;
}

.checkout-btn:hover {
    border: 1px solid black !important;
    background: none !important;

}
</style>

<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="header-info text-center text-light">
                        Premium Marble Designs for Modern Living
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar p-3">
        <div class="container-fluid">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="/"><img src="assets/imgs/logo/logo.png" alt="logo" class="logo-style"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="/"><img src="assets/imgs/logo/logo.png" alt="logo" class="logo-style"></a>
                        </div>
                    </div>

                </div>
                <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                    <nav>
                        <ul>
                            <li><a class="active" href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a>
                                <!-- <ul class="sub-menu">
                                            <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                        </ul> -->
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="hotline d-none d-lg-block">
                    <span><i class="fa fa-search header-font-icon"></i></span>
                    <span><i class="fa fa-user header-font-icon"></i></span>

                    <!-- CART -->
                    <div class="cart-icon-wrapper">
                        <span>
                            <i class="fa fa-shopping-cart header-font-icon"></i>
                        </span>

                        <div class="cart-dropdown-wrap cart-dropdown-hm2">

                            <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                                <h4 class="mb-0">Your Cart</h4>
                                <button class="btn btn-sm btn-light p-1 cart-close">
                                    <i class="fi-rs-cross-small"></i>
                                </button>
                            </div>
                            
                                    <ul class="cart-items mt-50">
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="assets/imgs/shop/product-1-2.webp"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <i class="fi-rs-cross-small"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="assets/imgs/shop/product-1-2.webp"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2026</a></h4>
                                                <h3>$3200.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <i class="fi-rs-cross-small"></i>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a class="btn btn-sm btn-default" href="shop-cart.html">View cart</a>
                                            <a class="checkout-btn" href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

               
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="/"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-menu-wrap mobile-header-border">
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children">
                            <a href="/">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/shop.php">Shop</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/about.php">About</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/contact.php">Contact Us</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="#">Products</a>
                            <ul class="dropdown">
                                <li><a href="shop-detail.php">Marble Slabs </a></li>
                                <li><a href="shop-detail.php">Marble Flooring </a></li>
                                <li><a href="shop-detail.php">Marble Countertops</a></li>
                                <li><a href="shop-detail.php">Wall Marble Designs</a></li>
                                <li><a href="shop-detail.php">Decorative Marble Pieces</a></li>
                                <li><a href="shop-detail.php">Custom Marble Solutions</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
const cartBtn = document.querySelector(".cart-icon-wrapper");
const cartPanel = document.querySelector(".cart-dropdown-wrap");
const overlay = document.querySelector(".cart-overlay");

cartBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    cartPanel.classList.toggle("active");
    overlay.classList.toggle("active");
});

overlay.addEventListener("click", () => {
    cartPanel.classList.remove("active");
    overlay.classList.remove("active");
});
</script>

<script>
document.querySelector('.cart-close').addEventListener('click', function() {
    document.querySelector('.cart-dropdown-wrap').classList.remove('show');
});
</script>

