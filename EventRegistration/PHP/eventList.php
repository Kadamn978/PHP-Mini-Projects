<!-- <?php
include('DbConnection.php');

// Fetch data from the database
$sql = "SELECT * FROM event_registrations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Registered Events</title>
    <link rel="stylesheet" href="/EventRegistration/Css/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container">
        <div class="header">
            <p>Event Registration</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event Type</th>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['eventtype']; ?></td>
                            <td><?php echo $row['event']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['eventtime']; ?></td>
                            <td>
                                <button class="view-btn" data-id="<?php echo $row['id']; ?>">View</button>
                                <button class="edit-btn" data-id="<?php echo $row['id']; ?>">Edit</button>
                                <button class="delete-btn" data-id="<?php echo $row['id']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="8">No events registered.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        </form>
    </div>


    <!-- <div class="container">
        <h1>All Registered Events</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event Type</th>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['eventtype']; ?></td>
                            <td><?php echo $row['event']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['eventtime']; ?></td>
                            <td>
                                <button class="view-btn" data-id="<?php echo $row['id']; ?>">View</button>
                                <button class="edit-btn" data-id="<?php echo $row['id']; ?>">Edit</button>
                                <button class="delete-btn" data-id="<?php echo $row['id']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="8">No events registered.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div> -->

    <script>
        $(document).ready(function () {
            // AJAX call for viewing, editing, and deleting events can be added here
            $('.view-btn').click(function () {
                const id = $(this).data('id');
                // Implement view functionality (maybe open a modal with event details)
            });

            $('.edit-btn').click(function () {
                const id = $(this).data('id');
                // Implement edit functionality (redirect to an edit form)
                window.location.href = `/EventRegistration/PHP/editEvent.php?id=${id}`;
            });

            $('.delete-btn').click(function () {
                const id = $(this).data('id');
                if (confirm('Are you sure you want to delete this event?')) {
                    // Implement AJAX delete request
                    $.ajax({
                        url: '/EventRegistration/PHP/deleteEvent.php',
                        type: 'POST',
                        data: { id: id },
                        success: function (response) {
                            alert(response);
                            location.reload(); // Reload to refresh the event list
                        },
                        error: function (xhr, status, error) {
                            alert("Error deleting event: " + error);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>

<?php
$conn->close();
?> -->
