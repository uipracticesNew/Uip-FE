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

	<?php
		session_start();
		if(!empty($_SESSION['id']))
		{
			header("Location:admin/welcome.php");
		}
		
	?>
	<!-- login -->
	<div class="login">
		<div class="container">
			<div class="login-body">
				<div class="login-heading">
					<h1>Login</h1>
				</div>
				<div class="login-info">
					<?php
					if (isset($_POST['email']) && isset($_POST['password'])) {
						include('connection.php');
						$email = $_POST['email'];
						$password = $_POST['password'];

						$query = mysql_query("SELECT * FROM admin_registrations WHERE email='$email' AND password='$password'");
						$row = mysql_fetch_array($query);
						$email1 = $row['email'];
						$pass = $row['password'];
						$login_access = $row['login_access'];
						$id = $row['id'];
						if($email1 && $pass)
						{
							if ($login_access == 1) {
								$_SESSION['id'] = $id;
								header("Location:admin/welcome.php");
							} else { ?>
								<span style="color: red;">You have already registerd but you don't have permission, To get permission contact your admin.</span>
							<?php }
						}
						else
						{ ?>
						<span style="color: red;">Invalid Username or password</span>

						<?php }
					}
					?>
					<form action="login.php" method="POST">
						<input type="text" class="user" name="email" placeholder="Email" required="">
						<input type="password" name="password" class="lock" placeholder="Password">
						<div class="forgot-top-grids">
							<div class="forgot-grid">
								<ul>
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>Remember me</label>
									</li>
								</ul>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						<input type="submit" name="Sign In" value="Login">
						
					</form>
					<a style="float: right;" href="register.php">Register</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
		
</body>	
</html>