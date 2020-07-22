<?php
session_start();
require_once 'connect.php';



if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
};

$query = "INSERT INTO tarefas(titulo, descricao) VALUES ('$title', '$body')";
$insertTodo = mysqli_query($mysqli, $query);
if($insertTodo){
    echo "Novo item adicionado a lista";
}else{
    echo mysqli_error($mysqli);
}

