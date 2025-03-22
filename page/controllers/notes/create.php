<?php

use Core\Database;
use Core\Validador;

$db = new Database();


$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validador::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

        header('Location: /notes');
        exit();
    }
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
