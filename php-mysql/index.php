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

//else {
//    echo "Connection ok!";
//}

$sql = "SELECT * FROM USER";

//$query = $mysqli->query($sql);
//
//while($data = $query->fetch_assoc()) {
//    echo "Id: ".$data['id'] . "<br>";
//    echo "Name: ".$data['name'] . "<br>";
//    echo "E-mail: ".$data['email'] . "<br><hr>";
//}

if ($query = $mysqli->query($sql)) {
//    $user = $query->fetch_all(MYSQLI_NUM); //Padrão
//    $user = $query->fetch_all(MYSQLI_ASSOC);
    $user = $query->fetch_all(MYSQLI_BOTH);
//    var_dump($user);
//    echo "email: ".$user[1]["email"];
//    echo " * email: ".$user[1][2];

    foreach ($user as $value) {
        echo "name: ".$value["name"]."<br>";
    }
}

