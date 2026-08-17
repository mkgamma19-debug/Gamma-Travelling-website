<?php
$conn = new mysqli("localhost", "root", "", "last");

$id = $_POST['id'];
$destination = $_POST['destination'];

$sql = "UPDATE vacation SET destination='$destination' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Booking updated successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
 
?><br>
<a href="index.html">Return to form</a>