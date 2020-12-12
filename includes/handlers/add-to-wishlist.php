<?php
ob_start();
require "../functions.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['product_id'] != null && $_POST['user_id'] != null) {
        $wishlist->addToWishlist($_POST['user_id'], $_POST['product_id']);
    }

    $total = $wishlist->showWishlistQuantity($user_data['id']);
    echo $total;
    exit;
}
