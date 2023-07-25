<?php

$developer = [
	'name' => 'George Bakoulis',
	'nick_name' => 'Bak',
	'occupation' => 'Developer',
	'status' => 'Alive',
	'quote'  => "A PHP project dedicated to my favorite series 'Breaking Bad'."
];


view("about.view.php", [
     'heading' => 'about',
     'developer' => $developer
]);                        