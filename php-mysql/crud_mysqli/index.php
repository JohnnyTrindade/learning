<?php

require_once("User.php");

$server = "localhost";
$user 	= "root";
$pass	= "1q2w3e4r";
$database = "test";

// Conect Mysql
@$mysqli = new mysqli($server,$user,$pass,$database);

// Error

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:(".$mysqli->connect_errno.") ".$mysqli->connect_error;
    exit;
}

$user = new User($mysqli);

$user->setId("9")
    ->setName("asfg")
    ->setEmail("asdfg@email.com");
//echo $user->insert();
//echo "Ret: ". $user->update()."<br/>";
//echo "Ret: ". $user->delete(1)."<br/>";


$ret = $user->find(9);
echo $ret['id']."<br/>";
echo $ret['name']."<br/>";
echo $ret['email']."<br/><hr>";
/*foreach ($ret as  $value) {
	echo $value['id']."<br/>";
	echo $value['name']."<br/>";
	echo $value['email']."<br/><hr>";
}*/