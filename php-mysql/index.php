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
} else {
    echo "Connection ok!";
}