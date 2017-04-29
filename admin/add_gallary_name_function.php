<?php 
include('connection.php');
//echo "<pre>";
//print_r($_POST);
$gallary_name = $_POST['gallary_name'];
$gallary_name_heading = $_POST['gallary_name_heading'];
$image_name = $_FILES['gallary_front_image']['name'];
$tmp_name = $_FILES['gallary_front_image']['tmp_name'];
move_uploaded_file($tmp_name, 'images/gallary_name_images/'.$image_name);

$query = mysql_query("insert into gallary_names(gallary_front_image,gallary_name,gallary_name_heading) values ('$image_name','$gallary_name','$gallary_name_heading')");

if($query){
//echo "sucess";
header('location:gallery_name.php');
}
else{
echo "<p>Insertion Failed </p>";
}

?>