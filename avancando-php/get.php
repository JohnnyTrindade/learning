<?php

//echo $_GET['planeta'];
//echo "<br>";
//echo $_GET['cor'];


//?planeta=marte&cor=azul = query string

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false) {
    echo $planeta;
} else {
    echo "Planeta não informado";
}

echo "<br>";

//coalesce abaixo

//$cor = $_GET['cor'] ?? "Cor não informada";
//
//echo $cor;