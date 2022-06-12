<?php
    $_SERVER = "localhost";
    $username = "jatin";
    $password = "secretpass";
    $database = "parkingsystem";
 
    $conn = new mysqli($_SERVER, $username, $password, $database);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
           }
         
?>
