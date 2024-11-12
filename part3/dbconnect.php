<?php

// Using PDO  (PHP DAta object); 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = ""; 
$dbname = "phpdbfive"; 

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass); 
    echo "success";
}catch(PDOException $e){
    echo "Error Found : ". $e->getMessage();
}

 

?>