<?php

include '../config.php';
$control=new Controller();
$admin=new Admin();

// if(isset($_POST['submit']))
// {
  
	 $name=$_POST['name'];
	 
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $add1=$_POST['saddress'];
$town=$_POST['town'];
   $zip=$_POST['zip'];
  // $state=$_POST['state'];
   $app=$_POST['app1'];
$addi=$_POST['additional'];
    $gt=$_POST['gt'];
    $oid=$_POST['oid1'];
    (rand() . "<br>");
    (rand() . "<br>");
   $rand=$_POST['tranid'];
  //  $rand=rand(999,10000);

    $uid=$_SESSION['id']; 
    
    $p_method=$_POST['pm'];
    $date=date("Y-m-d");
    
    $stmt11=$admin->cud("INSERT INTO `payment`(`cust_id`, `o_id`, `amount`) VALUES ('$uid','$oid','$gt')","ss");


 $selects=$admin->ret("SELECT * FROM `shipping` where `o_id`='$oid'");
 $selects1=$selects->fetch(PDO::FETCH_ASSOC);

 $num = $selects->rowCount();

 {
if($num>0){

    $updatesdel=$admin->cud("UPDATE `shipping` SET `name`='$name',`add1`='$add1',`zip`='$zip',`phone`='$phone',`email`='$email',`p_method`='$p_method',`tot`='$gt',`date`='$date' WHERE `o_id`='$oid'","up");

}else{
    
    $sdel=$admin->cud("INSERT INTO `shipping` (`name`,`additionalinfo`,`add1`,  `zip`, `phone`, `email`, `p_method`, `tot`, `c_id`, `date`,  `o_id`, `trans_id`)
    VALUES('".$name."','".$addi."','".$add1."','".$zip."','".$phone."','".$email."','".$p_method."','".$gt."','".$uid."','".$date."','".$oid."','".$rand."')","saved");


}
 
}


 
  $qwe=$admin->ret("SELECT * FROM `cart` where `c_id`='$uid'");
  while($row=$qwe->fetch(PDO::FETCH_ASSOC)){
  $pid=$row['pid'];
  $cid=$row['cid'];
  $qty=$row['quantity'];

  $upda=$admin->ret("SELECT * FROM `item` where `p_id`='$pid'");
  $qtyrow=$upda->fetch(PDO::FETCH_ASSOC);
  $qtya=$qtyrow['stock'];



  $quantity=(int)$qtya-(int)$qty;
  
  
  $statement=$admin->cud("update `iten` SET `qty`='$quantity' WHERE `id`='$pid'","inserted");
  }




  $p=$admin->cud("DELETE FROM cart where c_id='$uid'","deleted");
  $o=$admin->cud("DELETE FROM `order` where c_id='$uid'","deleted");


    echo"<script>alert('Order done successfully');window.location='../track.php'</script>";


if($_POST['pm']=='UPP'){

  echo"<script>alert('payment');window.location='../index/payment.php?gt=$gt&oid=$oid&rand=$rand'</script>";


} else {


echo"<script>window.location='../index/thank.php'</script>";


}
?>
