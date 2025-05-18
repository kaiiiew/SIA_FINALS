<?php
$host = "127.0.0.1";       // or "localhost"
$dbname = "user_db";       // your database name
$username = "root";        // default for XAMPP/WAMP
$password = "";            // default is empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>