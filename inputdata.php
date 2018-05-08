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

<br><br>
<h2>Input Data Karyawan</h2>
<div class="main-w3"> 
	<form action="otwinputdata.php" method="post" enctype="multipart/form-data" name="form1">
    <br>
    	<table>
         <tr><td>Poto</td>
         <td><input type="file" name="poto"></td></tr>
         <tr><td>Nama</td>
		 <td><input type="text" name="nama" placeholder="Nama" required=""></td></tr>		
		 <tr><td>Tgl Lahir</td>
		 <td><label>
		 <input type="date" name="tgl_lahir" required="">
		 </label></td></tr>
         <tr><td>Alamat</td>
		 <td><input type="text" name="alamat" placeholder="Alamat" required=""></td></tr>
		 <tr><td>Jenis Kelamin</td>
		 <td><select name="jeniskelamin">
          	 <option value=""></option>
          	 <option value="P">P</option>
          	 <option value="L">L</option>
         </select></td></tr>
         <tr><td>Jabatan</td>
		 <td><select name="jabatan">
          	 <option value=""></option>
          	 <option value="manager">Manager</option>
          	 <option value="marketing">Marketing</option>
          	 <option value="customer service">Customer Service</option>
         </select></td></tr>
        </table>
         
	     <div class="btnn">
	          <button type="submit" value="otwinputdata.php">Simpan</button>
	          <button type="submit" onClick="location=('ruangadmin.php')">Kembali</button>
        </div>	
     </div>
   </form>

</body>
</html>