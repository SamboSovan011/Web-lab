<?php
    session_start();
    if((isset($_SESSION['logged'])) and ($_SESSION['logged'] == "yes")){
        header("location:index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="background">
	<div class="container vertical-center">
		<div class="col-sm-6 offset-sm-3">
			<div class="container px-lg-5">
				<div class="row mx-lg-n5">
					<div class="col py-3 px-lg-5 border | backgroundOpCol1 ">
						<div class="box">
							<img src="images/niptict.jpg" class="rounded | mx-auto d-block" alt="niptict logo" width="100" height="100"> 
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col py-3 px-lg-5 border | backgroundOpCol2">
						<form action="register_backend.php" method="POST">
							<div class="text-center">
								<p class="text-muted">
									Sign up an account
								</p>
							</div>
						<div class="form-group">
							<label for="exampleInputUsername">Username</label>
							<input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Please enter username" required>
							
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Please enter password" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Confirm Password</label>
							<input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2" placeholder="Please re-enter password" required>
							<span id='message'></span>
						</div>
						<div class="form-group">
							<label class="pr-5">Gender</label>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" id="customRadioInline1" value = "male" name="gender" class="custom-control-input" required>
							  <label class="custom-control-label" for="customRadioInline1">Male</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" id="customRadioInline2" value = "female" name="gender" class="custom-control-input">
							  <label class="custom-control-label" for="customRadioInline2">Female</label>
							</div>
						</div>
						<div class="form-group">
							<label class="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Please enter email" required>
						</div>
						<div class="form-check" style="margin-bottom: 20px">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
							<label class="form-check-label" for="exampleCheck1">I accept the Terms of Service</label>
							<small style="margin-left: 70px"><a href="login.php">Already have accounts?</a></small>
						</div>
							<button type="submit" class="btn btn-primary" >Done</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	  

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('#exampleInputPassword1, #exampleInputPassword2').on('keyup', function () {
		  if ($('#exampleInputPassword1').val() == $('#exampleInputPassword2').val()) {
		    $('#message').html('Matching').css('color', 'green');
		  } else 
		    $('#message').html('Not Matching').css('color', 'red');
		});
	</script>

</body>
</html>