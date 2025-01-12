<?php

use Core\Database;


$db = new Database();
$currentUserId = 25;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // First, execute the query
    $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $_GET['id']
    ]);

    // Then, use findOrFail() on the Database instance
    $note = $db->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    // form was submitted. delete the current note.
    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /notes');
    exit();
} else {

    $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $_GET['id']
    ]);
    $note = $db->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);
}
