<?php 

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/disclaimer', 'controllers/disclaimer.php');

$router->get('/cook', 'controllers/cook.php');
$router->get('/quote', 'controllers/quotes/show.php');
$router->get('/thankyou', 'controllers/thankyou.php');
$router->get('/quotes/create', 'controllers/quotes/create.php');
$router->get('/show', 'controllers/quotes/show.php');



$router->get('/quote/edit', '/controllers/quotes/edit.php');
$router->post('/quote', 'controllers/quotes/store.php'); 
