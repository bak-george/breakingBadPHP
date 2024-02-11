<?php
$heading = 'about';
$email = "george_bak@proton.me";
$encoded_email = htmlentities($email);

$developer = [
	'name' => 'George Bakoulis',
	'nick_name' => 'Bak',
	'occupation' => 'Developer',
	'status' => 'Alive',
	'quote'  => "A PHP project dedicated to my favorite series 'Breaking Bad'.",
    'email'  => $encoded_email
];


view("about.view.php", [
     'heading' => 'about',
     'developer' => $developer
]);                        