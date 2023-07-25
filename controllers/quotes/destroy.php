<?php 
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$quote = $db->query('select * from quotes where id = :id', ['id' => $_POST['id']])->findOrFail();

authorize($quote['user_id'] === $currentUserId); 

$deletion = $db->query('delete from quotes where id = :id', ['id' => $_POST['id']]);

header('location: /quote');
exit();
