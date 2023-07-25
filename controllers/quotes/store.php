<?php 

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

$config = require base_path('config.php');

$errors = [];

if (!Validator::string($_POST['quote'], 3, 200)) {
  $errors['quote'] = "'You are a Chatty Kathy today. - Saul Goodman'" . "<br>" . "The quote should not be less than 3 characters and more than 200 characters.";
}

if (!isset($_POST['character_id']) || $_POST['character_id'] === '') {
  $errors['character_id'] = 'Pick a character to submit the quote!';
}

if ($_POST) {
    $secretKey = $config['recaptcha']['secretKey']; 
    $responseKey = $_POST['g-recaptcha-response']; 
    $userIP = $_SERVER['REMOTE_ADDR']; 
  
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

    $response = file_get_contents($url);
    $response = json_decode($response);

    if (!$response->success) {
      $errors['recaptcha'] = 'reCaptcha failed. Please try again';
    } 
}

if (!empty($errors)) {
  return view("quotes/create.view.php", [
    'heading' => 'quoteCreate',
    'errors'  => $errors 
  ]);
}

$db->query('INSERT INTO cooked_quotes(character_id,quote,contributor_nickname) VALUES (:character_id,:quote,:contributor_nickname)', [
        'character_id' => $_POST['character_id'],
        'quote'        => $_POST['quote'],
        'contributor_nickname' => $_POST['contributor_nickname']
      ]);

      header('location: /thankyou'); 
      die();


