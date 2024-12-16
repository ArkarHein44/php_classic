<?php

function redirect($page){
    
    $redirecturl = ROOTURL.'/'.$page;
    header("location:".$redirecturl);

}





?>


<!-- redirect("auth/login"); -->