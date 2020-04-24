<?php
session_start();

$_SESSION['csrf_token'] = SHA1(rand(1, 2000000000));

//var_dump($_SESSION);
//exit;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibile" content="ie-edge">
        <title>Document</title>
    </head>
    <body>
        <form action="send.php" method="post">
            <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token'] ;?>">
            <input name="nome" type="text" placeholder="Nome"><br>
            <input name="email" type="text" placeholder="Email"><br>
            <textarea name="descricao" placeholder="Descrição" id="" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>