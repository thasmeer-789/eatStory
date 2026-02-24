<?php 

include '../config.php';


$admin=new Admin();

$id=$_SESSION['id'];
$name=$_POST['name'];
$phoneno=$_POST['phone_num'];
$Email=$_POST['email'];
$Address=$_POST['Address'];
$pass=$_POST['password'];
     
  $stmt=$admin->cud("UPDATE `user` SET `name`='$name',`phone_no`='$phoneno',`address`='$Address',`email`='$Email',`password`='$pass' WHERE `u_id`='$id'","saved");


echo "<script>alert('updated');window.location='../amexiqco/index.php';</script>";
?>
