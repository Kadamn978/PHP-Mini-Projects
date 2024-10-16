<?php
class DbConnection {
    private $conn;

    public function __construct() {

        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli("localhost", "root", "", "event_management");

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

// // Usage
// $db = new DbConnection('localhost', 'event_management', 'root', '');
// $conn = $db->getConnection();

// // Remember to close the connection when done
// // $db->closeConnection();
?>

