<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['allgames-submit'])) {
        $cart->addToCart($_POST['product_id'], $_POST['user_id']);
    }
}
?>

<section id="all-games" class="mt-5">
    <h3>All Games</h3>
    <div class="header-underline"></div>
    <div id="filters" class="button-group my-4">
        <button class="btn active" data-filter="*" data-toggle="button" aria-pressed="true">All
            Platforms</button>
        <button class="btn" data-filter=".PC" role="button">PC</button>
        <button class="btn" data-filter=".PS4" role="button">PS4</button>
        <button class="btn" data-filter=".PS5" role="button">PS5</button>
        <button class="btn" data-filter=".XBOX" role="button">XBOX</button>
    </div>

    <div class="grid">
        <?php foreach ($product->getAll() as $data) { ?>
        <div
            class="grid-item <?=$data['platform']?>">
            <div class="card game">
                <a
                    href="product.php?id=<?=$data['id']?>"><img
                        src="../assets/images/covers/<?=$data['image']?>"
                        alt="item" class="img-fluid card-img text-center w-100"></a>
                <div class="card-body">
                    <h6 class="card-title mb-1"><?=$data['name']?>
                    </h6>
                    <div class="mb-1 d-flex">
                        <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                        <span class="ign-score"><?=$data['score']?> /
                            10</span>
                    </div>
                    <h5 class="card-price mb-3">₹<?=$data['price']?>
                    </h5>
                    <div class="add-to-cart">
                        <form class="product-form" method="POST">
                            <input name="product_id" type="hidden"
                                value="<?=$data['id']?>">
                            <input name="user_id" type="hidden"
                                value="<?=$user_data['id']?>">
                            <button name="allgames-submit" type="submit" class="btn btn-success">Add To
                                Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>