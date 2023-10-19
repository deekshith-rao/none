<?php
$servername = "localhost"; // Use localhost as the server name
$username = "u932499389_test1";
$password = "12345Dp12345";
$dbname = "u932499389_localhost";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully.";
}
?>
