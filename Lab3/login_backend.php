<?php
    session_start();
    $userDatas = file ("./data/userData.dat");
    $uname = $_POST["username"];
    $upass = $_POST["password"];
    if (isset($uname) && isset($upass)){
        foreach ($userDatas as $user){
            $user_detail = explode(";",$user);
            if ($user_detail[0] == $uname && $user_detail[1] == $upass){
                $_SESSION['user'] = $uname; 
                $_SESSION['logged'] = "yes";
                header('location:index.php');
                break;
            }else {
                header('location:login.php');
            }
        }
    }   

?>
