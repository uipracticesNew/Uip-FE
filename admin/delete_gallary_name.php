<?php
	include ('connection.php');
		
	$sql = "DELETE FROM gallary_names WHERE gallary_name_id=".$_GET['gallary_name_id'];
	$row = mysql_query($sql);
	//echo "successfully deleted";
	header("location:gallery_name.php");
	
?>