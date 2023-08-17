<?php 

return [
  'database' => [
    'host' => '127.0.0.1',  // This is the standard IP address for localhost
    'port' => 3306,         // This is the default MySQL port. Adjust if your local setup is different.
    'dbname' => 'breaking_bad_local'  // Keep the database name same if you have the same local database name.
  ],
  'username' => 'root',  // This is a common local MySQL username. Adjust according to your local setup.
  'password' => '',      // Typically, local MySQL setups might not have a password. If yours does, replace the empty string with it.
  'recaptcha' => [
    'secretKey' => '6LdZgEUnAAAAAE4OTdtz8eWJogSuAK1afpKbfVTW' // If you're just testing locally, you may not need to change this. If you have a different key for local development, replace it here.
  ]
];
