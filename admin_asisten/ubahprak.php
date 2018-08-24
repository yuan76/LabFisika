<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0); 
$a=$_REQUEST['id'];
include ("../koneksi.php");

$npm=$_POST['npm'];
$nama=$_POST['nama'];

if (!empty($nama) && !empty($npm)){		
	$up_berita = mysql_query("update praktikan set npm='$npm',nama_prak='$nama' where npm='$a'"); 
	
	if($up_berita) {
	 echo "<script>
		alert('Data Berhasil Di Ubah');
		window.location='index.php?page=lihat_prak';
		</script>"; 
	}else {
		echo "<script> alert('Data Gagal Di Ubah');
		window.location='index.php?page=formprak&id=$a'</script>"; }
}else{
	 echo "<script>
		alert('Data Tidak Lengkap ..');
		window.location='index.php?page=formprak&id=$a';
		</script>";} 
?>
</body>
</html>