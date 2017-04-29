<?php
session_start();
if(!($_SESSION['id']))
{
	header("Location:http://localhost/trippink/login.php");
}
?>
<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
	<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
			<h1>
				Add Gallery Name
            <!--small>Control panel</small-->
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Add Gallery name</li>
			</ol>
        </section>
		
		 <!-- Main content -->
        <section class="content">
			<div class="row">
			<!-- left column -->
				<div class="col-md-6" style="width: 1337px;">
					  <!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title"></h3>
						</div><!-- /.box-header -->
						<!-- form start -->
		 
						<form action="add_gallary_name_function.php" enctype="multipart/form-data" method="POST" type="file" name="form1">
							<div class="box-body">
								<div class="row">
									<div class="col-xs-6">
										<label for="exampleInputEmail1">Gallery Name</label>
										<input type="text" class="form-control" name="gallary_name" placeholder="Gallery Name">
									</div>
								</div>
							</div>
							<div class="box-body">
								<div class="row">
									<div class="col-xs-6">
										<label for="exampleInputEmail1">Gallery Image</label>
										
										<div id="imagePreview" style="display:none;">
										</div>
											<input type="file" id="image" name="gallary_front_image" required>
										
									</div>
								</div>
							</div>
							<div class="box-body">
								<div class="row">
									<div class="col-xs-6">
										<label for="exampleInputEmail1">Gallery Name Heading</label>
										<input type="text" class="form-control" name="gallary_name_heading" placeholder="Gallery Name Heading">
									</div>
								</div>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					
					</div><!-- /.box -->

				</div><!--/.col (left) -->
				<!-- right column --> 
			</div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
	

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>        
<style>
#imagePreview {
width: 100px;
height: 100px;
background-position:down;
background-size: cover;
-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
display: ;
}

</style>
<script>
$(function() {

$("#image").on("change", function()
{
var files = !!this.files ? this.files : [];
if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
if (/^image/.test( files[0].type)){ // only image file
var reader = new FileReader(); // instance of the FileReader
reader.readAsDataURL(files[0]); // read the local file

reader.onloadend = function(){ // set image data as background of div
$("#imagePreview").show();
$("#imagePreview").css("background-image", "url("+this.result+")");
}
}
});
});


</script>
<?php include('include/footer.php'); ?>	