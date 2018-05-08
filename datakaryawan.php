<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Chocosafin</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" href="images/a.png">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all"> 
<link href="//fonts.googleapis.com/css?family=Century+gothic" rel="stylesheet">

</head>
<body>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li><a href="inputdata.php">Input Data</a></li>
			<li><a href="datakaryawan.php">Data Karyawan</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</div>

<br>
<br>
<table align="center" width="80%" border="1" cellspacing="0" cellpadding="0">

<tr>
<td width="2%" bgcolor="#b0d5d0"><div align="center">NIK</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Poto</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Nama</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Tgl Lahir</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Alamat</td>
<td width="10%" bgcolor="#b0d5d0"><div align="center">Jenis Kelamin</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Jabatan</td>
<td colspan="2" bgcolor="#b0d5d0"><div align="center">Aksi</div></td>
</tr>

<?php
include "koneksi.php";
include "fungsi.php";
$n=1;
$query= "SELECT * FROM karyawan" ;
$sql = mysqli_query($koneksi, $query); 
while($karyawan = mysqli_fetch_array($sql))
{

    ?>

    <tr>
    	<td><div align="center"><?php echo $n; ?></td>
    	<td><div align="center"><?php echo "<img src=images/$karyawan[poto] width='200px'>"; ?></td>
    	<td><div align="center"><?php echo $karyawan['nama']; ?></td>
    	<td><div align="center"><?php echo $karyawan['tgl_lahir']; ?></td>
    	<td><div align="center"><?php echo $karyawan['alamat']; ?></td>
    	<td><div align="center"><?php echo $karyawan['jeniskelamin']; ?></td>
    	<td><div align="center"><?php echo $karyawan['jabatan']; ?></td>
    	<td width="18%"><div align="center"><?php echo "<a href=editdata.php?nik=$karyawan[nik]> <button> Edit </button></a>"; ?></td>
    	<td width="18%"><div align="center"><?php echo "<a href=hapusdata.php?nik=$karyawan[nik]> <button> Hapus </button></a>"; ?></td>
    </tr>

    <?php
    $n++; 
}
?>
</table>


</body>
</html>