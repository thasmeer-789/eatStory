<?php 
include '../config.php';
$admin=new Admin();
$email=$_POST['email'];
$as=$admin->ret("select * from manager where email='$email'");
$num=$as->rowCount();
if ($num>0) {

	echo"email is exist";
			$otp=rand(999999, 111111);
			echo $_SESSION['otp']=$otp;
			echo$_SESSION['supemail']=$email;
			header("location:mailer/phpmailer/index.php?email=$email");
}
else
{
	echo "<script>alert('email does not exist');window.location='login.php';</script>";
}

?>