<?php
include '../config.php';

$admin= new Admin();
$id=$_GET['id'];

$hello=$admin->cud("DELETE FROM `cart` WHERE `c_id`=".$id,"Deleted");

echo "<script>window.location='../cart.php';</script>";
  
 ?>
