<?php
    $host = "localhost";
    $Username = "root";
    $Password = "";

    $link = mysqli_connect($host, $Username, $Password);
    if (!$link) {
        die('Could not connect'.mysqli_error($link));
    }
    echo "Connect successfully <br>";

    $db_selected = mysqli_select_db($link, 'niptict');
    if (!$db_selected) {
        die('Can\'t use niptict: '.mysqli_error($link));
    }

    $username  = $_POST['username'];
    $pass = $_POST['password'];
    $confpass = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    
    if ($pass == $confpass) {
        // $Data = "data/userData.dat";
        // $fo = fopen($Data,'a') or die("Can't open file!");
        // $uname = "\n".$username.";";
        // fwrite($fo,$uname);
        // $upass = $pass.";";
        // fwrite($fo,$upass);
        // $ugender = $gender.";";
        // fwrite($fo,$ugender);
        // $uemail = $email.";";
        // fwrite($fo,$uemail);
        // fclose($fo);

        if (isset($username) && isset($pass) && isset($confpass)&& isset($gender) && isset($email)){
                mysqli_query($link, "INSERT INTO user (username, password, gender, email ) VALUES ( '$username', '$pass', '$gender', '$email')");
                mysqli_close($link);
                header("location:login.php");
            }
    }else{
        header("location:register.php");
    }
    
    
?>
