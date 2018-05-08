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

	$query="INSERT INTO karyawan SET poto='$poto', sumber_poto='$sumber_poto', nama='nama', tgl_lahir='$tgl_lahir', alamat='$alamat', jeniskelamin='$jeniskelamin', jabatan='$jabatan', id_admin='$id_admin', now()";
 	move_uploaded_file($sumber_poto,"./images/".$poto); 
	mysqli_query($koneksi, $query);
 	if($query)
 	{
 	  msgbox("berhasil dibuat","./datakaryawan.php"); 
 	}
    else
    {
    msgbox("Gagal terdafar","./ruangadmin.php"); 
    }

?>