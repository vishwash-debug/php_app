<?php

$host = "database-2.ccneo2ee69pt.us-east-1.rds.amazonaws.com";
$user = "admin";
$password = "Vishwash";
$dbname = "mydb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $conn->query($sql);
}

?>
