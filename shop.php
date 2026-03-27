<?php include 'layout/header.php'; ?>

<style>

  .shop  .product-img-action-wrap {
        position: relative;
        overflow: hidden;
    }

    /* Overlay background */
  .shop  .overlay-cart {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        background: rgba(0, 0, 0, 0.6); /* black overlay */
        
        display: flex;
        justify-content: center;
        align-items: center;

        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
    }

    /* Show overlay on hover */
  .shop  .product-img-action-wrap:hover .overlay-cart {
        opacity: 1;
        visibility: visible;
    }

    /* Cart button styling */
  .shop  .cart-btn {
        color: #fff;
        font-size: 24px;
        /* background: #28a745;  */
        background-color: rgba(202, 18, 24, 0.3);
        padding: 12px;
        border-radius: 50%;
        transition: 0.3s;
    }

    .cart-btn:hover {
        background: #fff;
        color: #000;
    }


</style>


<main class="main shop">
        <div class="col-md-12 shop-heading d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="mb-10 text-white">Shop</h1>
                <div class="breadcrumb-custom text-white">
                    <a href="shop.php">Home</a>
                    <span class="separator">></span>
                    <span>Shop</span>
                </div>
            </div>
       </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">688</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="shop-grid-left.html#">50</a></li>
                                            <li><a href="shop-grid-left.html#">100</a></li>
                                            <li><a href="shop-grid-left.html#">150</a></li>
                                            <li><a href="shop-grid-left.html#">200</a></li>
                                            <li><a href="shop-grid-left.html#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="shop-grid-left.html#">Featured</a></li>
                                            <li><a href="shop-grid-left.html#">Price: Low to High</a></li>
                                            <li><a href="shop-grid-left.html#">Price: High to Low</a></li>
                                            <li><a href="shop-grid-left.html#">Release Date</a></li>
                                            <li><a href="shop-grid-left.html#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row product-grid-3">
                             <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
    
                                    <div class="product-img product-img-zoom">
                                        <a href="product.php">
                                            <img class="default-img" src="assets/imgs/shop/product-1-1.webp" alt="">
                                            <img class="hover-img" src="assets/imgs/shop/product-1-2.webp" alt="">
                                        </a>
                                    </div>

                                    <div class="overlay-cart bg-logo">
                                        <div class="product-action-1">
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>    

                                </div>
                                   
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-2-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-2-2.webp" alt="">
                                            </a>
                                        </div>

                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-3-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-3-2.webp" alt="">
                                            </a>
                                        </div>

                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-4-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-4-2.webp" alt="">
                                            </a>
                                        </div>

                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-5-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-5-2.webp" alt="">
                                            </a>
                                        </div>

                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-6-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-6-2.webp" alt="">
                                            </a>
                                        </div>

                                        
                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-7-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-7-2.webp" alt="">
                                            </a>
                                        </div>

                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-8-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-8-2.webp" alt="">
                                            </a>
                                        </div>

                                        <div class="overlay-cart bg-logo">
                                            <div class="product-action-1">
                                                <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product.php">
                                                <img class="default-img" src="assets/imgs/shop/product-9-1.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-9-2.webp" alt="">
                                            </a>
                                        </div>

                                        
                                        <div class="product-action-1">

                                        <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                            
                                            <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                        </div>
                                        
                                    </div>

                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Music</a>
                                        </div>
                                        <h2><a href="product.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show ">
                                            <!-- hover-up -->
                                            <a aria-label="Add To Cart" class="action-btn  bg-logo" href="cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="shop-grid-left.html#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="shop-grid-left.html#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="shop-grid-left.html#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="shop-grid-left.html#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="shop-grid-left.html#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="shop-grid-left.html#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                <li><a href="shop-grid-right.html">Shoes & Bags</a></li>
                                <li><a href="shop-grid-right.html">Blouses & Shirts</a></li>
                                <li><a href="shop-grid-right.html">Dresses</a></li>
                                <li><a href="shop-grid-right.html">Swimwear</a></li>
                                <li><a href="shop-grid-right.html">Beauty</a></li>
                                <li><a href="shop-grid-right.html">Jewelry & Watch</a></li>
                                <li><a href="shop-grid-right.html">Accessories</a></li>
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Fill by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'components/whyChoose-us.php'; ?>
        
</main>
<?php include 'layout/footer.php'; ?>
   