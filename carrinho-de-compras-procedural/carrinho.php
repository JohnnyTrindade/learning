<?php
include "carrinho/funcoes.php" ?>

<?php echo "<pre>"; var_dump(getCarrinho());exit; ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Carrinho de Compras - PHP Procedural</title>
</head>
<body>
<div class="container mt-5">
    <ul class="nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Produtos</a></li>
        <li class="nav-item"><a href="carrinho.php" class="nav-link">Carrinho</a></li>
    </ul>
    <h1 class="display1">Carrinho de compras</h1>
    <hr>
</div>
</body>
</html>