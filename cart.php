<?php include 'config.php';
$admin = new Admin();
if(!isset($_SESSION['id'])){
    echo"<script>window.location='registerform/signup-form-03/login.php'</script>";
}

?><!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:35:06 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Cart ||  Aahar Food Delivery Html5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="image/logo.jpg">
	<link rel="apple-touch-icon" href="image/logo.jpg">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
      <?php include 'header.php' ?>
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">cart page</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">cart page</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                   
                                        <tr class="title-top">
                                            <th class="product-thumbnail" style="color:black;">Image</th>
                                            <th class="product-name" style="color:black;">Product</th>
                                            <th class="product-price" style="color:black;">Price</th>
                                            <th class="product-quantity" style="color:black;">Quantity</th>
                                            <th class="product-subtotal" style="color:black;">Total</th>
                                            <th class="product-remove" style="color:black;">Remove</th>
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
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
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="admin1/controller/<?php echo $row['d_img'] ?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php echo $row['d_name'] ?></a></td>
                                            <td class="product-price"><span class="amount">Rs.<?php echo $row['d_price'] ?></span></td>
<!-- <td>
                                           <button class="minus-btn" onClick="dec(<?php echo $row['d_id'];?>)"><i class='bx bx-minus' onClick="dec(<?php echo $row['d_id'];?>)">-</i></button>
                                            <input type="text"   id="qty3"  min="1" max="300" name="quantity"  value="<?=$row['quantity']?>">
                                            <button class="plus-btn" onClick="incrrement(<?php echo $row['d_id'];?>)"><i class='bx bx-plus' onClick="incrrement(<?php echo $row['d_id'];?>)">+</i></button>
</td> -->
<td>
    <button class="minus-btn" onclick="decrement(<?php echo $row['d_id']; ?>)"><i class="bx bx-minus">-</i></button>
    <input type="text" id="qty-<?php echo $row['d_id']; ?>" name="quantity" value="<?= $row['quantity'] ?>" readonly>
    <button class="plus-btn" onclick="increment(<?php echo $row['d_id']; ?>)"><i class="bx bx-plus">+</i></button>
</td>

                                            <td class="product-subtotal">Rs.<?php echo $t_price ?></td>
                                            <td class="product-remove"><a href="controller/deletecart.php?id=<?php echo $row['c_id']?>">X</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                         
                            </div>
                        </form> 
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="menu.php">Continue Shop</a></li>
                                <li><a href="controller/order.php?gt=<?php echo $grand_total ?>&tprice=<?php echo $t_price ?>">Checkout</a></li>

                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                   
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>Rs.<?php echo  $grand_total ?></li>
                                   
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>Rs.<?php echo $grand_total ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <script>
    function increment(id) {
        let qtyInput = document.getElementById('qty-' + id);
        let qty = parseInt(qtyInput.value);
        qtyInput.value = qty + 1;

        window.location = 'controller/cart.php?qty=' + (qty + 1) + '&id=' + id + '&type=inc';
    }

    function decrement(id) {
        let qtyInput = document.getElementById('qty-' + id);
        let qty = parseInt(qtyInput.value);
        if (qty > 1) {
            qtyInput.value = qty - 1;
            window.location = 'controller/cart.php?qty=' + (qty - 1) + '&id=' + id;
        }
    }
</script>

        <!-- cart-main-area end -->
        <!-- Start Footer Area -->
      <?php include 'footer.php' ?>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <?php include 'profile.php' ?><!-- //Login Form -->
            <!-- Cartbox -->
      <?php include 'cartmodal.php' ?><!-- //Cartbox -->   
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:35:07 GMT -->
</html>
