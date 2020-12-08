<?php

declare(strict_types=1);
include($_SERVER['DOCUMENT_ROOT']."/database/conexao.php");

$listarTodos = function () use ($conn): ?array {
    $sql = "select * from produtos";
    $result = mysqli_query($conn, $sql);

    $retorno = [];
    while($row = mysqli_fetch_assoc($result)) {
        $retorno[] = $row;
    }
    return $retorno;
};

$pegarProdutoPorId = function (int $id) use ($conn): ?array {
    $sql = "select * from produtos where id = $id";

    $result = mysqli_query($conn, $sql);
    $row = $result === false ? null : mysqli_fetch_assoc($result);

    return $row;
};