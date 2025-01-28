<?php
$servername = "devweb2023.cis.strath.ac.uk"; // Replace with your database server name
$username = "syb23137"; // Replace with your database username
$password = "ieGae0lingo8"; // Replace with your database password
$dbname = "syb23137"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
