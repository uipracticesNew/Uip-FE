<?php if(!($_SESSION['id']))
{
	header("Location:http://localhost/uipractice/login.php");
}
include('userdata.php');
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
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
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span>Left Menu</span><i class="fa fa-angle-left pull-right"></i>            
				</a>
				<ul class="treeview-menu">
					<li><a href="banner_image.php"><i class="fa fa-circle-o"></i> Banner Image</a></li>
					<li><a href="gallery.php"><i class="fa fa-circle-o"></i>Gallery</a></li>
					<li><a href="gallery_name.php"><i class="fa fa-circle-o"></i>Front Gallery</a></li>
					<!--li><a href="services.php"><i class="fa fa-circle-o"></i>Services</a></li-->
					
				</ul>
			</li>
			
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>