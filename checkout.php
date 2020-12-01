<?php
$title = "Home";
require_once "./includes/header.php";
?>



<main class="container">
    <section class="checkout mt-4">
        <div class="heading">
            <h2 class="title">Cart</h2>
            <div class="header-underline mt-0" style="width: 25px;"></div>
        </div>
        <div class="row cart mt-sm-2">
            <div class="col-sm-8 p-4">
                <div class="row cart-product py-3 mt-2">
                    <div class="col-sm-2">
                        <img src="assets/images/covers/ac-v.jpg" alt="product" class="img-fluid product-img">
                    </div>
                    <div class="col-sm-8">
                        <div class="name">
                            <p>Assassin's Creed: Valhalla (PS5)</p>
                        </div>
                        <div class="seller">
                            <p>Sold by <strong> Claincir</strong> <span
                                    style="color: var(--primary); font-weight: bold;">|</span> Delivery in 3
                                days</p>
                        </div>
                        <div class="button-groups">
                            <button class="btn btn-sm btn-danger mr-sm-2">Remove &nbsp;<span><i
                                        class="far fa-trash-alt"></i></span></button>
                            <button class="btn btn-sm btn-warning">Wishlist &nbsp;<span><i
                                        class="far fa-heart"></i></span></button>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                        <div class="price">
                            <h3>$69.99</h3>
                        </div>
                    </div>
                </div>
                <div class="row cart-product py-3 mt-2">
                    <div class="col-sm-2">
                        <img src="assets/images/covers/gta5.jpg" alt="product" class="img-fluid product-img">
                    </div>
                    <div class="col-sm-8">
                        <div class="name">
                            <p>Grand Theft Auto: 5 (PC)</p>
                        </div>
                        <div class="seller">
                            <p>Sold by <strong> Claincir</strong> <span
                                    style="color: var(--primary); font-weight: bold;">|</span> Delivery in 3
                                days</p>
                        </div>
                        <div class="button-group">
                            <button class="btn btn-sm btn-danger mr-sm-2">Remove &nbsp;<span><i
                                        class="far fa-trash-alt"></i></span></button>
                            <button class="btn btn-sm btn-warning">Wishlist &nbsp;<span><i
                                        class="far fa-heart"></i></span></button>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                        <div class="price">
                            <h3>$4.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 p-4 d-flex align-items-center">
                <div class="total p-4">
                    <p>Shipping Charges - $25</p>
                    <p>Added tax - $15</p>
                    <hr>
                    <h4 class="title">Total - $95.69</h4>
                    <hr>
                    <button class="btn mt-3 lev">Proceed to buy &nbsp; <span><i
                                class="fas fa-arrow-alt-circle-right"></i></span></button>
                </div>
            </div>
        </div>
    </section>
    <section class="trending-sec" style="margin-top: 8%;" id="trending">
        <h3 class="title">Trending Now</h3>
        <div class="header-underline"></div>
        <div class="owl-carousel owl-theme mt-3">
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/god-of-war.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">God Of War (PS4)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">10 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$9.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/ac-v.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">Assassins Creed: Valhalla (PS5)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">8 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$69.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/spiderman-ps4.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">Spiderman (PS4)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">9.5 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$9.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/borderlands-3.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">Borderlands 3 (PS4)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">8 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$19.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/godfall.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">Godfall (PS5)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">8.3 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$59.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/demonsouls.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">Demon Souls (PS5)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">8 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$14.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="card">
                    <a href="#"><img src="../assets/images/gta5.jpg" alt="item" class="img-fluid card-img"></a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">Grand Theft Auto V (PS4)</h6>
                        <div class="mb-1 d-flex">
                            <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                            <span class="ign-score">10 / 10</span>
                        </div>
                        <h5 class="card-price mb-3">$4.99</h5>
                        <div class="add-to-cart">
                            <button class="btn btn-success">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "./includes/footer.php";
