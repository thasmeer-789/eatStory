<?php  include 'config.php';
$admin=new Admin();
?><!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/menu-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:34:34 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Menu-Grid ||  Aahar Food Delivery Html5 Template</title>
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
        <div class="ht__bradcaump__area bg-image--17">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">menu  view</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">menu grid view</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area">
            <div class="container">
              <center><h1 >MENU</h1></center>  
                <div class="row">
                    <?php $stmt=$admin->ret("SELECT * FROM `dish`");
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                    <!-- Start Single Menu Item -->
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="menu__grid__item wow fadeInLeft">
                            <div class="menu__grid__thumb">
                                <a>
                                    <img src="admin1/controller/<?php echo $row['d_img'] ?>" alt="grid item images" style="height:250px">
                                </a>
                                <!-- <div class="grid__item__offer">
                                    <span>Special</span>
                                    <span>Offer</span>
                                </div> -->
                            </div>
                            <div class="menu__grid__inner">
                                <div class="menu__grid__details">
                                    <h2><a><?php echo $row['d_name'] ?></a></h2>
                                    <ul class="grid__prize__list">
                                     
                                        <li>Rs.<?php echo $row['d_price'] ?></li>
                                    </ul>
                                    <p><?php echo $row['d_designation'] ?></p>
                                </div>
                                <div class="grid__addto__cart__btn">
                                    <a href="controller/cart.php?qty=1&id=<?php echo $row['d_id'];?>">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Menu Item -->
                    <!-- Start Single Menu Item -->
                    <?php } ?>
                    <!-- End Single Menu Item -->
                </div>
              
            </div>
        </section>
        <!-- End Menu Grid Area -->
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

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/menu-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:34:36 GMT -->
</html>
