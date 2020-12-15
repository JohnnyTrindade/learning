<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "Product.php";

$db = new Conn("mysql:host=localhost;dbname=oo","root","1q2w3e4r");

$product = new Product($db);

$list = $product->list();

var_dump($list);

