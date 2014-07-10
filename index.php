<?php

//------------------------------------------------
// show errors
//------------------------------------------------

error_reporting(E_ALL);
ini_set('display_errors', 1);

//------------------------------------------------
// autoloading
//------------------------------------------------

require_once __DIR__ . '/../../library/core/autoloader.php';
use \Core\Autoloader;

Autoloader::register(__DIR__ . '/../../library');
Autoloader::register(__DIR__);

//------------------------------------------------
// config
//------------------------------------------------

require_once __DIR__ . '/config.php';

//------------------------------------------------
// dependencies
//------------------------------------------------

use \Database\Extended_Database;

$database = new Extended_Database();

//------------------------------------------------
// application start
//------------------------------------------------

use \MVC\Application;

Application::create($config)
	->run();
