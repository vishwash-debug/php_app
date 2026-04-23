<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Apk</title>
</head>
<body>
    <h2>Enter Name</h2>
    <form method="POST">
        <input type="text" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
