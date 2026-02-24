<?php
include '../config.php';

$admin= new Admin();
$id=$_GET['id'];

$hello=$admin->cud("DELETE FROM `item` WHERE `p_id`=".$id,"Deleted");

echo "<script>window.location='../admin/html/updateitem.php';</script>";
  
 ?>
