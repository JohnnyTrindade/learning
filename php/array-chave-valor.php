<?php
//array chaves - 0 1 2 3 4 5
//array - chaves e valores
$array = array(
    'nome' => 40,
    200,
    100,
    3000 => 150,
    "string qualquer",
    true
);

echo $array['Nome'];
echo "\n";
echo $array[1];
echo "\n";
echo $array[3000];
echo "\n";
echo $array[2];
echo "\n";
var_dump($array);
echo "\n";
echo $array[3001];