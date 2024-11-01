<?php
include('../database/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];

    $stmt = $conn->prepare("INSERT INTO art_festivals(event_name, event_date) VALUES (?, ?)");
    $stmt->bind_param("ss", $eventName, $eventDate);

    if ($stmt->execute()) {
        echo "Event saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();