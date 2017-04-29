<?php 
include('connection.php');
//echo "<pre>";
//print_r($_POST);
$gallary_name_id = $_POST['gallary_name_id'];

$image_name = $_FILES['gallary_image']['name'];
$tmp_name = $_FILES['gallary_image']['tmp_name'];
move_uploaded_file($tmp_name, 'images/gallary_images/'.$image_name);

$query = mysql_query("insert into gallary_images(gallary_image,gallary_name_id) values ('$image_name','$gallary_name_id')");

if($query){
//echo "sucess";
header('location:gallery.php');
}
else{
echo "<p>Insertion Failed </p>";
}

?>