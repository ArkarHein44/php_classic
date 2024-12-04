<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Config
require_once "config/config.php";

// Libraries    (Manual)
// require_once "libraries/SystemController.php";
// require_once "libraries/SystemCore.php";
// require_once "libraries/SystemDatabase.php";

// Librarires (Autoload)
spl_autoload_register(function ($class) {
    require_once "libraries/" . $class . ".php";
});
