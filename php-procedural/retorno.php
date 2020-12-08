<?php

function executarTeste($nota, $media = 5) {
    if ($nota >= $media) {
        return "aprovado";
    } else {
        return "Reprovado";
    }
}

echo "<h1>Exame de alunos</h1>";

$resultado = executarTeste(9);

echo "Resultado da Maria: " . $resultado;
echo "<hr>";
$resultado = executarTeste(6, 8);
echo "Resultado do João: " . $resultado;


