<?php
ob_start();


//Database Connection
require("../classes/Database.php");
$db = new Database();

//Cart
require("../classes/Wishlist.php");
$wishlist = new Wishlist($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['product_id'] != null && $_POST['user_id'] != null) {
        $wishlist->addToWishlist($_POST['user_id'], $_POST['product_id']);
    }

    $total = $wishlist->showWishlistQuantity();
    echo $total;
    exit;
}
