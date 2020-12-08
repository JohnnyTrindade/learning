<?php

$palavras = array('cavalo', 'roupa', 'casa', 'macacos', 'rua');

function maiorPalavra($palavras) {
$maiorPalavra = $palavras[0];
foreach ($palavras as $palavra) {
$a = strlen($palavra);
$b = strlen($maiorPalavra);
if ($a > $b) {
$b = $a;
}
}
return $b;
}

$c = maiorPalavra($palavras);

echo $c;
