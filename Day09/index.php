<?php

// Regular Expressions
echo "Regular Expressions <br />";
$email = 'example@example.com';
$pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';

if (preg_match($pattern, $email)) {
    echo "Email is valid";
} else {
    echo "Email is not valid";
}



// Error Handling for production

//echo $var; // Error

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Working with Date and Time

echo "<br /><br /> Date and Time <br />";
$currentTime = date('H:i:s');
echo $currentTime;

echo "<br />";
$currentDate = date('Y-m-d');
echo $currentDate;

echo "<br />";
$currentYear = date('Y');
echo $currentYear;


// Sessions and Cookies
echo "<br /><br /> Sessions and Cookies <br />";
// Set Sessions user login isset
session_start();
$_SESSION['user_login'] = true;
if (isset($_SESSION['user_login'])) {
    if($_SESSION['user_login'] == true) {
        echo "Login successfully";
    } else {
        echo "Logged out";
    }
}

// Set Sessions user login unset
unset($_SESSION['user_login']);

// Set Sessions user login destroy
session_destroy();

// Set Cookies
$cookieName = 'username';
$cookieValue = 'john_doe';
$expiryTime = time() + (86400 * 30); 
setcookie($cookieName, $cookieValue, $expiryTime, '/');

echo "<br /> <br /> Get Cookies <br />";

// Get Cookies
if (isset($_COOKIE['username'])) {
    echo $_COOKIE['username'];
} else {
    echo "Cookie not set";
}