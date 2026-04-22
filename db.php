<?php

$host = "YOUR-RDS-ENDPOINT";
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
