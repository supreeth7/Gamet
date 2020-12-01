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
    <div style="margin-top: 9%">
        <?php require_once "./includes/trending-section.php"; ?>
    </div>
</main>

<?php require_once "./includes/footer.php";
