<?php
    session_start();
    if (isset($_SESSION["user"]) && time() < $_SESSION["expire"]) {
     echo '';
    }
     else{
        session_destroy();
        //redirect
        header("Location:http:cps/Login.php");
        exit;
        echo 'user not found '; 
    }
?>
