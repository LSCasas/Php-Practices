<?php

// Create a new instance of the Database class
$db = new Database();



$heading = 'My Notes';

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();


require "views/notes.view.php";
