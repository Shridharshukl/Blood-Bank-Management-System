<?php
$servername = "db"; // Use the Docker service name for MySQL
$username = "root";
$password = "root"; // Set to match your Docker Compose MYSQL_ROOT_PASSWORD
$dbname = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Could not Connect MySql: ' . $conn->connect_error);
}
?>