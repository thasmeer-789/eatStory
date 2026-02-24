<?php 

include '../config.php';


$admin=new Admin();

$id=$_SESSION['id'];
$message=$_POST['message'];

$date=date('Y-m-d');


$stmt=$admin->cud("INSERT INTO `feedback`(`cust_id`, `message`,`date`) VALUES ('$id','$message','$date')","saved");

echo "<script>alert('Feed back send');window.location='../amexiqco/index.php'</script>";


?>