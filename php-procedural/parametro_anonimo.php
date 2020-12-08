<?php

//$numeros = [12, 44, 23, 99, 102,18];
//
//$filtro = function ($v) {
//    return $v <= 50;
//};
//
//$saida = array_filter($numeros, $filtro);
//
//var_dump($saida);

$a = 9;

$voceDecide = function ($numero, $callback) {
    if (is_callable($callback)){
        return $callback($numero);
    } else {
        throw new Exception("Callback needs to be a function!");
    }
};

$multiplica = $voceDecide(10, function ($n) use ($a) {
    return $n * $n * $a;
});

echo $multiplica;

$meu_erro = $voceDecide(3, "abc");

echo $meu_erro;