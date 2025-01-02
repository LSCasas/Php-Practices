<?php

// Create a new instance of the Database class
$db = new Database();

$heading = 'Note';


$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort(404);
}

$currentUserId = 1;

if ($note['user_id'] != $currentUserId) {
    abort(403);
}

require "views/note.view.php";
