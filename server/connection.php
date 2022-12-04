<?php

$server_name = "localhost";
$location = "root";
$password = "";
$dname = "php_project";


$conn = mysqli_connect($server_name,$location,$password,$dname);
        or die("Could not connect to the database");



?>