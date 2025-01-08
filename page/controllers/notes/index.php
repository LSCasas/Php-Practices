<?php

// Create a new instance of the Database class
$db = new Database();



$heading = 'My Notes';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();



require "views/notes/index.view.php";
