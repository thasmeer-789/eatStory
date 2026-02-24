<?php 

include '../config.php';


$admin=new Admin();


$name=$_POST['name'];
$phoneno=$_POST['phone_num'];
$Email=$_POST['email'];
$salary=$_POST['salary'];
$des=$_POST['des'];
$j=$_POST['j'];
     
$stmt1=$admin->ret("SELECT * FROM `employee` where `e_email`='$Email'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
$num=$stmt1->rowCount();
if($num>0){

  echo "<script>alert('Registered Employee ');window.location='../admin/html/viewemployee.php'</script>";


}else{

  $stmt=$admin->cud("INSERT INTO `employee`(`e_name`, `e_phone`, `e_email`, `e_salary`, `e_designation`,`joiningdate`) VALUES ('$name','$phoneno','$Email','$salary','$des','$j')","saved");


echo "<script>alert('registerd');window.location='../admin/html/viewemployee.php';</script>";
}
?>
