<?php
$host = 'localhost';
$db = 'restaurant_db';
$user = 'root';      // your MySQL username
$pass = '';          // your MySQL password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
