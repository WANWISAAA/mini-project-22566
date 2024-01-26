<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "blog-app";

//1.Creat datsbase connection
$conn = mysqli_connect($host, $username, $password,);

if (!$conn) {
    die("mysqli_connect_failed". mysqli_connect_error());
}else{
    print"conected successfully";
}