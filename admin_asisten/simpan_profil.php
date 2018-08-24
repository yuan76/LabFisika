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

$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$status=$_POST['status'];
$gambar=$_POST['gambar']; 

$fileName=$_FILES['gambar']['name'];
$fileSize=$_FILES['gambar']['size'];
$fileError=$_FILES['gambar']['error'];

if (!empty($nama) && !empty($status)){
	if($fileSize > 0 || $fileError == 0){
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'../gambar/'.$fileName);
	
	$isi=mysql_query("insert into profil (nama,jurusan,status,gambar) values ('$nama','$jurusan','$status','gambar/$fileName')");
	if($isi){
		echo "<script> alert('Data Berhasil Di simpan');
		window.location='index.php?page=tambah_profil'</script>";}
	}else {
		echo "<script> alert('Foto Belum Dimasukkan');
		window.location='index.php?page=tambah_profil'</script>"; }
}else {
		echo "<script> alert('Data Kurang Lengkap');
		window.location='index.php?page=tambah_profil'</script>"; 
}
?>
</body>
</html>
