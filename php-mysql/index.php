<?php

$server = "localhost";
$user = "root";
$pass = "1q2w3e4r";
$database = "test";

//MySql Connect
@$mysqli = new mysqli($server, $user, $pass, $database);

// Error

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySql:(".$mysqli->connect_errno.")".$mysqli->connect_error;
    exit;
}

//$sql = "SELECT * FROM USER where id = {$_GET["id"]}";

$stmt = $mysqli->stmt_init();
$stmt->prepare("SELECT * FROM USER WHERE id = ?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$stmt->bind_result($id, $name,$email);
$stmt->fetch();


echo "ID: " . $id . "<br>";
echo "Name: " . $name . "<br>";
echo "E-mail: " . $email . "<br>";


