<?php

include"koneksi.php"; 
include"fungsi.php"; 


$email=$_POST['email'];
$password=md5($_POST['password']); 
$tampil=mysqli_query($koneksi, "select*from admin where email='$email' and password='$password'"); 
$jumlahdata=mysqli_num_rows($tampil);
$admin=mysqli_fetch_array($tampil);

if($jumlahdata>0) 
 {
	session_start(); 
	$_SESSION['id_admin']		=$admin['id_admin']; 
	$_SESSION['nama_lengkap']	=$admin['nama_lengkap'];
	$_SESSION['login']			=1;
	header('location:../chocosafin/ruangadmin.php');
 }

else
 {
 	msgbox("gagal login","./login.php");
 }

?>