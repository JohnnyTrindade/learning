<?php

//$input = array(22, 34, 17, 18, 14, 13, 22, 24);
//$filtro = function(int $age) {
//    return ($age >= 18);
//};
//
//$output = array_filter($input, $filtro);
//
//print_r($output);


class People{
    public function getHello($name){
        return "Hello {$name}!";
    }
}

$p = new People;

echo $p->getHello("Lan");

