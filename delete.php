<?php
$conn = new mysqli("localhost", "root", "", "last");

$id = $_POST['id'];

$sql = "DELETE FROM vacation WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Booking deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?><br>
<a href="index.html">Return to form</a>