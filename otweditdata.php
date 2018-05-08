<?php

session_start();
include"koneksi.php"; 
include"fungsi.php"; 


$poto=$_FILES['poto']['name'];
$sumber_poto=$_FILES['poto']['tmp_name'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$jeniskelamin=$_POST['jeniskelamin'];
$jabatan=$_POST['jabatan'];
$id_admin=$_SESSION['id_admin'];

 	$nik=$_POST['nik'];
 	if(empty($poto)) 
 	{
 		$simpan=mysqli_query($koneksi,"update karyawan set nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', jeniskelamin='$jeniskelamin', jabatan='$jabatan' where nik='$nik'");
 	}
 	else
 	{
 		$karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select poto from karyawan where nik='$nik'"));
 		unlink('./images/'.$karyawan['poto']); 
 		$simpan=mysqli_query($koneksi,"update karyawan set poto='$poto' nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', jeniskelamin='$jeniskelamin', jabatan='$jabatan' where nik='$nik'");
 		move_uploaded_file($sumber_poto,"./images/".$poto);
 	}

 	if($simpan)
 	msgbox("berhasil dibuat","./datakaryawan.php"); 
    else
    msgbox("Gagal terdafar","./datakaryawan.php"); 

?>