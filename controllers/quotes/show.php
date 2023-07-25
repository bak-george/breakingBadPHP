<?php 

use Core\App;
use Core\Database;
use Core\Quote;

$db = App::resolve(Database::class);

$quote = Quote::getRandomQuote($db);

$characterId = $quote[0]['character_id'];

$character = $db->query('select * from characters where id = :id', 
                        ['id' => $characterId])->get();

view("quotes/show.view.php", [
     'heading' => 'singlequote',
     'generatedQuote' => $quote,
     'character' => $character
]);
