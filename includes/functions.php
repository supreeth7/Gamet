<?php
ob_start();
session_start();

//Database Connection
require("classes/Database.php");
$db = new Database();

//Product
require("classes/Product.php");
$product = new Product($db);


//Cart
require("classes/Cart.php");
$cart = new Cart($db);

$_SESSION['total'] = $cart->showCartQuantity();
