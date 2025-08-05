<?php
// Form Handling
print_r($_POST);

// POST, GET and REQUEST 
print_r($_POST);
print_r($_GET);
print_r($_REQUEST);

// Sanitizing User Input

$username = htmlspecialchars($_POST['username'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
echo $username;

?>