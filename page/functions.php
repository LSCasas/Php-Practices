<?php 
function dd($value){
    echo "<pre>";
    var_dump($value); // Agregamos el punto y coma
    echo "</pre>";

    die();
}  

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}