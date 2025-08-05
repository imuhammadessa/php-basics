<?php
use Xesau\Router;
require_once "Router.php";

$router = new Router(function ($method, $path, $statusCode, $exception) {
    include 'views/404.php';
});

$router->get('/', function() {
    include 'views/header.php';
    include 'views/home.php';
    include 'views/footer.php';
});

$router->get('/services', function() {
    include 'views/header.php';
    include 'views/services.php';
    include 'views/footer.php';
});

$router->get('/user/(\d+)', function($id) {
    include 'views/header.php';
    include 'views/user.php';
    include 'views/footer.php';
});

$router->get('/about', function() {
    include 'views/header.php';
    include 'views/about.php';
    include 'views/footer.php';
});

$router->get('/contact', function() {
    include 'views/header.php';
    include 'views/contact.php';
    include 'views/footer.php';
});


$router->post('user', function() {
    print_r($_POST);
});


$router->dispatchGlobal();
?>