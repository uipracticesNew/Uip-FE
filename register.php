<!DOCTYPE html>
<html>
<head>
<title>UIPractices</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="login/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="login/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="login/js/jquery-1.11.1.min.js"></script>
<script src="login/js/bootstrap.js"></script>
<script type="text/javascript" src="login/js/move-top.js"></script>
<script type="text/javascript" src="login/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	
<!--animate-->
<link href="login/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="login/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
</head>
<body>

	<!-- Register -->
	<div class="login">
		<div class="container">
			<div class="login-body">
				<div class="login-heading">
					<h1>Register</h1>
				</div>
				<div class="login-info">
					<div class="error-message"></div>
					<form action="register.php" method="POST">
						<input type="text" class="user" name="username" placeholder="User Name" required="">
						<input type="text" class="user" name="email" placeholder="Email" required="">
						<input type="password" name="password" class="lock" placeholder="Password">
						<input type="password" name="confirm_password" class="confirm_password" placeholder="Confirm Password">
						<input type="submit" name="Sign In" value="Register">
					</form>
					<a style="float: right;" href="login.php">Login</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
	<?php
		if (isset($_POST['username']) && isset($_POST['password'])) {
			include('connection.php');
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];

			$query = mysql_query("insert into admin_registrations(username, email, password, confirm_password) values ('$username', '$email', '$password', '$confirm_password')");
			if($query)
			{
				header("Location:login.php");
			}
		}
	?>

	
</body>	
</html>