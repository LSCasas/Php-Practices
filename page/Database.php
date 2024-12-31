<?php


class Database
{
    public $connection;

    public function __construct()
    {
        require_once __DIR__ . '/config.php';

        $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $username = DB_USERNAME;
        $password = DB_PASSWORD;

        // Create a new PDO instance to connect to the database
        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query)
    {
        // Prepare and execute the query using the connection object
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // Fetch all results as an associative array
        return $statement;
    }
}
