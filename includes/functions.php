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

//Wishlist
require("classes/Wishlist.php");
$wishlist = new Wishlist($db);

//Account
require "classes/Account.php";
$account = new Account($db);

//User

require("classes/User.php");
$user = new User($db);

if (isset($_SESSION['username'])) {
    $user_data = $user->get($_SESSION['username']);
}


$_SESSION['total'] = $cart->showCartQuantity();
$_SESSION['wishlist'] = $wishlist->showWishlistQuantity();
