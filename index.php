<?php
include "config/koneksi.php";
session_start();

if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "<h3 style='text-align: center;'>Login gagal! email atau password salah!</h3>";
	}else if($_GET['pesan'] == "logout"){
		echo "<h3 style='text-align: center;'>Anda telah berhasil logout</h3>";
	}else if($_GET['pesan'] == "belum_login"){
		echo "<h3 style='text-align: center;'>Anda harus login untuk mengakses halaman home</h3>";
	}
}

//  if (isset($_POST['login'])){
//  	$username = $_POST['username'];
//  	$password = $_POST['password'];
//  	$sql = mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '$username' and password = '$password'");
// 	$cek = mysqli_num_rows($sql);
// 	$f = mysqli_fetch_array($sql);
// 	if($cek>0){
// 		echo "<script>alert('Selamat Datang');document.location.href='home/index.html'</script>";
// 	}else {
// 		echo "<script>alert('Username Atau Password Salah !');document.location.href=''</script>";
// 	}
//  }


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
			<form action="cek_login.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" required="email"  class="input">
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
				<a href="forgot.php">Forgot Password?</a>
				<a href="signup.php">Sign up here !</a>
            	<input type="submit" name="login" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
