<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);  
$a=$_GET['id'];
include ("../koneksi.php");

$user=$_POST['user'];
$pl=$_POST['pl'];
$pb=$_POST['pb'];
$ulang=$_POST['ulang'];

if (!empty($ulang) || !empty($pb)) {	
if ($ulang == $pb) {
$up_pass = mysql_query("update asisten set pass_asis='$pb' where id_asis='$a'");   
	if($up_pass) {
		echo "<script> 
		alert('Password Berhasil Di Ubah');
		window.location='index.php?page=ubah_pass&id=$a';
		</script>";
	}else{
		echo "<script>
		alert('Password Gagal Di Ubah');
		window.location='index.php?page=ubah_pass&id=$a';
		</script>";}
} else {  
		echo "<script> alert('Password Tidak Sama');
		window.close(); </script>";
		echo"<script>window.location='index.php?page=ubah_pass&id=$a'</script>"; }
} else {  
		echo "<script> alert('Password Tidak Boleh Kosong');
		window.close(); </script>";
		echo"<script>window.location='index.php?page=ubah_pass&id=$a'</script>"; }
?>
</body>
</html>
