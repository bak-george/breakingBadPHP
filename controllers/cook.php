<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database'], $config['username'], $config['password']); 

$quotes = $db->query('SELECT * FROM quotes WHERE contributor_id = 1 ORDER BY id DESC LIMIT 10')->get();


view("cook.view.php", [
     'heading' => 'cook',
     'quotes'  => $quotes
]);