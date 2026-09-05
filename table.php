<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $guests = (int)$_POST['guests'];

    $sql = "INSERT INTO bookings (name, email, phone, date, time, guests) VALUES ('$name', '$email', '$phone', '$date', '$time', $guests)";
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful! We look forward to serving you.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
