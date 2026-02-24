<?php
include '../config.php';

$admin= new Admin();
$id=$_GET['id'];

$hi=$admin->cud("DELETE FROM `user` WHERE `u_id`=".$id,"Deleted");

echo "<script>alert('Deleted');window.location='../admin/html/index.php';</script>";
  
 ?>
