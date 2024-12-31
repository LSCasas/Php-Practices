<?php

require 'functions.php';
require 'Database.php';

// Create a new instance of the Database class
$db = new Database();

// Get the ID from the URL query parameter
$id = $_GET['id'];

// Query to get the post with the specified ID
$query = "SELECT * FROM posts WHERE id = ?";

// Execute the query and fetch the result
$posts = $db->query($query, [$id])->fetch();

// Show the results using 'dd()' (make sure it's defined in 'functions.php')
dd($posts);
