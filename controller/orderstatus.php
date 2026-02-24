<!-- <?php 
define('DIR','');
include '../config.php';
$admin=new Admin();
$id=$_GET['id'];
$status=$_GET['c_status'];
$did=$_GET['did'];


$stmt=$admin->cud("UPDATE `shipping` set `status`='$status' WHERE shipping.sp_id='$id'","updated");
 echo "<script>alert('updated successfully');window.location='../admin1/mbooking.php'</script>";
?> -->

<?php 
define('DIR','');
include '../config.php';
$admin = new Admin();
$id = $_GET['id'];
$status = $_GET['c_status'];
$did = $_GET['did']; // This should be the `o_id`

// Update the shipping status
$stmt = $admin->cud("UPDATE `shipping` SET `status`='$status' WHERE `sp_id`='$id'", "updated");

// Update the order_detail status based on o_id
$stmt2 = $admin->cud("UPDATE `order_detail` SET `ostatus`='$status' WHERE `o_id`='$did'", "updated");

echo "<script>alert('Updated successfully');window.location='../admin1/mbooking.php'</script>";
?>
