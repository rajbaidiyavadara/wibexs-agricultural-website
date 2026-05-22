<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname = "import_export_db"; // Your new database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>