<?php
$servername="sql312.infinityfree.com";
$username= "if0_35830697";
$password="UrQT14PHaQjCsx";
$dbname="if0_35830697_myadi";

$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);

}
?>