<?php
// db_connection.php

$servername = "localhost";
$username = "userna"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "donald"; // Replace with your database name

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
} catch (Exception $e) {
    // Handle exception
    echo "Error: " . $e->getMessage();
} finally {
    // Close the connection if it was established
    if (isset($conn) && $conn->ping()) {
        $conn->close();
    }
}
?>