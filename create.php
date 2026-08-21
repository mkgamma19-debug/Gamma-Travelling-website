<?php
$conn = new mysqli("localhost", "root", "", "last");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert patient
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$gender = $_POST['gender'];
$destination = $_POST['destination'];

$sql = "INSERT INTO vacation (name, phone_number, gender, destination) VALUES ('$name', '$phone_number', '$gender', '$destination')";

if ($conn->query($sql) === TRUE) {
    echo "New booking added successfully!";

   
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?><br>
<a href="index.html">Return to home</a>
