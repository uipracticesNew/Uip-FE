<?php
	include ('connection.php');
		
	$sql = "DELETE FROM gallary_images WHERE gallary_image_id=".$_GET['gallary_image_id'];
	$row = mysql_query($sql);
	//echo "successfully deleted";
	header("location:gallery.php");
	
?>