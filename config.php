<?php
error_reporting(0);
session_start();


$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

if($data==false){
    die("Connection error");
}

?>