<?php
$servername = "localhost"; // nama host
$username = "root"; // database username
$password = ""; // database password
$dbname = "pariwisata-vsga"; // nama database kalian

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
