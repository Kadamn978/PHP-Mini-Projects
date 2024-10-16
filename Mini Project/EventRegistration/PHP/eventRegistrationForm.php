<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $eventtype = htmlspecialchars($_POST['eventtype']);
    $event = htmlspecialchars($_POST['event']);
    $date = htmlspecialchars($_POST['date']);
    $eventtime = htmlspecialchars($_POST['eventtime']);
    $request = htmlspecialchars($_POST['request']);

    // Display the data
    echo "<h1>Submitted Data</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone No:</strong> $phone</p>";
    echo "<p><strong>Event Type:</strong> $eventtype</p>";
    echo "<p><strong>Event Name:</strong> $event</p>";
    echo "<p><strong>Date:</strong> $date</p>";
    echo "<p><strong>Event Time:</strong> $eventtime</p>";
    echo "<p><strong>Comments:</strong> $request</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>
