<?php
class DbConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "crudphp");
        if ($this->connection->connect_error) {
            die("Error in connection: " . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}


?>