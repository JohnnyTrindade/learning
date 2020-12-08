<?php
include($_SERVER['DOCUMENT_ROOT']."/database/conexao.php");
include($_SERVER['DOCUMENT_ROOT']."/database/consultas.php");
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7da504a875.js" crossorigin="anonymous"></script>
    <title>Carrinho de Compras - PHP Procedural</title>
</head>
<body>
    <div class="container mt-5">
        <ul class="nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Produtos</a></li>
            <li class="nav-item"><a href="carrinho.php" class="nav-link">Carrinho</a></li>
        </ul>
        <h1 class="display1">Produtos</h1>
        <hr>
        <div class="card-columns">
            <?php $produtos = $listarTodos();
            foreach ($produtos as $produto):
            ?>
            <div class="card">
                <img src="<?php echo $produto['foto'] ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title text-center"><?php echo $produto['produto'] ?></h4>
                    <h5 class="card-text text-danger text-center">R$ <?php echo number_format($produto['preco'], 2, ",", ".") ?></h5>
                    <a href="gerenciar_carrinho.php?adicionar&id=<?php echo $produto['id'] ?>" class="btn btn-success btn-block">
                        <i class="fa fa-shopping-cart">Adicionar ao carrinho</i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>