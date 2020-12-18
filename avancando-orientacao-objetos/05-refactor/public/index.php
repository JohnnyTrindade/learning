<?php

require_once "../vendor/autoload.php";
require_once "service.php";
require_once "config.php";

$container = array();
$list = $container['product']->list();

var_dump($list);

