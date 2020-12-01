<section id="all-games" class="mt-5">
    <h3>All Games</h3>
    <div class="header-underline"></div>
    <div id="filters" class="button-group my-4 ml-auto text-right">
        <button class="btn is-checked is-active" data-filter="">All Platforms</button>
        <button class="btn" data-filter=".PC">PC</button>
        <button class="btn" data-filter=".PS4">PS4</button>
        <button class="btn" data-filter=".PS5">PS5</button>
        <button class="btn" data-filter=".XBOX">XBOX</button>
    </div>

    <div class="grid mx-auto">
        <?php foreach ($product->getAll() as $data) { ?>
        <div
            class="grid-item <?=$data['platform']?>">
            <div class="card game">
                <a
                    href="product.php?id=<?=$data['id']?>"><img
                        src="../assets/images/covers/<?=$data['image']?>"
                        alt="item" class="img-fluid card-img"></a>
                <div class="card-body">
                    <h6 class="card-title mb-1"><?=$data['name']?>
                    </h6>
                    <div class="mb-1 d-flex">
                        <img src="../assets/icons/ign.png" alt="IGN" class="ign-icon img-fluid">
                        <span class="ign-score"><?=$data['score']?> /
                            10</span>
                    </div>
                    <h5 class="card-price mb-3"><?=$data['price']?>
                    </h5>
                    <div class="add-to-cart">
                        <button class="btn btn-success">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>