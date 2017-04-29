<?php
	include ('connection.php');
		
	$sql = "DELETE FROM banner_images WHERE banner_image_id=".$_GET['banner_image_id'];
	$row = mysql_query($sql);
	//echo "successfully deleted";
	header("location:banner_image.php");
	
?>