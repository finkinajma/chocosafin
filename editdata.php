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

<?php

include"koneksi.php";
$nik=$_GET['nik'];
$karyawan=mysqli_fetch_array(mysqli_query($koneksi,"select*from karyawan where nik='$nik'"));

?>

<br><br>
<h2>Edit Data Karyawan</h2>
<div class="main-w3"> 
	<form action="otweditdata.php" method="post" enctype="multipart/form-data" name="form1">
    <br>
    	<table>
         <tr><td>Poto</td>
		 <td> <img src="images/<?php echo $karyawan['poto']; ?>" width="70" height="50"><input type="file" name="poto"></td>
         <tr><td>Nama</td>
		 <td><input type="text" name="nama" value="<?php echo $karyawan['nama'] ?>"></td>
		 <tr><td>Tgl Lahir</td>
		 <td><label>
		 <td><input type="date" name="tgl_lahir" value="<?php echo $karyawan['tgl_lahir'] ?>"></td>
		 </label></td></tr>
         <tr><td>Alamat</td>
		 <td><input type="text" name="alamat" value="<?php echo $karyawan['alamat'] ?>"></td>
		 <tr><td>Jenis Kelamin</td>
          	 <td> <select name="jeniskelamin"> <option value="">-pilih</option><?php
			 $query=mysqli_query($koneksi,"select*from jeniskelamin");
			 while($jeniskelamin=mysqli_fetch_array($query))
			 {
		 	 if($jeniskelamin['jeniskelamin']==$jeniskelamin['jeniskelamin'])
			  {$status="selected";}
			 else {$status="";}
			 echo "<option value='$jeniskelamin[jeniskelamin]' $status>$jeniskelamin[jeniskelamin]</option>";
			 }
		 ?></select></td>
		 </td></tr>
         <tr><td>Jabatan</td>
         <td> <select name="jabatan"> <option value="">-pilih</option><?php
			$query=mysqli_query($koneksi,"select*from jabatan");
			while($jabatan=mysqli_fetch_array($query))
			{
			if($karyawan['jabatan']==$karyawan['jabatan'])
			{$status="selected";}
			else {$status="";}
			echo "<option value='$karyawan[jabatan]' $status>$karyawan[jabatan]</option>";
			}
		    ?></select></td>
		 
        </table>
         
	     <div class="btnn">
	          <button type="submit">Simpan</button>
	          <button type="submit" onClick="location=('ruangadmin.php')">Kembali</button>
        </div>	
     </div>
   </form>


</body>
</html>
