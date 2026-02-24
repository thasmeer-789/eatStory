<?php include 'config.php';
$admin= new Admin(); ?><!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:35:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout ||  EAT STORY </title>
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
                                <h2 class="bradcaump-title">Checkout</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">Checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
         <section class="htc__checkout bg--white section-padding--lg">
            <!-- Checkout Section Start-->
            <div class="checkout-section">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-6 col-12 mb-30">
                               
                                <!-- Checkout Accordion Start -->
                                <div id="checkout-accordion">
                                   
                                    <!-- Checkout Method -->
                                
                                    
                                    <!-- Billing Method -->
                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">1. billing informatioon</a>
                                        <div id="billing-method" class="collapse">

                                            <div class="accordion-body billing-method fix">

                                                <form action="controller/shipping_details.php" method="POST" class="billing-form checkout-form">
                                                    <div class="row">
                                                    
                                                        <div class="col-md-6 col-12 mb--20">                                 
                                                            <input type="text" name="name" required placeholder="First Name">
                                                        </div>
                                                        <div class="col-md-6 col-12 mb--20">                             
                                                            <input type="text" name="lname" required placeholder="Last Name">
                                                        </div>
                                                       
                                                        <div class="col-12 mb--20">
                                                            <!-- <input name="saddress" required  placeholder="Street address" type="text"> -->
                                                            <div class="form-group">
    <label for="saddress">Select Address</label>
    <select name="saddress" id="saddress" class="form-control" required>
        <option value="">Select a Address</option>
        <?php 
        try {
            $stmt = $admin->ret("SELECT * FROM `place`");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo htmlspecialchars($row['p_id']); ?>">
                    <?php echo htmlspecialchars($row['p_locationname']); ?>
                </option>
            <?php }
        } catch (Exception $e) {
            echo "<option value=''>Error fetching places</option>";
        }
        ?>
    </select>
</div>
                                                        </div>
                                                        <div class="col-12 mb--20">
                                                            <input name="app1" required  placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                        </div>
                                                        <div class="col-12 mb--20">
                                                            <input name="town" required  placeholder="Town / City" type="text">
                                                        </div>
                                                        
                                                        <div class="col-md-6 col-12 mb--20">                                 
                                                            <input name="zip" required  placeholder="Postcode / Zip" type="text">
                                                        </div>
                                                        <div class="col-md-6 col-12">                                 
                                                            <input type="email" name="email" required  placeholder="Email Address">
                                                        </div>
                                                        
                                                        <div class="col-md-6 col-12">                                   
                                                            <input placeholder="Phone Number" name="phone" required  type="text">
                                                            <input placeholder="Phone Number" name="gt" required  value="<?php echo $_GET['gt'] ?>" type="hidden">
                                                            <input placeholder="Phone Number" name="oid1" required  value="<?php echo $_GET['oid'] ?>" type="hidden">


                                                        </div> 
                                                        <div class="col-md-6 col-12" style="margin-top:10px">                                 
                                                            <textarea type="text" name="additional" required  placeholder="additional information"></textarea>
                                                        </div>                         
                                                    </div>
                                              
                                             
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Shipping Method -->
                                 
                                    
                                    <!-- Payment Method -->


                                    <div class="single-accordion">
                                        <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">2. Payment method</a>
                                        <div id="payment-method" class="collapse">
                                            <div class="accordion-body payment-method fix">
                                               
                                                <ul class="payment-method-list">
                                                <input type="radio" id="html" name="pm" value="COD">
                                                    <label for="html">Cash on delivary</label><br>
                                                    <input type="radio" onclick="myFunction2()" id="css" name="pm" value="UPI">
                                                    <label for="css">UPI</label><br>
                                                    <!-- <input type="radio" onclick="myFunction1()" id="javascript" name="pm" value="CP">
                                                      <label for="javascript">Card pay</label> -->
                                                </ul>
                                                <div id="myDIV1">
                                                
                                                    <!-- <div class="row">
                                                        <div class="input-box col-12 mb--20">
                                                            <label for="card-name">Name on Card *</label>
                                                            <input type="text" id="card-name" class="form-control" />
                                                        </div>
                                                        <div class="input-box col-12 mb--20">
                                                            <label>Credit Card Type</label>
                                                            <select class="form-control" >
                                                                <option>Please Select</option>
                                                                <option>Credit Card Type 1</option>
                                                                <option>Credit Card Type 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-box col-12 mb--20">
                                                            <label for="card-number">Credit Card Number *</label>
                                                            <input type="text" id="card-number" class="form-control" />
                                                        </div>
                                                        <div class="input-box col-12">
                                                            <div class="row">
                                                                <div class="input-box col-12">
                                                                    <label>Expiration Date</label>
                                                                </div>
                                                                <div class="input-box col-md-6 col-12 mb--20">
                                                                    <select class="form-control" >
                                                                        <option>Month</option>
                                                                        <option>Jan</option>
                                                                        <option>Feb</option>
                                                                        <option>Mar</option>
                                                                        <option>Apr</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>Jul</option>
                                                                        <option>Aug</option>
                                                                        <option>Sep</option>
                                                                        <option>Oct</option>
                                                                        <option>Nov</option>
                                                                        <option>Dec</option>
                                                                    </select>
                                                                </div>
                                                                <div class="input-box col-md-6 col-12 mb--20" >
                                                                    <select class="form-control" >
                                                                        <option>Year</option>
                                                                        <option>2015</option>
                                                                        <option>2016</option>
                                                                        <option>2017</option>
                                                                        <option>2018</option>
                                                                        <option>2019</option>
                                                                        <option>2020</option>
                                                                        <option>2021</option>
                                                                        <option>2022</option>
                                                                        <option>2023</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div> -->
                                                    </div>
                                                    <div id="myDIV2">
                                                    <div class="row">
                                                    <label for="card-name">Scan QR Code*</label>
                                                        <div class="input-box col-12 mb--20">
                                                           
                                                            <img src="image/qr.png" style="width:200px"><br>
                                                          <b> Total:</b><input type="text" id="card-name" value="<?php echo $_GET['gt'] ?>" readonly class="form-control" />
                                                         
                                                        </div>
                                                       
                                                        <div class="input-box col-12 mb--20">
                                                        
    </div>
   

    <div class="col-12 mb-3">
        <input name="tranid" required placeholder="Enter Transaction ID" type="text" class="form-control" style="width: 100%; border-radius: 5px;"/>
    </div>
                                                       
                                                    </div>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>


