<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website2";
// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $yourName = $_POST["your_name"];
    $yourEmail = $_POST["your_email"];
    $yourPhone = $_POST["your_phone"];
    $comments = $_POST["comments"];

    $sql = "INSERT INTO contact_form_info (Name, Email, Phone, Comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
    if ($conn->query($sql) == TRUE){
        echo "Sent!";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }
}
$conn->close();
?>