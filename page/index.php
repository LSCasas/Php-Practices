<?php

require 'functions.php';
//require 'router.php';

// Connect to MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";  // Changed 'mysql' to 'myapp' (your database name)
$username = "root";  // Default MySQL user (it could be different)
$password = "Luiscasas45$";  // Your MySQL password

// Create a new PDO instance to connect to the database
$pdo = new PDO($dsn, $username, $password);

// Prepare and execute the query
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

// Fetch all results as an associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// Show the results using 'dd()' (make sure it's defined in 'functions.php')
foreach ($posts as $post) {
    echo "<li>" . $post['tittle'] . "</li>";
}
?>