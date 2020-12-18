<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=oo";
$container['user'] = "root";
$container['pass'] = "1q2w3e4r";