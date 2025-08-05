<?php
// Creating and Manipulating
$string = "Hello World!";
$newString = str_replace("World", "PHP", $string);
echo "<pre style='background-color: LavenderBlush; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>String</h3>";
print_r($newString); // New String
echo "<br />";
print_r(strlen($newString)); // String Length
echo "<br />";
print_r(substr($newString, 0, 8)); // Manipulate String
echo "<br />";
print_r(strtolower($newString)); // Lowercase String
echo "<br />";
print_r(strtoupper($newString)); // Uppercase String
echo "<br />";
print_r(strrev($newString)); // Reverse String
echo "<br />";
print_r(str_shuffle($newString)); // Shuffle String
echo "<br />";
print_r(str_repeat($newString, 3)); // Repeat String
echo "<br />";
print_r(str_word_count($newString)); // Count String
echo "<br />";
print_r(trim($newString)); // Trim String
echo "<br />";
print_r(strpos($newString, "PHP")); // strpos
echo "<br />";
print_r(strstr($newString, "PHP")); // strstr
echo "<br />";
print_r(strcmp($newString, "PHP")); // str comparison
echo "</pre>";

// Using String Functions

?>