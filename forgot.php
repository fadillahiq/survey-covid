<?php session_start();
error_reporting(0);
include("config/koneksi.php");
if(isset($_POST['submit'])) {
  $_SESSION['submit']='';
}

if(isset($_POST['change']))
{
 $email=$_POST['email'];
 $password=($_POST['password']);
 $query=mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE email='$email'");
 $num=mysqli_fetch_array($query);
 if($num>0)
 {
  mysqli_query($koneksi,"update tbl_user set password='$password' WHERE email='$email'");
  $msg="Password Changed Successfully";
}
else
{
  $errmsg="Invalid email";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
    function valid()
    {
      if(document.forgot.password.value!= document.forgot.confirmpassword.value)
      {
        alert("Password and Confirm Password Field do not match  !!");
        document.forgot.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
            
        <p style="padding-left:20%;"></p>
     
        <p style="color:green">
      </p>
			<form action="" name="forgot" method="post">
				<img src="img/avatar.svg">
                <h2 class="title">Reset</h2>
                <p style=" color:red;"><?php if($errmsg){
        echo htmlentities($errmsg);
      }?></p>
      <p style="color:green"><?php if($msg){
        echo htmlentities($msg);
      }?></p>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user-tie"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" class="input">
           		   </div>
                   </div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>New Password</h5>
           		   		<input type="password" id="password" name="password" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" id="confirmpassword" name="confirmpassword" class="input">
            	   </div>
                </div>
                
				<a href="index.php">Have Account ?</a>
            	<input type="submit" name="change" onclick="return valid();" class="btn" value="Reset">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>


        <!-- Essential javascripts for application to work-->
        <script src="login/js/jquery-3.2.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="login/js/plugins/pace.min.js"></script>

</body>
</html>