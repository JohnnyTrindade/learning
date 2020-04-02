<?php

$array = array(40,200,100,150,"string",true);
//declaração flexível
$array = array(
    40,
    200,
    100,
    150,
    "string",
    true
);

//echo $array;

//echo array(40,200,100,150,"School of Net",true);

echo $array[0];
echo $array[1];

echo array(40,200,100,150,"string",true)[4];

$array1 = [
    45,
    210,
    110,
    160,
    "another string",
    false
];

echo $array1[5];
