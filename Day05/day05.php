<!--
// Creating Functions 
<?php
function name(){
return "John Doe";
}

echo name();
?> -->

<!--
// Function Arguments 
<?php
function area($length, $width){
return $length * $width;
}

echo area(10, 20);
?> -->

<!--
// Return Values from Functions 
<?php
function person($name, $age){
return "Name: " . $name . " " . "Age: " . $age;
}

echo person("John Doe", 20);
?> -->

<!-- Include and Require -->
<?php
require "header.php";
include "body.php";
require "footer.php";
?>