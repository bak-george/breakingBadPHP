<?php 

use Core\Quote;

$heading = 'quote';

$quotePath = require_once '../characterAndQuotes.php';

$quote = new Quote($quotePath);

$data = $quote->generateRandomQuote();

view("index.view.php", [
     'heading' => 'home',
     'data' =>  $data
]);