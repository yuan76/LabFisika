<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/tampilan.css">
<title> Laboratorium Fisika Dasar </title>
<script language="JavaScript" type="text/javascript">
	var d=new Date();
	var monthname=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	var TODAY = d.getDate() + " " + monthname[d.getMonth()] + " " + d.getFullYear();
</script>
</head>

<body>
<div id="canvas">
	<div id="header">

	</div>
	<div id="menu">
		<ul>
			<li class="utama"> <a href="index.php?page=lihat_berita"> Berita </a> </li>
			<li class="utama"> <a href="index.php?page=lihat_profil"> Profil </a> </li>
			<li class="utama"> <a href="index.php?page=lihat_jadwal"> Jadwal Praktik </a> </li>
			<li class="utama"> <a href=""> Login </a>
			<ul>
				<li class="baris"> <a href="admin_praktikan/login.php"> Login Praktikan </a> </li>
				<li class="baris"> <a href="admin_asisten/loginbaru.php"> Login Asisten </a> </li>
			</ul>
			</li>
			<li class="utama" style="float:right;"> <a href=""> Hari ini tanggal <script language="JavaScript" type="text/javascript"> document.write(TODAY); </script> </a> </li>
		</ul>
	</div>
	<div id="isi">
	<div id="dalam">
	<?php
		error_reporting(0);
		if($_GET['page']=='lihat_berita'){
		include "berita.php";
		}elseif($_GET['page']=='lihat_profil'){
		include "profil.php";
		}elseif($_GET['page']=='lihat_jadwal'){
		include "jadwal.php";
		}elseif($_GET['page']=='cari_jadwal'){
		include "cari.php";
		}elseif($_GET['page']=='readmore'){
		include "OneBerita.php";
		}else{
		include "berita.php";
		}
	?>
	</div>
	</div>
	<div id="footer">
		Copyright © Laboratorium Fisika Dasar <?php echo date("Y-m-01") ?> - Yuan
	</div>
</div>
</body>
</html>
