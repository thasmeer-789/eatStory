<?php
$admin = new Admin();

session_start();
if (!isset($_SESSION['id'])) {
    echo "<script>window.location='registerform/signup-form-03/login.php'</script>";
    exit();
}
$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <?php 
                            $id=$_SESSION['id'];
                            $grand_total=0;
                                    
                           
                           
                            $t_price=0; 
                            $stmt=$admin->ret("select * from dish INNER JOIN cart on cart.i_id=dish.d_id where cart.u_id='$id'");
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                     <?php
										   
                                           $t_price = $row['quantity']*$row['d_price'];
                                     
                                           $grand_total=$grand_total+$t_price;
                                           
                                           $qty=$row['qty'];
                                           $pid=$row['d_id'];
                                       
                                               
                                           ?>
                        <div class="cartbox__item">

                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="admin1/controller/<?php echo $row['d_img'] ?>" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                           
                                <h5><a href="product-details.html" class="product-name" style="width:20px;"><?php echo $row['d_name'] ?></a></h5>
                                <p>Qty: <span><?php echo $row['quantity'] ?></span></p>
                                <span class="price">Rs.<?php echo $t_price ?></span>
                              
                            </div>
                            <a href="controller/deletecart.php?id=<?php echo $row['c_id']?>">
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                            </a>
                           
                        </div><!-- //Cartbox Single Item -->
                     
                        <!-- Cartbox Single Item -->
                        <!-- //Cartbox Single Item -->
                    </div>
                    <?php } ?>
                    <div class="cartbox__total">
                        <ul>
                           
                            <li class="grandtotal">Total<span class="price">Rs.<?php echo $grand_total ?></span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.php"><span>View cart</span></a>
                      
                    </div>
                </div>
            </div>
        </div>
</body>
</html>