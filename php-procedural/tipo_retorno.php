<?php



function temNumero(int $aleatorio, array $numeros) : ?int {
    if (in_array($aleatorio, $numeros)) {
        return $aleatorio;
    } else {
        return false;
    }
}
$numeros = [1, 3, 5, 7, 9];

$aleatorio = mt_rand(1, 10);

$resultado = temNumero($aleatorio, $numeros);
echo $aleatorio . "<br>";


var_dump($resultado);
