<header class="htc__header" style="background-image: linear-gradient(to right, black, black,white)">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header" style="background-image: linear-gradient(to right, black, black,white)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="image/logo.jpg" Style="width:150px;border-radius:20px" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu" style="color:red;!important">
                                        <li class="drop"><a href="index.php">Home</a>
                                            
                                        </li>
                                        <li><a href="about.php">About</a></li>
                                        <li class="drop"><a href="menu.php">Menu</a>
                                           
                                        </li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="track.php">Track order</a></li>
                                       
                                       <?php  if(!isset($_SESSION['id'])){
    
?>
                                        <li><a href="registerform/signup-form-03/register.php">Register</a></li>

                                        <li><a href="registerform/signup-form-03/login.php">Login</a></li>
<?php }else{?>
                                        <li><a href="controller/logout.php">Logout</a></li>
<?php } ?>
                                        <!-- <li class="drop"><a href="blog-list.html">Blog</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-mesonry.html">Blog mesonry</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List with right sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="contact.html">Contact Page</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                    <?php 
                                    if(!isset($_SESSION['id'])){
                                     $id=0;
                                    }else{
                                        $id=$_SESSION['id'];
                                    }
                                    $stmt=$admin->ret("SELECT count(*) as total from cart WHERE u_id='$id'");
                              $row=$stmt->fetch(PDO::FETCH_ASSOC); ?>
                                        <span><?php echo $row['total']; ?></span>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>