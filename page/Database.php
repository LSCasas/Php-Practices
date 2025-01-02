<?php

class Database
{
    public $connection;
    public $statement;

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

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);


        return $this;
    }




    public function find()
    {
        return $this->statement->fetch();
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }


    public function findOrFail()
    {
        $result = $this->find();
        if (! $result) {
            abort(404);
        }
        return $result;
    }
}
