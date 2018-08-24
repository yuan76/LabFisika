<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php error_reporting(0); ?>
<?php
include ("../koneksi.php");

$judul=$_POST['judul'];
$gambar=$_POST['gambar'];
$sub=$_POST['sub'];
$isi=$_POST['isi']; 


$fileName=$_FILES['gambar']['name'];
$fileSize=$_FILES['gambar']['size'];
$fileError=$_FILES['gambar']['error'];

if((!empty($judul)) && (!empty($sub) && !empty($isi))){
	if($fileSize > 0 || $fileError == 0){
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/'.$fileName);
	
	$isi=mysql_query("insert into berita (judul,gambar,sub_berita,isi_berita) values ('$judul','gambar/$fileName','$sub','$isi')");
	if($isi){
		echo "<script> alert('Data Berhasil Di simpan');
		window.location='index.php?page=tambah_berita'</script>";
	}
	}else {
		echo "<script> alert('Foto Belum Dimasukkan');
		window.location='index.php?page=tambah_berita'</script>"; 
	}
}else {
		echo "<script> alert('Data Kurang Lengkap');
		window.location='index.php?page=tambah_berita'</script>"; 
}
?>
</body>
</html>
