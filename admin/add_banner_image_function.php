<?php 
include('connection.php');
echo "<pre>";
print_r($_FILES);exit;
$image_name = $_FILES['banner_image']['name'];
$tmp_name = $_FILES['banner_image']['tmp_name'];
move_uploaded_file($tmp_name, 'images/banner_images/'.$image_name);

$query = mysql_query("insert into banner_images(banner_image) values ('$image_name')");

if($query){
//echo "sucess";
header('location:banner_image.php');
}
else{
echo "<p>Insertion Failed </p>";
}

?>