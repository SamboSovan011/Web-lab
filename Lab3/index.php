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
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body id="background">
	<div class="container vertical-center">
        <div class="col-sm-6 offset-sm-3">
            <div class="container px-lg-5">
                <div class="row mx-lg-n5">
                    <div class="col py-3 px-lg-5 border | backgroundOpCol1">
                        <div class="box">
                            <img src="images/niptict.jpg" class="rounded | mx-auto d-block" alt="niptict logo" width="100" height="100"> 
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col py-3 px-lg-5 border | backgroundOpCol2">
                    	<?php 
                    		$host = "localhost";
						    $Username = "root";
						    $Password = "";

						    $link = mysqli_connect($host, $Username, $Password);
						    if (!$link) {
						        die('Could not connect'.mysqli_error($link));
						    }
						    "Connect successfully <br>";

                    		$db_selected = mysqli_select_db($link, 'niptict');
						    if (!$db_selected) {
						        die('Can\'t use niptict: '.mysqli_error($link));
						    }
						    // $userDatas = file ("./data/userData.dat");
						    $q = "SELECT username, gender, email FROM user";
						    $result = mysqli_query($link, $q);
						    if ($Row = mysqli_fetch_assoc($result)) {
						    	if ($Row['username'] = $_SESSION['user']) {
						    	

                    	?>
	                        <form action="index_backend.php" method="POST">
	                        <div class="form-group">
	                            <span>Name:</span> <?php echo $Row['username']; ?>
	                            
	                            
	                        </div>
	                        <div class="form-group">
	                            <span>Gender:</span> <?php echo $Row['gender']; ?>

	                        </div>
	                        <div class="form-group">
	                            <span>Email:</span> <?php echo $Row['email']; ?>

	                        </div>
	                        <div class="form-group">     
	                            <button type="submit" class="btn btn-primary">Logout</button>
	                        </div>
	                        </form>
                    	<?php }
                    	} ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
