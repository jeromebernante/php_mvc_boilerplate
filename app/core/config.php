<?php

require_once '../public/vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$path = str_replace("\\", "/", $_ENV['PROTOCOL'] . "://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));
define('DOMAIN', str_replace('/public/', '/', ROOT));

define('DEBUG', true); //false

if (DEBUG) {
	ini_set("display_errors", 1);
} else {
	ini_set("display_errors", 0);
}
