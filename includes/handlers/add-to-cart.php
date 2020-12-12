<?php
ob_start();
require "../functions.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['product_id'] != null && $_POST['user_id'] != null) {
        $cart->addToCart($_POST['product_id'], $_POST['user_id']);
    }
    
    $total = $cart->showCartQuantity($user_data['id']);
    echo $total;
    exit;
}
