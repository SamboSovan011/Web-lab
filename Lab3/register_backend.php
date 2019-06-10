<?php

    $username  = $_POST['username'];
    $pass = $_POST['password'];
    $confpass = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    
    if ($pass == $confpass) {
        $Data = "data/userData.dat";
        $fo = fopen($Data,'a') or die("Can't open file!");
        $uname = "\n".$username.";";
        fwrite($fo,$uname);
        $upass = $pass.";";
        fwrite($fo,$upass);
        $ugender = $gender.";";
        fwrite($fo,$ugender);
        $uemail = $email.";";
        fwrite($fo,$uemail);
        
        fclose($fo);

        if (isset($username) || isset($pass) || isset($confpass)|| isset($gender) || isset($email)){
                header("location:login.php");
            }
    }else{
        header("location:register.php");
        alert("Your information is incorrect");
    }
    
    
?>
