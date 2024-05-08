

<?php
//include db connection
include 'config.php';

if(isset($_POST['upload'])){
   $NAME = $_POST['name'] ;
   $PRICE = $_POST['price'];
   $IMAGE = $_FILES['image'];
   print_r($_FILES['image']);
   $img_loc = $_FILES['image']['tmp_name'];
   $img_name = $_FILES['image']['name'];
   $img_des = "uploadimage/".$img_name;
   move_uploaded_file($img_loc,'uploadimage/'.$img_name);


   //insert data
 mysqli_query($con,"INSERT INTO `tblcard`(`id` ,`Name`, `Price`, `Image`) VALUES (NULL,'$NAME','$PRICE','$img_des')"); 
}

?> 