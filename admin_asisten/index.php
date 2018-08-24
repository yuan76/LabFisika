<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/tampilan.css">
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
			<li class="utama"> <a href=""> Tambah </a>
			<ul>
				<li class="baris"> <a href="index.php?page=tambah_prak"> Tambah Praktikan </a> </li>
				<li class="baris"> <a href="index.php?page=tambah_nilai"> Tambah Nilai </a> </li>
				<li class="baris"> <a href="index.php?page=tambah_jadwal"> Tambah Jadwal </a> </li>
				<li class="baris"> <a href="index.php?page=tambah_berita"> Tambah Berita </a> </li>
			</ul>
			</li>
			<li class="utama"> <a href=""> Lihat </a>
			<ul>
				<li class="baris"> <a href="index.php?page=lihat_prak"> Lihat Praktikan </a> </li>
				<li class="baris"> <a href="index.php?page=lihat_nilai"> Lihat Nilai </a> </li>
				<li class="baris"> <a href="index.php?page=lihat_jadwal"> Lihat Jadwal </a> </li>
				<li class="baris"> <a href="index.php?page=lihat_berita"> Lihat Berita </a> </li>
			</ul>
			</li>
			<?php error_reporting(0);session_start();echo $_SESSION['SESS_user'];$id=$_SESSION['id']; ?>
			<li class="utama"> <a href="index.php?page=ubah_pass&id=<?php echo $id ;?>"> Ubah Password </a> </li>
			<li class="utama"> <a href="index.php?page=logout"> Logout </a></li>
			<li class="utama" style="float:right;"> <a href=""> Hari ini tanggal <script language="JavaScript" type="text/javascript"> document.write(TODAY); </script> </a> </li>
		</ul>


	</div>
	<div id="isi">
	<div id="dalam">
	<?php
		error_reporting(0);
		if($_GET['page']=='tambah_prak'){
		include "tambah_prak.php";
		}elseif($_GET['page']=='tambah_jadwal'){
		include "tambah_jadwal.php";
		}elseif($_GET['page']=='tambah_berita'){
		include "tambah_berita.php";
		}elseif($_GET['page']=='tambah_nilai'){
		include "tambah_nilai.php";
		}elseif($_GET['page']=='lihat_prak'){
		include "lihat_prak.php";
		}elseif($_GET['page']=='lihat_jadwal'){
		include "lihat_jadwal.php";
		}elseif($_GET['page']=='lihat_berita'){
		include "lihat_berita.php";
		}elseif($_GET['page']=='lihat_nilai'){
		include "lihat_nilai.php";
		}elseif($_GET['page']=='ubah_pass'){
		include "FormUbahPass.php";
		}elseif($_GET['page']=='ubah_jadwal'){
		include "FormUbahJadwal.php";
		}elseif($_GET['page']=='ubah_berita'){
		include "FormUbahBerita.php";
		}elseif($_GET['page']=='ubah_nilai'){
		include "FormUbahNilai.php";
		}elseif($_GET['page']=='formprak'){
		include "FormUbahPrak.php";
		}elseif($_GET['page']=='logout'){
		include "logout.php";
		}else{
		include "tambah_prak.php";
		}
	?>
	</div>
	</div>
	<div id="footer">
		Copyright © Laboratorium Fisika Dasar <?php echo date("Y") ?> - Yuanita Pratiwi
	</div>
</div>
</body>
</html>
