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
    session_start();
    // $userDatas = file ("./data/userData.dat");
    $q = "SELECT username, password FROM user";
    $result = mysqli_query($link, $q);
    $uname = $_POST["username"];
    $upass = $_POST["password"];
    if (isset($uname) && isset($upass)) {
        while ($Row = mysqli_fetch_assoc($result)) {
            if($Row['username'] === $uname && $Row['password'] === $upass){
                $_SESSION['user'] = $uname; 
                $_SESSION['logged'] = "yes";
                header('location:index.php');
                break;
            }else{
                header('location:login.php');
            }
        }
    }
    
    
    // if (isset($uname) && isset($upass)){
    //     foreach ($userDatas as $user){
    //         $user_detail = explode(";",$user);
    //         if ($user_detail[0] == $uname && $user_detail[1] == $upass){
    //             $_SESSION['user'] = $uname; 
    //             $_SESSION['logged'] = "yes";
    //             header('location:index.php');
    //             break;
    //         }else {
    //             header('location:login.php');
    //         }
    //     }
    // }   

?>
