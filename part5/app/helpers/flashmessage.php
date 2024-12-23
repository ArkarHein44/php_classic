<?php

// session_start();

function flash($sessionname = "", $message = "", $class = "alert alert-success"){

    if(!empty($sessionname)){

        if(emply($_SESSION[$sessionname])&& !empty($message)){

            $_SESSION[$sessionname] = $message;

        }elseif(!empty($_SESSION[$sessionname]) && empty($message)){
            
            echo '<div>' . $_SESSION[$sessionname] . '</div>';

            unset($_SESSION[$sessionname]);
        }
    }


}

?>


<!-- 
=> set
flash('login_success', 'You have successfully login', 'alert alert-success');

=>display
flash("login_success");

-->

<!-- 
flash('login_success', 'You have successfully login', 'alert alert-success'); 

flash('register_success', 'User account created successfully', 'alert alert-success'); 
-->


<!-- message empty => ဆိုရင် ဆွဲထုတ်တာ  -->
<!-- message ရော session name ရော ပါရင် သွားထည့်တာ  -->