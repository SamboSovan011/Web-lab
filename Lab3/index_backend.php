<?php
    session_start();
    session_unset(); 
    session_destroy();
    if((!isset($_SESSION['logged'])) and ($_SESSION['logged'] != "yes")){

        header("location:login.php");
    }
 
?>