<?php

//function add($i) {
//    $i++;
//    echo "interno " . $i . "<br>";
//}

function add(&$i) {
    $i++;
    echo "interno " . $i . "<br>";
}


$numero = 1;
add($numero);
echo "externo " . $numero;
