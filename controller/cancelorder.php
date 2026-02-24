<?php 
include('../config.php');

$admin = new Admin();
if(isset($_GET['cancelbooking'])) 
{
  
  $booking_id=$_GET['cancelbooking'];

  $query=$admin -> cud("DELETE FROM `shipping` WHERE `sp_id`=".$booking_id,"deleted");
  echo "<script>alert('CANCELLED SUCCESSFULLY'); window.location.href='../track.php';</script>";
}
?>