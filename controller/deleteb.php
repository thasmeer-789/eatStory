<?php
include '../config.php';

$admin= new Admin();
$id=$_GET['id'];

$hi=$admin->cud("DELETE FROM `branch` WHERE `b_id`=".$id,"Deleted");

echo "<script>alert('Deleted');window.location='../admin/html/viewbranch.php';</script>";
  
 ?>
