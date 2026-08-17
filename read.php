<?php
$conn = new mysqli("localhost", "root", "", "last");

$result = $conn->query("SELECT * FROM vacation");

echo "<h2>Booking Records</h2>";
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Phone_number: " . $row["phone_number"]. " - Gender: " . $row["gender"]. " - Destination: " . $row["destination"]. "<br>";
}


$conn->close();
?><br>
<a href="index.html">Return to form</a>