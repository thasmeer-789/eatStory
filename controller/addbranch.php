<?php 

include 'config.php';


$admin=new Admin();


$name=$_POST['name'];
$phoneno=$_POST['phone_num'];
$email=$_POST['email'];
$address=$_POST['Address'];

$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']); 
$stmt1=$admin->ret("SELECT * FROM `branch` where `b_email`='$email'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
$num=$stmt1->rowCount();
if($num>0){

  echo "<script>alert('Registered Branch');window.location='../admin/html/viewbranch.php'</script>";


}else{

  $stmt=$admin->cud("INSERT INTO `branch`(`b_name`, `b_email`, `b_phone`, `b_address`,`branchimg`) VALUES ('$name','$email','$phoneno','$address','$image')","saved");


echo "<script>alert('registerd');window.location='../admin/html/viewbranch.php';</script>";
}
?>
