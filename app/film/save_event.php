<?php
$host = 'localhost';
$db = 'eventdb2';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];

    $stmt = $conn->prepare("INSERT INTO film_and_entertainment (event_name, event_date) VALUES (?, ?)");
    $stmt->bind_param("ss", $eventName, $eventDate);

    if ($stmt->execute()) {
        echo "Event saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();