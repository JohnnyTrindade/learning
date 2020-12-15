<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=oo","root","1q2w3e4r");

$product = new Product($db);

$list = $product->list();

var_dump($list);

