<?php

//function soma($a, $b) {
//
//}
//
//$soma = function ($a, $b) {
//    return $a + $b;
//};
//
//$resultado = $soma(9, 2);
//
//echo $resultado;


function getImc($massa, $altura) {
    $imc = $massa / ($altura * $altura);
    if ($imc > 25) {
        return "Seu IMC é " . round($imc) . ". Vc está gordo!";
    } else {
        return "Nah... Seu IMC é " . round($imc);
    }
}

$r = getImc(107, 1.79);
$t = getImc(80, 1.79);

echo $r . "<br>";
echo $t . "<br>";