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
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        // Prepare and execute the query using the connection object
        $statement = $this->connection->prepare($query);
        $statement->execute($params); // Remove extra brackets if $params is already an array

        // Return the statement to work with the results
        return $statement;
    }
}
