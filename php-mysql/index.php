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

foreach ($query = $mysqli->query($sql) as $user) {
    echo "Name: ".$user['name']."<br>";
}




//$query = $mysqli->query($sql);
//
//while($data = $query->fetch_assoc()) {
//    echo "Id: ".$data['id'] . "<br>";
//    echo "Name: ".$data['name'] . "<br>";
//    echo "E-mail: ".$data['email'] . "<br><hr>";
//}

//if ($query = $mysqli->query($sql)) {
//    $user = $query->fetch_all(MYSQLI_NUM); //Padrão
//    $user = $query->fetch_all(MYSQLI_ASSOC);
//    $user = $query->fetch_all(MYSQLI_BOTH);
//    var_dump($user);
//    echo "email: ".$user[1]["email"];
//    echo " * email: ".$user[1][2];

//    foreach ($user as $value) {
//        echo "name: ".$value["name"]."<br>";
//    }

//    $user = $query->fetch_array();

//    while($user = $query->fetch_array()) {
//        echo "Name: ". $user["name"] . "<br>";
//    }

//    $user = $query->fetch_row();
//    var_dump($user);

//    $user = $query->fetch_object();
//    var_dump($user);
//    echo $user->name."<br>";

//    while($user = $query->fetch_object()) {
//        echo "Name: ". $user->name . "<br>";
//        echo "Email: ". $user->email . "<br>";
//    }

//}

