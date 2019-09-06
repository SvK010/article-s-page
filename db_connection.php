<?php

$servername = "localhost";
$username = "root";
$password = "";
$DBname = "test_task";

$con = new mysqli($servername, $username, $password, $DBname);

if ($con->$connect_error) {
    die("Connection failed: " . $con->connect_error);
}   

?>