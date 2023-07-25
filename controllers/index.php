<?php 

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$quote = $db->query('select * from quotes where id = :id', ['id' => 1])->get();

$character = $db->query('select * from characters where id = :id', ['id' => 1])->get();


view("index.view.php", [
     'heading' => 'home',
     'quote' =>  $quote,
     'character' => $character
]);