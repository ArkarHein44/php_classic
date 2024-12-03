<?php

	// Config
	require_once "config/config.php";

	// Libraries (Manual)
	// require_once "libraries/SystemController.php";
	// require_once "libraries/SystemCore.php";
	// require_once "libraries/SystemDatabase.php";

	// Libraries (Autoload)
	spl_autoload_register(function($classname){
		require_once ('libraries/'.$classname.'.php');
	});





?>