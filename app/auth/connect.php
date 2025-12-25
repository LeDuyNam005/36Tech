<?php
$db_server   = "localhost";
$db_username = "root";
$db_password = "";
$db_name     = "cgv";
$db_port     = 3306;

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_name, $db_port);

// Check connection
if ($conn->connect_error) {
  die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]));
}

// Set charset utf8
$conn->set_charset("utf8mb4");
