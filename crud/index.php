<?php
require_once("utils/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
</head>
<body>
    <form method="post" action="utils/cria.php">
        <div class="crud">
            <h1>Lista de tarefas</h1>
            <input name="title" type="text" placeholder="Título"><br>
            <input name="body" type="text" placeholder="Descrição"><br>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <div class="list">
        <?php


$sql_seleciona = file_get_contents(__DIR__.'/utils/select.sql');
$resultado->query($sql_seleciona);

$list = $resultado->query('SELECT * FROM tarefas');

$todo_list = $list->fetch_all(MYSQLI_ASSOC);

foreach ($todo_list as $to_list){
    echo $to_list['titulo'] . PHP_EOL;
    echo $to_list['descricao'] . PHP_EOL;
}




        ?>
    </div>
</body>
</html>