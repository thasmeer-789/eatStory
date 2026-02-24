<?php

include '../config.php';

$admin=new Admin();


  echo  $uid=$_SESSION['id'];
   
    $gt=$_GET['gt'];
     
   


    $order=$admin->ret("SELECT * FROM `order` where `c_id`='$uid'");
    $f=$order->fetch(PDO::FETCH_ASSOC);
    $num=$order->rowCount();
    if($num>0){

      $upcart=$admin->cud("UPDATE `order` SET `tot_price`='$gt' where `c_id`='$uid'","update");


}else{

    
  $oid=$admin->Rcud("INSERT INTO `order`(`c_id`, `tot_price`) VALUES ('$uid','$gt')","insert");

    }
  
    


$stmt=$admin->ret("SELECT * FROM `cart` where `u_id`='$uid'");
while($row=$stmt->fetch(PDO::FETCH_ASSOC))

{


     
    
echo    $cartid=$row['c_id'];
    
    $qty=$row['quantity'];
    $pid=$row['i_id'];
    
    $stmt4=$admin->ret("SELECT * FROM `dish` where `d_id`='$pid'");
    $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
   $price=$row4['i_price'];
   
    $stmt1=$admin->ret("SELECT * FROM `order_detail` where `cart_id`='$cartid'");
    $row1=$stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    if($num>0){
        
         $stmt3=$admin->ret("SELECT * FROM `order` where `c_id`='$uid'");
         $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
         $oid=$row3['od_id'];
         $cartid;
         $stmt4=$admin->ret("SELECT * FROM `dish` where `d_id`='$pid'");
         $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
        $price=$row4['i_price'];
       $upcart=$admin->cud("UPDATE `order_detail` SET `od_id`='$oid',`i_id`='$pid',`o_qty`='$qty',`sub_amt`='$price',`tot_amt`='$gt',`c_id`='$uid',`cart_id`='$cartid' where `cart_id`='$cartid'","update");
       echo "<script>window.location='../checkout.php?gt=$gt&oid=$oid'</script>";

    }else{
      $stmt3=$admin->ret("SELECT * FROM `order` where `c_id`='$uid'");
      $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
      $oid=$row3['od_id'];
      $cartid;
      $stmt4=$admin->ret("SELECT * FROM `dish` where `d_id`='$pid'");
      $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
     $price=$row4['i_price'];
    echo  $ordins=$admin->cud("INSERT INTO `order_detail`(`c_id`, `cart_id`, `sub_amt`, `tot_amt`, `i_id`, `o_qty`, `od_id`) 
                                               VALUES ('$uid','$cartid','$price','$gt','$pid','$qty','$oid')","saved");
    
    echo "<script>window.location='../checkout.php?gt=$gt&oid=$oid'</script>";

 }
    
}




?>