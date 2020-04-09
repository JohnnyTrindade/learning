<?php

$media = 7;
$media_recuperacao = 5;
$frequencia = 70;

$media_aluno = 5;
$frequencia_aluno = 40;

$reprovado_por_faltas = $frequencia_aluno < $frequencia ? true:false;


if (!$reprovado_por_faltas) {
     if ($media_aluno < $media_recuperacao) {
         echo "Reprovado!";
     }
     elseif ($media_aluno < $media) {
         echo "Recuperação";
     }
     else {
         echo "Aprovado!";
     }
} else {
    echo "Reprovado por faltas!";
}