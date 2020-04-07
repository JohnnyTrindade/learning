<?php

$media = 7;
$frequencia = 75;

$media_aluno = 5;
$frequencia_aluno = 50;

//if ($media_aluno >= $media && $frequencia_aluno >= $frequencia) {
//    echo "Aprovado!";
//} else {
//    echo "Reprovado!";
//}

if ($media_aluno >= $media || $frequencia_aluno >= $frequencia) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}