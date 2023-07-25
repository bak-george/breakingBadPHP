<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$quote = $db->query('select * from quote where id = :id', ['id' => $_GET['id']])->findOrFail();

$character = $db->query('SELECT * FROM characters WHERE id = :id', 
                  ['id' => $quote['character_id']])->findOrFail();

view("quotes/edit.view.php", [
     'heading' => 'Edit quote',
     'errors'  => [],
     'quote'   => $quote
]);