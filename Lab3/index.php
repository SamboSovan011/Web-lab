<?php 

    session_start();
    if((!isset($_SESSION['logged'])) and ($_SESSION['logged'] != "yes")){

        header("location:login.php");
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    Hello, If you see this it mean you have been login success!   

</body>
</html>
