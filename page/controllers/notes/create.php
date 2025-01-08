<?php
require 'Validador.php';
$db = new Database();

$heading = "Create note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    if (!Validador::string($_POST['body'], 1, 10)) {
        $errors['body'] = 'A body of no more than 1,000 is required';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) 
        VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/notes/create.view.php';
