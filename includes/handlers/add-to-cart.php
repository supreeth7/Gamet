<?php
ob_start();


//Database Connection
require("../classes/Database.php");
$db = new Database();

//Cart
require("../classes/Cart.php");
$cart = new Cart($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['product_id'] != null && $_POST['user_id'] != null) {
        $cart->addToCart($_POST['product_id'], $_POST['user_id']);
    }
    
    $total = $cart->showCartQuantity();
    echo $total;
    exit;
}
