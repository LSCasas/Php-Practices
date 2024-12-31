<?php

require 'functions.php';
require 'Database.php';
// Connect to the database and execute a query.


$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC); // Corregido aquí: se agregó el paréntesis de apertura para la función query

// Show the results using 'dd()' (make sure it's defined in 'functions.php')
dd($posts);
