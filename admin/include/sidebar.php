<?php
	include('../connection.php');
	include('userdata.php');
	if(!($_SESSION['id']))
	{
		header('Location:'.$base_url.'/login.php');
	}
	$user_id = $_SESSION['id'];
	$sql = "SELECT * FROM admin_registrations WHERE id='$user_id'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)) {
		$authority = $row['authority'];
		$super_admin = $row['super_admin'];
		$user_image = $row['user_image'];
	}
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo $base_url; ?>/admin/images/profile/<?php echo $user_image; ?>" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p><?php echo $user_name; ?></p>	
			</div>
		</div>
		
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
				<a href="">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span> 
				</a>
				
			</li>
			
			<li class="treeview">
				<li><a href="<?php echo $base_url; ?>/admin/myaccount.php"><i class="fa fa-circle-o"></i> My Account</a></li>
			</li>
			<?php if($authority == '1' && $super_admin == '1') { ?>
				<li class="treeview">
					<li><a href="<?php echo $base_url; ?>/admin/user_management.php"><i class="fa fa-circle-o"></i> User Management</a></li>
				</li>
			<?php } ?>
			<li class="treeview">
				<a href="<?php echo $base_url; ?>/admin/main_menu.php">
					<i class="fa fa-files-o"></i>
					<span>Menu Management</span><i class="fa fa-angle-left pull-right"></i>            
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="<?php echo $base_url; ?>/admin/main_menu.php"><i class="fa fa-circle-o"></i> Main Menu</a></li>
					<li><a href="gallery.php"><i class="fa fa-circle-o"></i>Gallery</a></li>
				</ul>
			</li>
			
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>