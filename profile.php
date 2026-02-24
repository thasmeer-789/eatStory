<div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Profile</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Update</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="#"><?php
                        $id=$_SESSION['id'];
                        $stmt2=$admin->ret("SELECT * FROM `user` WHERE `u_id`='$id'");
                        $row2=$stmt2->fetch(PDO::FETCH_ASSOC); ?>
                            
                            <div class="single-input">
                              <h4> Name:<b style="color:red"><?php echo $row2['name'] ?></b></h4>
                            </div>
                            <div class="single-input">
                            <h4> Phone:<b style="color:red"><?php echo $row2['phone_no'] ?></b></h4>
                            </div>
                            <div class="single-input">
                            <h4> Email:<b style="color:red"><?php echo $row2['email'] ?></b></h4>
                            </div>
                            <div class="single-input">
                            <h4> Address:<b style="color:red"><?php echo $row2['address'] ?></b></h4>
                            </div>
                            <div class="single-input">
                            <h4> Password:<b style="color:red"><?php echo $row2['password'] ?></b></h4>
                            </div>
                           
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="../controller/updateuser.php" method="POST">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="name" value="<?php echo $row2['name'] ?>" placeholder="User name" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" name="email" value="<?php echo $row2['email'] ?>" placeholder="Email address" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="phone_num" value="<?php echo $row2['phone_no'] ?>" placeholder="Password" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="Address" value="<?php echo $row2['address'] ?>" placeholder="Address" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="password" value="<?php echo $row2['password'] ?>" placeholder=" password" required>
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Update</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div>