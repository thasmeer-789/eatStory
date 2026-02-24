<?php
include('../config.php');
 echo$otp=$_SESSION['otp'];
 echo $enterdotp=$_POST['otp'];
if($otp==$enterdotp)
{
	header("location: repassword.php");

}
else
{
 echo "<script>alert('Dose not Match');
    window.location='login.php';
 </script>";
}
?>