<?php

include("DbConnection.php");

$db = new DbConnection();
$conn = $db->getConnection();

// =================================== Create data ============================
$evereg = new EventRegistrationForm();

$name = $_POST["custname"];
$email = $_POST["custemail"];
$phone = $_POST["custphone"];
$eventtype = $_POST["etype"];
$event = $_POST["ename"];
$date = $_POST["edate"];
$eventtime = $_POST["etime"];
$request = $_POST["req"];
$output = $evereg->saveData($conn, $name, $email, $phone, $eventtype, $event, $date, $eventtime, $request);
if ($output) {
    echo 1;
} else {
    echo 0;
}
$db->closeConnection();
?>