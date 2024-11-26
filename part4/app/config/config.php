<?php

echo "config file is working <br/>";

// App Name 
define('APPNAME','PHP OOP Project');

// Root URL 
define('URL ROOT','http://localhost/php_classic/part4');

// App URL 

// current dir 
// echo __FILE__;  
// C:\xampp\htdocs\php_classic\part4\app\config\config.php

// current folder 
// echo dirname(__FILE__);
// C:\xampp\htdocs\php_classic\part4\app\config

// parent folder of current folder
// echo dirname(dirname(__FILE__));
// C:\xampp\htdocs\php_classic\part4\app

define('APPURL', dirname(dirname(__FILE__)));

// Database Access 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'phpdbsix');




?>