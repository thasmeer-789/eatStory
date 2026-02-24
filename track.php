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
	<title>eat</title>
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
                                <h2 class="bradcaump-title">Track order</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Track order</span>
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
                                            <th class="product-name"  style="color:black;" >Product</th>
                                            <th class="product-price" style="color:black;">Price</th>
                                            <th class="product-quantity" style="color:black;">Quantity</th>
                                            <th class="product-subtotal" style="color:black;">Total</th>
                                            <th class="product-subtotal" style="color:black;">Order id</th>

                                            <th class="product-subtotal" style="color:black;">Order status</th>
                                        
                                        </tr>
                                       
                                    </thead>
                                    <tbody>
                                    <?php
$id = $_SESSION['id'];
$grand_total = 0;

$stmt = $admin->ret("SELECT * FROM `shipping` INNER JOIN `order_detail` ON order_detail.od_id=shipping.o_id WHERE order_detail.c_id='$id'");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $idi = $row['i_id'];
    $stmt1 = $admin->ret("SELECT * FROM `dish` WHERE `d_id`='$idi'");
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    $total_price = $row['o_qty'] * $row1['d_price']; // Calculate total order amount

    // Fetch applicable coupons
    $stmt2 = $admin->ret("SELECT * FROM `coupons` WHERE `min_order_value` <= '$total_price' AND `status` = 1 ORDER BY `min_order_value` DESC LIMIT 1");
    $coupon = $stmt2->fetch(PDO::FETCH_ASSOC);
?>
<tr>
    <td class="product-thumbnail"><a href="#"><img src="admin1/controller/<?php echo $row1['d_img'] ?>" alt="product img" /></a></td>
    <td class="product-name"><a href="#"><?php echo $row1['d_name'] ?></a></td>
    <td class="product-price"><span class="amount">Rs.<?php echo $row1['d_price'] ?></span></td>
    <td class="product-quantity"><span class="amount"><?php echo $row['o_qty'] ?></span></td>
    <td class="product-subtotal">Rs.<?php echo $total_price; ?></td>
    <td class="product-price"><span class="amount"><?php echo $row['trans_id'] ?></span></td>

    <!-- Order Status -->
    <td class="product-subtotal">
        <?php
        if ($row['status'] == 0) {
            echo '<a type="button">Confirmed Order</a>';
        } elseif ($row['status'] == 1) {
            echo '<a type="button">Processing</a>';
        } elseif ($row['status'] == 2) {
            echo '<a type="button">Picked by delivery boy</a>';
        } else {
            echo '<a type="button">Food Delivered</a>';
        }
        ?>
    </td>
    <?php if($row['status']==0) { ?>

<td><a type="button" class="btn btn-danger btn-rounded btn-fw" href="controller/cancelorder.php?cancelbooking=<?php echo $row['sp_id'] ?>"
onclick="return confirm('Are you sure you want cancel?');">Cancel</a></td>
<?php } ?>
    <!-- Display Coupon if Available -->
    <!-- <td class="product-subtotal">
    <?php if ($row['status'] == 3 && $coupon) { ?>
        <span class="badge badge-success">Coupon Available: <?php echo $coupon['code']; ?> (<?php echo $coupon['discount_value']; ?>% off)</span>
    <?php } else { ?>
        <span class="badge badge-secondary">No Coupons Available</span>
    <?php } ?>
</td> -->
<td class="product-subtotal">
    <?php if ($row['status'] == 3) { ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal<?php echo $row['trans_id']; ?>">
            Give Feedback
        </button>
    <?php } ?>
<td class="product-subtotal">
    <?php if ($row['status'] == 3 && $coupon) { ?>
        <span class="badge badge-success">Coupon Available: <?php echo $coupon['code']; ?> (<?php echo $coupon['discount_value']; ?>% off)</span>
        <br>
        <a href="download_coupon.php?code=<?php echo $coupon['code']; ?>&discount=<?php echo $coupon['discount_value']; ?>" class="btn btn-primary btn-sm" download>Download Coupon</a>
    <?php } else { ?>
        <span class="badge badge-secondary">No Coupons Available</span>
    <?php } ?>
</td>


</tr>
<?php } ?>

                                    </tbody>
                                </table>
                         
                            </div>
                        </form> 
                        
                    </div>
                </div>
               
            </div>  
        </div>


        <?php 
$stmtFeedback = $admin->ret("SELECT * FROM `shipping` INNER JOIN `order_detail` ON order_detail.od_id=shipping.o_id WHERE order_detail.c_id='$id'");

while ($rowFeedback = $stmtFeedback->fetch(PDO::FETCH_ASSOC)) { 
?>
<!-- Feedback Modal -->
<div class="modal fade" id="feedbackModal<?php echo $rowFeedback['trans_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Submit Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="submit_feedback.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="order_id" value="<?php echo $rowFeedback['trans_id']; ?>">
                 
                    <div class="form-group">
                        <label for="feedback">Your Feedback</label>
                        <textarea class="form-control" name="feedback" required></textarea>
                    </div>
                    <!-- <input type="hidden" name="id" value="<?php echo $rowFeedback['idi']; ?>"> -->
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <select class="form-control" name="rating" required>
                            <option value="5">⭐️⭐️⭐️⭐️⭐️</option>
                            <option value="4">⭐️⭐️⭐️⭐️</option>
                            <option value="3">⭐️⭐️⭐️</option>
                            <option value="2">⭐️⭐️</option>
                            <option value="1">⭐️</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>
        <script type="text/javascript">
                                                function incrrement(id){
												

                                                    var effect = document.getElementById('qty3');
                                                    var qty=effect.value;
                                                  
                                                    
                                                    if(!isNaN(qty))effect.value;
                                                  
                                                    window.location='../controller/cart.php?qty='+qty+'&id='+id+'&type=inc';
                                                    return false;
                                                  
                                                }
                                                function dec(id){

                             
                                                    var effect = document.getElementById('qty3');
                                                   
                                                    var qty=effect.value;
                                                    if(parseInt(qty)<=1){

                                                        document.getElementById(qty3).value=1;
                                                        
                                                    }
                                                    // if(!isNaN(qty))effect.value--;
                                                       
                                                    window.location='../controller/cart.php?qty='+qty+'&id='+id;
                                                    return false;

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
     