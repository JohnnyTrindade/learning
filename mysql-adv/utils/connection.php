<?php

$conn = new mysqli('localhost','root','1q2w3e4r', 'test');

if ($conn->connect_errno) {
    die('Falhou em conectar' . $conn->connect_errno);

}

return $conn;