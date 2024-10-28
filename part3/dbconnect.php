<?php

// Using PDO ( PHP Data Object )

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "";

try(){
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbhost;dbuser=$dbuser;$dbpass");
}catch(){

}