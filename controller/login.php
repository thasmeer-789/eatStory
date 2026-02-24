<?php

include '../config.php';

$admin=new Admin();

$Email=$_POST['email'];
$password=$_POST['password'];

  $stmt=$admin->ret("SELECT * FROM `user` where `email`='$Email' AND `password`='$password'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);

  $num=$stmt->rowCount();
   $id=$row['u_id'];
  if($num>0){

  	if($row['role']=='admin'){
  		$_SESSION['id']=$id;
 echo "<script>alert('login succesfuly');window.location='../admin/html/index.php'</script>";

  	}else{
  		$_SESSION['id']=$id;
  echo "<script>alert('login succesfuly');window.location='../index.php'</script>";

}
  }else{

echo "<script> alert('something went wrong');window.location='../registerform/signup-form-03/login.php'</script>";
  }

?>