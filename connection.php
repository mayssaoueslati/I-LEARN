<?php

$db_name = "pfa";
$servername="localhost";
$username = "root";
$password = "";
$conn=new mysqli($db_name,$servername,$username,$password,3306);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>
