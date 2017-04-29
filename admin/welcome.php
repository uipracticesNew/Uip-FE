<?php
session_start();
if(!($_SESSION['id']))
{
	header("Location:http://localhost/uipractice/login.php");
}
?>
<?php include('include/header.php'); ?>

     <?php include('include/sidebar.php'); ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Welcome To Uipractices           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Uipractices</a></li>
            
          </ol>
        </section>

        
      </div><!-- /.content-wrapper -->
    

   <?php include('include/footer.php'); ?>