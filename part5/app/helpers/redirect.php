<?php

function redirect($page){
    $redirecturl = ROOTURL . '/' . $page;
    header('Location: ' . $redirecturl);
}

?>

<!-- redirect("auth/login.php");  line 4 -->