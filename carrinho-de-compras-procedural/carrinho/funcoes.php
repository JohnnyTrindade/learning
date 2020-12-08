<?php

declare(strict_types=1);

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

include($_SERVER['DOCUMENT_ROOT']."/database/conexao.php");
include($_SERVER['DOCUMENT_ROOT']."/database/consultas.php");

$acoes_permitidas = [
    'adicionar',
    'excluir'
];

function validaAcaoCarrinho(string $acao): bool {
    global $acoes_permitidas;
    if (in_array($acao, $acoes_permitidas)) {
        return true;
    }
    return false;
}

function adicionarProdutoCarrinho(array $produto): bool {
    if (!existeProduto((int)$produto['id'])) {
        $_SESSION['carrinho'] [] = $produto;
        return true;
    }
    return false;
}

function existeProduto(int $id): bool {
    if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
        foreach ($_SESSION['carrinho'] as $item) {
            if($item['id'] == $id) {
                return true;
            }
        }
    }
    return false;
}

function getCarrinho(): ?array {
    return $_SESSION['carrinho'] ?? null;
}