<?php
class EventRegistrationForm
{
    public function saveData($connection, $name, $email, $phone, $eventtype, $event, $date, $eventtime, $request)
    {

        $query = "INSERT INTO 'event_registrations' ('name', 'email', 'phone', 'eventtype', 'event', 'date', 'eventtime', 'request') VALUES ({$name}, {$email}, {$phone}, {$eventtype}, {$event}, {$date}, {$eventtime}, {$request},) ";

        $result = $connection->query($query) or die("Error in saving data" . $connection->error);
        return $result;

    }








}

?>

/* <!-- <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include('DbConnection.php');
echo "Inside eventregistration form .php ";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Inside SERVER['REQUEST_METHOD'] ";

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $eventtype = htmlspecialchars(trim($_POST['eventtype']));
    $event = htmlspecialchars(trim($_POST['event']));
    $date = htmlspecialchars(trim($_POST['date']));
    $eventtime = htmlspecialchars(trim($_POST['eventtime']));
    $request = htmlspecialchars(trim($_POST['request']));

    $errors = [];
    echo "Inside error for empty field ";

    if (empty($name) || empty($email) || empty($phone) || empty($eventtype) || empty($event) || empty($date) || empty($eventtime)) {
        $errors[] = "Please fill in all required fields.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
        echo "Inside error for valid email field ";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "Inside data insertion above stmt ";

        $stmt = $conn->prepare("INSERT INTO event_registrations (name, email, phone, eventtype, event, date, eventtime, request) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $name, $email, $phone, $eventtype, $event, $date, $eventtime, $request);
        echo "Inside data insertion below stmt ";

        if ($stmt->execute()) {
            echo "Registration successful!";
            // Uncomment this line to redirect after checking if everything is working
            // header('Location: /EventRegistration/PHP/eventList.php');
            exit();
        } else {
            echo "Error: " . $stmt->error;
            echo "Inside stmt execute else ";
        }

        $stmt->close();
        $conn->close();
        echo "after connection close";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?> --> */