<?php include 'config.php';
$admin= new Admin(); ?><!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:33:34 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>EATSTORY</title>
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
        <?php include 'header.php'; ?>
        <!-- End Header Area -->
        <!-- Start Slider Area -->
        <div class="slider__area slider--one">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <h2>EATSTORY</h2>
                                        <h1>food delivery & service</h1>
                                        <!-- <div class="slider__input">
                                            <input type="text" placeholder="Type Place, City.Division">
                                            <input class="res__search" type="text" placeholder="Restaurant">
                                            <div class="src__btn">
                                                <a href="#">Search</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="service__wrapper bg--white">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our service</p>
                                <h2 class="title__line">How it work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/1.png" alt="icon image">
                                    </div>
                                    <h2><a href="#">Choose restaurant</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/2.png" alt="icon image">
                                    </div>
                                    <h2><a href="#">Select, you love to eat</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/3.png" alt="icon image">
                                    </div>
                                    <h2><a href="#">Pickup or delivery</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Food Category -->
        
        <!-- End Food Category -->
        <!-- Start Special Menu -->
        <section class="fd__special__menu__area bg-image--3 section-pt--lg" style="margin-top:-300px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Restaurant with Special Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="special__food__menu mt--80">
                <div class="food__menu__prl bg-image--4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                               
                                <div class="fd__tab__content tab-content" id="nav-tabContent">
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php $stmt=$admin->ret("SELECT * FROM `dish` WHERE d_id%2=0");
                                                   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu.php">
                                                            <img src="admin1/controller/<?php echo $row['d_img'] ?>" style="height:105px;width:109px"alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu.php"></a><?php echo $row['d_name'] ?></h4>
                                                            <span class="menu__prize">Rs.<?php echo $row['d_price'] ?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <!-- <p>Food Type : Chicken Stack</p> -->
                                                            <div class="delivery__time__rating">
                                                                Description:<p><?php echo $row['d_designation'] ?></p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                               
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php $stmt=$admin->ret("SELECT * FROM `dish` WHERE d_id%2!=0");
                                       while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu.php">
                                                        <img src="admin1/controller/<?php echo $row['d_img'] ?>" style="height:105px;width:109px"alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                        <h4><a href="menu.php"></a><?php echo $row['d_name'] ?></h4>
                                                        <span class="menu__prize">Rs.<?php echo $row['d_price'] ?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                            Description:<p><?php echo $row['d_designation'] ?></p>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <!-- End Single Food -->
                                          
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                   
                                    <!-- End Single tab -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
        <!-- End Special Menu -->
  
        <!-- End Download App Area -->
        <!-- Start Testimonail Area -->
        <section class="fd__testimonial__area section-padding--lg bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                        <div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
                            <!-- Start Single Testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/testimonial/clint/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Mily Cyrus</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/testimonial/clint/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Mily Cyrus</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonail Area -->
        <!-- Start Blog Area -->
        
        <!-- End Blog Area -->
        <!-- Start Subscribe Area -->
        
        <!-- End Subscribe Area -->
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

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:33:51 GMT -->
</html>
