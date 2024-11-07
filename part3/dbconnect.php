<?php

// Using PDO  (PHP DAta object); 

$dbhost = "localhost";
$dbuser = "HTOOHTOOAUNG";
$dbpass = "mysqlhtoo22@@"; 
$dbname = "phpdbfive"; 

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass); 
    echo "succ";
}catch(PDOException $e){
    echo "Error Found : ". $e->getMessage();
}



?>