<div id="myDIV2">

                                </div><!-- Checkout Accordion Start -->
                            </div>
                            
                            <!-- Order Details -->
                            <div class="col-lg-6 col-12 mb-30">
                               
                                <div class="order-details-wrapper">
                                    <h2>your order</h2>
                                    <div class="order-details">
                                 
                                            <ul>
                                             
                                           


                                                <li><p class="strong">product</p><p class="strong">total</p></li>
                                                <?php 
                                                $t=0;
                                                $id=$_SESSION['id'];
                                            $stmt4=$admin->ret("SELECT * FROM `order_detail` INNER JOIN  `dish` ON dish.d_id=order_detail.i_id where order_detail.c_id='$id'");
                                             while($row4=$stmt4->fetch(PDO::FETCH_ASSOC)){?>
                                                <li><p><?php echo $row4['d_name'] ?></p><p><?php echo $t=$row4['d_price']*$row4['o_qty']?></p></li>
                                                
                                                <?php }   ?>
                                               
                                                <li><p class="strong">order total</p><p class="strong">Rs.<?php echo $_GET['gt'] ?></p></li>
                                             
                                                <li><button type="submit" class="food__btn">place order</button></li>

                                                
                                            </ul>
                                           
                                    </div>
                                </div>
                                
                            </div>
                        
                    </div>
                </div>
                </form>
            </div><!-- Checkout Section End-->             
         </section>   
        <!-- Start Footer Area -->
     <?php include 'footer.php' ?>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <?php include 'profile.php' ?>
        <script> 

      function myFunction1() {

        document.getElementById("myDIV1").style.display = "block";

        document.getElementById("myDIV2").style.display = "none";

       

    }

    function myFunction2() {

      document.getElementById("myDIV1").style.display = "none";

      document.getElementById("myDIV2").style.display = "block";

      

    }
    </script>
        <!-- //Login Form -->
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

<!-- Mirrored from demo.hasthemes.com/aahar-preview/aahar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 08:35:07 GMT -->
</html>
