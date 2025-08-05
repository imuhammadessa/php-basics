<?php

// - Composer
// - Installation and Setup
// - Composer.json
// - Autoload with composer


use Medoo\Medoo;
include "vendor/autoload.php";

$database = new Medoo([
	// [required]
	'type' => 'mariadb',
	'host' => 'localhost',
	'database' => 'travel',
	'username' => 'root',
	'password' => '',
]);

$data = $database->select("users", "*");

echo "<pre>";
print_r($data);
echo "</pre>";

// - Install and Update vendors
// terminal: composer update
// After downloading any vendor, run composer dump-autoload
// terminal: composer install
// This is just for json packages

?>