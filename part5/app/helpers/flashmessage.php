<?php


function flash($sessionname="", $message="", $class="alert alert-success"){
    
    if(!empty($sessionname)){

        if(empty($_SESSION[$sessionname]) && !empty($message)){

            $_SESSION[$sessionname] = $message;
        }elseif(!empty($_SESSION[$sessionname]) && empty($message)){
            echo "<div>".$_SESSION[$sessionname]."</div>";

            unset($_SESSION[$sessionname]);
        }

    }

}



?>

<!-- 
=>set
flash("register_success", "User account created successfully"); 

=>display
flash("login_success");

-->