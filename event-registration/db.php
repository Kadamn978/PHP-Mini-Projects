<?php
// db.php

$host = 'localhost';
$db = 'eventdb';
$user = 'root'; // Adjust according to your setup
$pass = ''; // Adjust according to your setup

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}

// Create Event
function createEvent($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO events (name, emailID, phone, eventType, eventName, eventDate, eventTime, requests) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$data['name'], $data['emailID'], $data['phone'], $data['eventType'], $data['eventName'], $data['eventDate'], $data['eventTime'], $data['requests']]);
}

// Read Events
function getEvents() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM events");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Update Event
function updateEvent($id, $data) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE events SET name = ?, emailID = ?, phone = ?, eventType = ?, eventName = ?, eventDate = ?, eventTime = ?, requests = ? WHERE id = ?");
    $stmt->execute([$data['name'], $data['emailID'], $data['phone'], $data['eventType'], $data['eventName'], $data['eventDate'], $data['eventTime'], $data['requests'], $id]);
}

// Delete Event
function deleteEvent($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM events WHERE id = ?");
    $stmt->execute([$id]);
}
