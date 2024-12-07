<?php
// Get the environment variables
$servername = getenv('DB_HOST'); // The hostname is set to the database container name
$username = "user";
$password = "password";
$dbname = "webappdb";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to the database"; 
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
