<?php

//Database Connection
require("classes/Database.php");
$db = new Database();

//Product
require("classes/Prouduct.php");
$product = new Product($db);
