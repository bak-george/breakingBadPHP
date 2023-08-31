<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, file_exists(__DIR__.'/.env.local') ? '.env.local' : '.env.production');
$dotenv->load();

$username = $_ENV['DB_USER'];

return [
  'database' => [
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'dbname' => $_ENV['DB_NAME']
  ],
  'username' => $_ENV['DB_USER'],
  'password' => $_ENV['DB_PASS'],
  'recaptcha' => [
    'secretKey' => $_ENV['RECAPTCHA_SECRET']
  ]
];

