<?php 

include '../config.php';


$admin=new Admin();


$name=$_POST['name'];
$phoneno=$_POST['phone_num'];
$Email=$_POST['email'];
$Address=$_POST['Address'];
$password=$_POST['password'];
$role=$_POST['role'];
     
$stmt1=$admin->ret("SELECT * FROM `user` where `email`='$Email'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
$num=$stmt1->rowCount();
if($num>0){

  echo "<script>alert('Email is already Exist');window.location='../registerform/signup-form-03/login.php'</script>";


}else{

  $stmt=$admin->cud("INSERT INTO `user`(`name`, `phone_no`, `address`, `email`, `password`,`role`) VALUES ('$name','$phoneno','$Address','$Email','$password','$role')","saved");


echo "<script>alert('registerd');window.location='../registerform/signup-form-03/login.php';</script>";
}
?>
