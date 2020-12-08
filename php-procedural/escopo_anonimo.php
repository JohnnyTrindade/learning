<?php

$a = 2;
$z = 3;

$soma = function ($b, $c) use($a, $z) {
    return $a + $b + $z - $c;
};

echo $soma(487, 78);