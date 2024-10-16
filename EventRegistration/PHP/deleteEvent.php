<!-- <?php
include('DbConnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $stmt = $conn->prepare("DELETE FROM event_registrations WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Event deleted successfully.";
    } else {
        echo "Error deleting event: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?> -->
