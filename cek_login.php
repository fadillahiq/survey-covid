<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include "config/koneksi.php";
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$sql = mysqli_query($koneksi,"select * from tbl_user where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:home/");
}else{
	header("location:index.php?pesan=gagal");
}
?>