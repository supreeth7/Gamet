<?php
$title = "Wishlist";
require_once "./includes/header.php";

if (isset($_POST['remove-wishlist'])) {
    $wishlist->remove($_POST['wishlist_id']);
}
?>

<header class="container-fluid">
    <?php require_once "./includes/navbar.php"; ?>
</header>

<main class="container">
    <section class="checkout mt-4">
        <div class="heading">
            <h2 class="title"><?= $username."'s Wishlist"?>
            </h2>
            <div class="header-underline mt-0" style="width: 25px;"></div>
        </div>
        <div class="row cart mt-sm-2">
            <div class="col-lg-12 p-4">
                <?php
                    if ($wishlist->showWishlistQuantity() == 0) {
                        echo  "<div class= 'cart-message text-center'>
                      <p>Add some awesome games to your wishlist! <a href = '/'>Go to home</a></p>
                      </div>";
                    }
                foreach ($wishlist->getAll() as $data) {
                    $product_data =  $product->get($data['product_id']); ?>
                <div class="row cart-product py-3 mt-4">
                    <div class="col-lg-2">
                        <a
                            href="product.php?id=<?=$product_data['id']?>"><img
                                src="assets/images/covers/<?=$product_data['image']?>"
                                alt="product" class="img-fluid product-img w-100"></a>
                    </div>
                    <div class="col-lg-8 d-flex align-items-center">
                        <div>
                            <div class="name">
                                <h4>
                                    <?=$product_data['name']?>
                                </h4>
                            </div>
                            <div class="seller">
                                <p>Sold by <strong> <?=$product_data['seller']?></strong>
                                    <span style="color: var(--primary); font-weight: bold;">|</span>
                                    Delivery in 3
                                    days
                                </p>
                            </div>
                            <div class="button-group d-flex">
                                <form class="product-form" method="POST">
                                    <input name="product_id" type="hidden"
                                        value="<?=$product_data['id']?>">
                                    <input name="user_id" type="hidden"
                                        value="<?=$user_data['id']?>">
                                    <button name="add-to-cart" type="submit" class="btn btn-success mr-3 lev">Add To
                                        Cart &nbsp;<span><i class="fas fa-cart-plus"></i></span></button>
                                </form>
                                <form method="POST">
                                    <input name="wishlist_id" type="hidden"
                                        value="<?=$data['id']?>">
                                    <button name="remove-wishlist" type="submit" class="btn btn-danger lev">Remove From
                                        Wishlist &nbsp;<span><i class="far fa-trash-alt"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 d-flex align-items-center">
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
        </div>
    </section>
    <div style="margin-top: 9%">
        <?php require_once "./includes/trending-section.php"; ?>
    </div>
</main>

<?php require_once "./includes/footer.php";
