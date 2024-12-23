<?php

    // Config
    require_once "config/config.php";

    // Libraries (Manual)
    // require_once "libraries/SystemController.php";
    // require_once "libraries/SystemCore.php";
    // require_once "libraries/SystemDatabase.php";


    // Load Helpers
    require_once "helpers/sessionconfig.php";
    require_once "helpers/flashmessage.php";
    require_once "helpers/redirect.php";
    


    // Libraries (Autoload)
    spl_autoload_register(function($classname){
        require_once('libraries/' . $classname . '.php');
    });



?>