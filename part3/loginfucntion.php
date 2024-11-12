<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

// sudo chmod 777 -R public/ 

if($_SERVER['REQUEST_METHOD']==="POST"){
    $getemail = textfilter($_POST['email']);
    $getpassword = textfilter($_POST['password']);

    echo $getemail;
    echo $getpassword;

    if($getemail && $getpassword){
        loginverify($getemail, $getpassword);
    }else{
        echo "Enter Username and Password";
    }
}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

function loginverify($getemail, $getpassword){
    // try{
    //     $stmt-$conn->prepare("SELECT email,password FROM users WHERE email=:email AND password=:password");
     
    //     $stmt->bindParam(":emil",$bindemail);
    //     $stmt->bindParam(":password",$bindpassword);

    //     $bindemail = $email;
    //     $bindpassword = $password;

    //     $stmt->execute();

    // }catch(PDOException $e){
    //     echo "Error Found : ". $e->getMessage();
    // }
}
?>
<!-- 
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100),
    documnets VARCHAR(100)
);

DESC users; 
-->
