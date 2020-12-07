<?php

require_once("./includes/functions.php");
if (isset($_GET['id'])!=null) {
    $id = $_GET['id'];
}
$data = $product->get($id);
$title = $data['name'];
require_once "./includes/header.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['buy-now'])) {
        $cart->buyNow($_POST['product_id'], $_POST['user_id']);
    }

    if (isset($_POST['wishlist'])) {
        $wishlist->addToWishlist($_POST['user_id'], $_POST['product_id']);
    }
}
?>

<header class="container-fluid">
        <?php require_once "./includes/navbar.php"; ?>
</header>

<main class="container">
    <section class="row mt-5 product">
        <div class="col-lg-4">
            <div class="product-img text-center">
                <img src="assets/images/covers/<?=$data['image']?>"
                    class="img-fluid product-img" alt="product-img">
            </div>
            <div class="product-btn button-group mt-3 row">
                <div class="col-lg-6">
                    <form method="POST">
                        <input type="hidden" name="product_id"
                            value="<?=$data['id']?>">
                        <input type="hidden" name="user_id" value="1">
                        <button class="btn btn-success btn-lg btn-block" name="buy-now" type="submit">Buy Now
                            &nbsp;<span><i class="fas fa-cart-plus"></i></span></button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form method="POST" class="wishlist-form">
                        <input type="hidden" name="product_id"
                            value="<?=$data['id']?>">
                        <input type="hidden" name="user_id" value="1">
                        <button class="btn btn-warning btn-lg btn-block" name="wishlist">Whislist
                            &nbsp;<span><i class="fas fa-heart"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <h2 class="title text-left">
                <?=$data['name']?>
            </h2>
            <div class="row" style="max-width: 300px;">
                <div class="col-sm-6 my-2">
                    <img src="../assets/icons/ign.png" alt="IGN" class="w-50 ign-icon img-fluid">
                    <span class="ign-score"><?=$data['score']?> / 10</span>
                </div>
                <div class="stars col-sm-6 my-2">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span class="font-weight-bold"><?= $data['review_score']?>%</span>
                </div>
            </div>
            <div class="price mt-2 text-left">
                <h2>₹<?=$data['price']?>
                </h2>
            </div>
            <div class="product-text mt-3 text-justify">
                <p>Assassin’s Creed Valhalla is an open world action-adventure game developed by Ubisoft Montreal and
                    published by Ubisoft in 2020. It’s the twelfth main game in the AC series, and a third to feature
                    the new gameplay mechanics of Ac: Origins, a mesh of action and RPG elements. The game is set during
                    the time of the Viking invasion of Britain. The player takes control of Eivor, a leader of a Viking
                    clan, seeking refuge on the eastern shores of England.

                    The game introduces several new gameplay mechanics, as well as reinstates the ones seen in earlier
                    Assassin’s Creed games, such as lethal hidden blade assassinations, settlement management, etc. The
                    title was announced to a mostly positive response from the critics.
            </div>
            <div class="d-flex order-features mt-4 text-left">
                <div>
                    <div class="feature lev">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="mt-2">
                        <p>10 day delivery</p>
                    </div>
                </div>
                <div>
                    <div class="feature lev">
                        <i class="fas fa-undo-alt"></i>
                    </div>
                    <div class="mt-2">
                        <p>Easy returns</p>
                    </div>
                </div>
                <div>
                    <div class="feature lev">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="mt-2">
                        <p>100% genuine</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <p style="font-size: 0.8rem;">SELECTED OFFER FROM: <span style="font-weight: 700;"><?=$data['seller']?></span> |
                    <span>EXCELLENT
                        SELLER
                        |</span> <span style=" color: green; font-weight:600;">95%
                    </span>Positive feedback
                </p>
            </div>
        </div>
    </section>

    <div style="margin-top: 9%">
        <?php require_once "./includes/trending-section.php"; ?>
    </div>
</main>

<?php require_once "./includes/footer.php";
