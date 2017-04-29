<?php
	include('../connection.php');
	include('userdata.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $user_name; ?></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.4 -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- jvectormap -->
	<link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
	<!-- DATA TABLES -->
	<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="skin-blue sidebar-mini">
		<div class="wrapper">

			<header class="main-header">

				<!-- Logo -->
				<a href="" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>A</b>D</span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b><?php echo $user_name; ?></b></span>
				</a>

				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar tog<p></p>gle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									
									<span class="hidden-xs"><?php echo $user_name; ?></span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									
									<!-- Menu Body -->
									
									<!-- Menu Footer-->
									<li class="user-footer">
										
										<div class="pull-right">
											<a href="<?php echo $base_url; ?>/admin/admin_logout.php" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->
							
						</ul>
					</div>

				</nav>
			</header>

			