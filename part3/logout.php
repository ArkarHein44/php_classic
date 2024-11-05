<?php

include_once "sessionconfig.php";

// session_destroy();

// unset($_SESSION['email']);
// unset($_SESSION['password']);

// if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
//     header("location:signin.php");
// }

unsetsession('email');
unsetsession('password');

if(authfailed()){
    redirectto('signin.php');
}