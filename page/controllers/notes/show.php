<?php

// Create a new instance of the Database class
$db = new Database();

$heading = 'Note';
$currentUserId = 1;

// First we execute the query
$db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
]);

// Then we use findOrFail() on the Database instance
$note = $db->findOrFail();

authorize($note['user_id'] === $currentUserId);


require "views/notes/show.view.php";
