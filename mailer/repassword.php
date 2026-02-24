
<!doctype html>
<html lang="en">
 
 



   
 <!DOCTYPE html>
<html>
<head>
	<title>newpassword</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" type="text/css" href="login/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet"> -->
</head>
<body style="background-color:#b2c9d3;">
	<div class="cont" style="background-image: url('admin/log/images/fy.jpg'); width:1900px;margin: 65px;height: 965px;">
		<form action="repassword_process.php" method="post">
	<center><div class="form sign-in">
			  <h1><center> <b><span class="multicolortext"></span></center></b></h1>
			 
			   <h2><center></center></h2>
			  <label>
				<span><p style="padding:10px;border=2px solid red;">Enter new password</p></span>
				<input type="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" style="height: 40px;width: 160px;" required />
          

			  </label>
			  <label>
				<span><p style="padding:10px;border=2px solid red;">Retype Password</p></span>
				<input type="Password" name="cpassword" style="height: 40px;width: 160px;">
			  </label>
			  <br><br>

			  	        <input type="submit" />
</form>
			  
<br>
<br>
			  <!-- <button class="submit" type="submit">Ok</button> -->
			  <!-- <button type="reset" class="reset" >Cancel </button> -->
			  </label>
			  

			 
			</div></center>
		</form>
	</div>
<script type="text/javascript" src="login/script.js"></script>

</body>
</html>