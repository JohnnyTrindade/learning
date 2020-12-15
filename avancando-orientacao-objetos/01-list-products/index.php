<?php

//$server = "localhost";
//$user 	= "root";
//$pass	= "1q2w3e4r";
//$database = "oo";
//
//@$mysqli = new mysqli($server,$user,$pass,$database);
//
//if(mysqli_connect_errno()){
//    echo "Falha ao se conectar MySQL:(".$mysqli->connect_errno.") ".$mysqli->connect_error;
//    exit;
//}

$db = new \PDO("mysql:host=localhost;dbname=oo","root","1q2w3e4r");

$query = "select * from products";

$stmt = $db->prepare($query);

$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);