<?php

session_start();

// => Auth Check (check user login or not)

function authcheck(){
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

// => Auth Check by dynamic key

function authdyncheck($key = "user_id"){
    // return $_SESSION[$key];
    // return isset($_SESSION[$key]) ? $_SESSION[$key] : false;  // to check zz 
    return isset($_SESSION[$key]);
}


// => Logout 

function logout(){
    session_unset();
    session_destroy();
    // redirect('auth/login.php');
}


?>