<?php
ob_start();

//Database Connection
require("classes/Database.php");
$db = new Database();

//Product
require("classes/Prouduct.php");
$product = new Product($db);


//Cart
require("classes/Cart.php");
$cart = new Cart($db);
