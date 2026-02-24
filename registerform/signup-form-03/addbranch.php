<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Sign Up #3</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Register</h3>
              
              </div>
              <form action="../../controller/addbranch.php" method="post" enctype="multipart/form-data">
                <div class="form-group first">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" required >
                </div>
                <div class="form-group first">
                  <label for="phone no">Phone Number</label>
                  <input type="text" class="form-control" name="phone_num" id="Phone No" required  title="match requested pattern" pattern="[6-9]{1}[0-9]{9}" required>
                        
                </div>
                <div class="form-group first">
                  <label for="Email">Email Address</label>
                  <input type="email" class="form-control" name="email" id="Email" required>
                </div>
                <div class="form-group first">
                  <label for="Address">Address</label>
                  <input type="text" class="form-control" name="Address" id="Address" required>
                </div>
                <div class="form-group first">
                  <label for="Address">Address</label>
                  <img src="../../image/$image">
                  <input type="file" class="form-control" name="image" id="Address" required>
                </div>
               
                 <div class="d-sm-flex mb-5 align-items-center">
                    
            
                 
                </div>

                <input type="submit" value="Register" class="btn btn-block btn-primary">


              </form>
              <a href="login.php" >Aleready have an account?login here</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>