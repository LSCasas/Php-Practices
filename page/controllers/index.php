<?php

view("index.view.php", [
    'heading' => 'Home',
]);

/*
if ($_SERVER['REQUEST_URI'] === '/') {
    echo 'bg-gray-900 text-white'; 
} else {echo 'text-gray-300';
} 

echo $_SERVER['REQUEST_URI'] === '/' ?  'bg-gray-900 text-white' : 'text-gray-300'; 
*/
// Include the view file