<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['trending-submit'])) {
        $cart->addToCart($_POST['product_id'], $_POST['user_id']);
    }
}
?>

<section class="trending-sec mt-5" id="trending">
    <h3 class="title">Trending</h3>
    <div class="header-underline"></div>
    <div class="owl-carousel owl-theme mt-4">
        <?php
        foreach ($product->getAll() as $data) {
            if ($data['is_trending'] == 1) { ?>
        <div class="item py-2">
            <div class="card">
                <a
                    href="product.php?id=<?=$data['id']?>"><img
                        src="../assets/images/covers/<?=$data['image']?>"
                        alt="item" class="img-fluid card-img"></a>
                <div class="card-body">
                    <h6 class="card-title mb-1">
                        <?=$data['name']?>
                    </h6>
                    <div class="mb-1 d-flex">
                        <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                        <span class="ign-score">
                            <?=$data['score']?>
                            / 10</span>
                    </div>
                    <h5 class="card-price mb-3">₹<?=$data['price']?>
                    </h5>

                    <div class="add-to-cart">
                        <form class="product-form" method="POST">
                            <input name="product_id" type="hidden"
                                value="<?=$data['id']?>">
                            <input name="user_id" type="hidden" value="1">
                            <button name="trending-submit" type="submit" class="btn btn-success">Add To
                                Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php  }
        } ?>
    </div>
</section>