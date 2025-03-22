<?php

use Core\Database;

$db = new Database();

$currentUserId = 1;



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
    $note = $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $_POST['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query('DELETE FROM notes WHERE id = :id', [
        'id' => $_POST['id']
    ]);

    header('Location: /notes');
    exit();
}


header('Location: /notes');
exit();
