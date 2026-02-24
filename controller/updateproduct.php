<?php 

include '../config.php';


$admin=new Admin();

$id=$_POST['id'];
$name=$_POST['i_name'];
$description=$_POST['desc'];
$itemprice=$_POST['i_price'];
$quntity=$_POST['qty'];
$image=$_POST['image'];

     
  $stmt=$admin->cud("UPDATE `item` SET `i_name`='$name',`desc`='$description',`i_price`='$itemprice',`qty`='$quntity',`image`='$image' WHERE `p_id`='$id'","saved");


echo "<script>alert('updated');window.location='../admin/html/updateitem.php';</script>";
?>
