<?php
include '../config.php';

$admin= new Admin();
$id=$_GET['id'];

$hi=$admin->cud("DELETE FROM `employee` WHERE `e_id`=".$id,"Deleted");

echo "<script>alert('Deleted');window.location='../admin/html/viewemployee.php';</script>";
  
 ?>
