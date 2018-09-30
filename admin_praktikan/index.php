<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/tampilan.css">
<title> Laboratorium Fisika Dasar </title>
</head>

<body>
<?php error_reporting(0);session_start();$id=$_SESSION['id']; ?>
<div id="canvas">
	<div id="header">

	</div>
	<div id="menu">
		<ul>
			<li class="utama"> <a href="index.php?page=lihat_nilai&id=<?php echo $id ;?>"> Lihat Nilai </a></li>
			<li class="utama"> <a href="index.php?page=ubah_pass&id=<?php echo $id ;?>"> Ubah Password </a> </li>
			<li class="utama"> <a href="index.php?page=logout"> Logout </a></li>
			<li class="utama" style="float:right;"><a href="">Selamat Datang <?php echo $_SESSION['SESS_nama'];$id=$_SESSION['id']; ?> </a> </li>
		</ul>
	</div>
	<div id="isi">
	<div id="dalam">
	<?php 
		error_reporting(0); 
		if($_GET['page']=='lihat_nilai'){
		include "nilai.php";
		}elseif($_GET['page']=='ubah_pass'){
		include "FormUbahPass.php";
		}elseif($_GET['page']=='logout'){
		include "logout.php";
		}else{
		include "home.php";
		}
	?>
	</div>
	</div>
	<div id="footer">
		Copyright &copy; Laboratorium Fisika Dasar 2017 - Yuanita Pratiwi
	</div> 
</div>
</body>
</html>
