// Page not in use

<?php
$servername = "<servername>"; // Replace with your database server name
$username = "<username>"; // Replace with your database username
$password = "<password>"; // Replace with your database password
$dbname = "<dbname>"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

