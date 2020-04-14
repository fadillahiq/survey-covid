<?php
session_start();
include "config/koneksi.php";




 if (isset($_POST['signup'])){
 	
 	$sql = mysqli_query($koneksi, "INSERT INTO tbl_user VALUES ('id_user','$_POST[name]','$_POST[email]','$_POST[password]')");
	
	if($sql){
		echo "<script>alert('Berhasil Registrasi');document.location.href='index.php'</script>";
	}else {
		echo "<script>alert('Gagal Registrasi !');document.location.href=''</script>";
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
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
		<p style="padding-left:20%;"></p>
			<form action="" method="POST">
				<img src="img/avatar.svg">
                <h2 class="title">Sign Up</h2>
                
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user-tie"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama Lengkap</h5>
           		   		<input type="text" name="name" class="input">
           		   </div>
                   </div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" required="mail" name="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
                </div>
                
				<a href="index.php">Have Account ?</a>
            	<input type="submit" name="signup" class="btn" value="Signup">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
