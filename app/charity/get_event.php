<?php
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$db = 'eventdb2';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Execute SQL query
$result = $conn->query("SELECT event_name, event_date FROM charity_and_fundraising ORDER BY id DESC LIMIT 1");

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(['event_name' => '', 'event_date' => '']);
}

// Close the connection
$conn->close();

?>
