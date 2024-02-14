<?php
$servername = "db";
$username = "App1";
$password = "Zoologys@10";
$dbname = "App1";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>