<!-- <?php
include('DbConnection.php');

$stmt = null; // Initialize $stmt

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM event_registrations WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form submission to update event details
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $eventtype = htmlspecialchars(trim($_POST['eventtype']));
    $event = htmlspecialchars(trim($_POST['event']));
    $date = htmlspecialchars(trim($_POST['date']));
    $eventtime = htmlspecialchars(trim($_POST['eventtime']));
    $request = htmlspecialchars(trim($_POST['request']));

    // Prepare the update statement
    $stmt = $conn->prepare("UPDATE event_registrations SET name=?, email=?, phone=?, eventtype=?, event=?, date=?, eventtime=?, request=? WHERE id=?");

    // Bind parameters
    $stmt->bind_param("ssssssssi", $name, $email, $phone, $eventtype, $event, $date, $eventtime, $request, $id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to event list or display success message
        header("Location: event_list.php"); // Redirecting after successful update
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

// Close statement and connection if $stmt is set
if ($stmt) {
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="/EventRegistration/Css/styles.css">
</head>
<body>
<div class="container">
    <h1>Edit Event</h1>
    <form action="" method="post">
        <label for="name">Name</label> 
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($event['name']); ?>" placeholder="Enter Your Name" required>

        <label for="email">Email ID</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($event['email']); ?>" placeholder="Enter Your Email ID" required>

        <label for="phone">Phone No.</label>
        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($event['phone']); ?>" placeholder="Enter Your Phone No." required>

        <label for="eventtype">Event Type</label>
        <select name="eventtype" id="eventtype" required>
            <option value="">Select Event</option>
            <option value="privateevent" <?php echo $event['eventtype'] == 'privateevent' ? 'selected' : ''; ?>>Private</option>
            <option value="corporateevent" <?php echo $event['eventtype'] == 'corporateevent' ? 'selected' : ''; ?>>Corporate</option>
            <option value="communityevent" <?php echo $event['eventtype'] == 'communityevent' ? 'selected' : ''; ?>>Community</option>
            <option value="otherevent" <?php echo $event['eventtype'] == 'otherevent' ? 'selected' : ''; ?>>Other</option>
        </select>

        <label for="event">Event Name</label>
        <input type="text" id="event" name="event" value="<?php echo htmlspecialchars($event['event']); ?>" placeholder="Event Name" required>

        <label for="date">Date</label>
        <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($event['date']); ?>" required>

        <label for="eventtime">Event Time</label>
        <select name="eventtime" id="eventtime" required>
            <option value="">Select Time</option>
            <option value="morning" <?php echo $event['eventtime'] == 'morning' ? 'selected' : ''; ?>>Morning (6am-10am)</option>
            <option value="afternoon" <?php echo $event['eventtime'] == 'afternoon' ? 'selected' : ''; ?>>Afternoon (11am-3pm)</option>
            <option value="evening" <?php echo $event['eventtime'] == 'evening' ? 'selected' : ''; ?>>Evening (4pm-7pm)</option>
            <option value="night" <?php echo $event['eventtime'] == 'night' ? 'selected' : ''; ?>>Night (8pm-12am)</option>
        </select>

        <label for="request">Comments</label>
        <textarea name="request" id="request" placeholder="Max 256 words"><?php echo htmlspecialchars($event['request']); ?></textarea>

        <button type="submit">Update Event</button>
    </form>
</div>

</body>
</html> -->
