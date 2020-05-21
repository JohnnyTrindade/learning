<?php

$server = "localhost";
$user 	= "root";
$pass	= "1q2w3e4r";
$database = "todo_db";

@$mysqli = new mysqli($server,$user,$pass,$database);

if(mysqli_connect_errno()){
    echo "Falha ao se conectar MySQL:(".$mysqli->connect_errno.") ".$mysqli->connect_error;
    exit;
}

//else {
//    echo "Conexão OK";
//}