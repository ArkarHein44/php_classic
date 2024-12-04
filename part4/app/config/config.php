<?php



// App Name
define('APPNAME', 'PHP OOP Project');

// Root URL
define('URLROOT', 'http://localhost/dltphpbatch4/part4');

// app URL
// echo __FILE__; // /Applications/XAMPP/xamppfiles/htdocs/dltphpbatch4/part4/app/config/config.php
// echo dirname(__FILE__); // /Applications/XAMPP/xamppfiles/htdocs/dltphpbatch4/part4/app/config
// echo dirname(dirname(__FILE__)); // /Applications/XAMPP/xamppfiles/htdocs/dltphpbatch4/part4/app
define('APPURL', dirname(dirname(__FILE__)));

// DB Access
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'phpdbsix');

echo "config file is working";