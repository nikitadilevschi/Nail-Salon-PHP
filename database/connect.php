<?php
$driver = "mysql";
$dbhost = "localhost";
$dbname = "employee";
$username = "root";
$password = "asd2asd2A";
$charset = "utf8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {

    $db1 = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
} catch (PDOException $i) {
    die("Error connecting to the database");
}
// Database connection for "booking_system" database
$booking_dbhost = "localhost";
$booking_dbname = "booking_system";
$booking_username = "root";
$booking_password = "asd2asd2A";

try {
    $db2 = new PDO("mysql:host=$booking_dbhost;dbname=$booking_dbname", $booking_username, $booking_password);
} catch (PDOException $i) {
    die("Error connecting to the database");
}