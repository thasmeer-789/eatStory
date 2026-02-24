<?php 

include '../config.php';


$admin=new Admin();

$name=$_POST['i_name'];
$description=$_POST['desc'];
$itemprice=$_POST['i_price'];
$quntity=$_POST['qty'];

$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);

$stmt=$admin->cud("INSERT INTO `item`(`i_name`, `desc`, `i_price`, `qty`, `image`) VALUES ('$name','$description','$itemprice','$quntity','$image')","saved");

echo "<script>alert('inserted');window.location='../admin/html/updateitem.php';</script>";


?>