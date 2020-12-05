<?php

$title = "Cart";
require_once "./includes/header.php";

    if (isset($_POST['remove'])) {
        $cart->remove($_POST['cart_id']);
    }
?>



<main class="container">
    <section class="checkout mt-4" style="min-height: 100vh;">
        <div class="heading">
            <h2 class="title">Cart</h2>
            <div class="header-underline mt-0" style="width: 25px;"></div>
        </div>
        <div class="row cart mt-sm-2">
            <div class="col-sm-8 p-4">
                <?php
                    if ($cart->showCartQuantity() == 0) {
                        echo  "<div class= 'cart-message text-center'>
                      <p>Add some awesome games to your cart! <a href = '/'>Go to home</a></p>
                      </div>";
                    }
                foreach ($cart->getAll() as $cart_data) {
                    $product_data =  $product->get($cart_data['product_id']); ?>
                <div class="row cart-product py-3 mt-2">
                    <div class="col-sm-2">
                        <a
                            href="product.php?id=<?=$product_data['id']?>"><img
                                src="assets/images/covers/<?=$product_data['image']?>"
                                alt="product" class="img-fluid product-img w-100"></a>
                    </div>
                    <div class="col-sm-8">
                        <div class="name">
                            <p>
                                <?=$product_data['name']?>
                            </p>
                        </div>
                        <div class="seller">
                            <p>Sold by <strong> <?=$product_data['seller']?></strong>
                                <span style="color: var(--primary); font-weight: bold;">|</span>
                                Delivery in 3
                                days
                            </p>
                        </div>
                        <div class="button-group d-flex">
                            <form method="POST">
                                <input type="hidden" name="cart_id"
                                    value="<?=$cart_data['id']?>">
                                <button class="btn btn-sm btn-danger mr-2" name="remove" type="submit">Remove
                                    &nbsp;<span><i class="far fa-trash-alt"></i></span></button>
                            </form>

                            <form method="POST" class="wishlist-form">
                                <input type="hidden" name="product_id"
                                    value="<?=$product_data['id']?>">
                                <input type="hidden" name="user_id" value="1">
                                <button class="btn btn-sm btn-warning" name="wishlist">Whislist
                                    &nbsp;<span><i class="far fa-heart"></i></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex align-items-center">
                        <div class="price">
                            <h3>₹<?=$product_data['price']?>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php
                $cart->calculateTotal($product_data['price']);
                } ?>
            </div>
            <div class="col-lg-4 p-4">
                <div class="total p-4">
                    <p>Shipping Charges - ₹125</p>
                    <p>Added tax - ₹150</p>
                    <hr>
                    <h4 class="title">Total - ₹<?=$cart->getTotal(275)?>
                    </h4>
                    <hr>
                    <button class="btn mt-3 lev">Proceed to buy &nbsp; <span><i
                                class="fas fa-arrow-alt-circle-right"></i></span></button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "./includes/footer.php";
