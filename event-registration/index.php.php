<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        createEvent($_POST);
    } elseif (isset($_POST['update'])) {
        updateEvent($_POST['id'], $_POST);
    }
}

if (isset($_GET['delete'])) {
    deleteEvent($_GET['delete']);
}

$events = getEvents();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Event Registration</h1>
        <form id="eventForm" method="POST">
            <input type="hidden" id="eventId" name="id">

            <label for="name">Name </label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name ">
            <!-- <br><br> -->

            <label for="email">Email ID</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email ID ">
            <!-- <br><br> -->

            <label for="phone">Phone No.</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone No. ">
            <!-- <br><br> -->

            <label for="eventtype">Event type</label>
            <select name="eventtype" id="eventtype">
                <option value="privateevent">Private</option>
                <option value="corporateevent">Corporate</option>
                <option value="communityevent">Community</option>
                <option value="otherevent">Other</option>
            </select>
            <!-- <br><br> -->

            <label for="event">Event Name : </label>
            <input type="tel" id="event" name="event" placeholder="Event Name">
            <!-- <br><br> -->

            <label for="eventdate">Date</label>
            <input type="date" name="date" id="date">
            <!-- <br><br> -->

            <label for="eventtime">Event Time</label>
            <select name="eventtype" id="eventtype">
                <option value="privateevent">Morning (6am-10am) </option>
                <option value="corporateevent">Afternoon (11am-3pm) </option>
                <option value="communityevent">Evening (4pm-7pm) </option>
                <option value="otherevent">Night (8pm-12am) </option>
            </select>
            <!-- <br><br> -->

            <label for="request">Comments</label>
            <textarea name="request" id="request" placeholder="Max 256 words" ></textarea>
            <!-- <br><br> -->

            <button type="submit">Submit</button>   
            <button type="reset">Reset</button>
        </form>

        <h2>Registered Events</h2>
        <table id="eventTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event Type</th>
                    <th>Event Name</th>
                    <th>Event Date</th>
                    <th>Event Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?= htmlspecialchars($event['name']) ?></td>
                        <td><?= htmlspecialchars($event['emailID']) ?></td>
                        <td><?= htmlspecialchars($event['phone']) ?></td>
                        <td><?= htmlspecialchars($event['eventType']) ?></td>
                        <td><?= htmlspecialchars($event['eventName']) ?></td>
                        <td><?= htmlspecialchars($event['eventDate']) ?></td>
                        <td><?= htmlspecialchars($event['eventTime']) ?></td>
                        <td>
                            <button class="edit" data-id="<?= $event['id'] ?>">Edit</button>
                            <a href="?delete=<?= $event['id'] ?>" class="delete">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>

</html>
