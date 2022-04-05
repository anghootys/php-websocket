<?php
// Autoload files using the Composer autoloader. 
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

// Configure dotenv to load variables from the .env file
$dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
$dotenv->load();
