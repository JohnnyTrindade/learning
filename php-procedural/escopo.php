<?php

$a = 1;

function somar($b) {
    global $a;
    echo $a + $b;
}

function subtrair($c) {
    echo $c - $GLOBALS['a'];
}

somar(8);
echo "<br>";
subtrair(16);