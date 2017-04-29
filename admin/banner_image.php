<?php
session_start();
if(!($_SESSION['id']))
{
	header("Location:http://localhost/trippink/login.php");
}
?>
<?php include('include/header.php'); ?>

     <?php include('include/sidebar.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Banner Image
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Banner Image</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
            

              <div class="box">
                <div class="box-header">
                  
                  <a href="add_banner_image.php" class="btn btn-block btn-primary" style="width: 150px;">Add Banner Image</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>                   
						<th>Banner Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
 
 <?php 
	include('connection.php');
	$sql = "SELECT * FROM banner_images";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
        $banner_image = $row['banner_image'];
		$banner_image_id = $row['banner_image_id'];
		
                     echo "<tr>
                        <td>$banner_image_id</td>              
						<td><img src='images/banner_images/$banner_image' style='width:50px;height:50px'></td>
                        <td>									
							<a style='background-color:#dd4b39;color:white;' href='delete_banner_image.php?banner_image_id=".$row['banner_image_id']."' class='btn btn-social-icon btn-google-plus' title='click here to delete'><i class='fa fa-fw fa-close'></i></a>                                 
						</td>
                           
                      </tr>";
					  } ?>
                   
                      
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    

   <?php include('include/footer.php'); ?>