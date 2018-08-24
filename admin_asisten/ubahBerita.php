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
	
	$up_berita = mysql_query("update berita set judul='$judul',gambar='gambar/$fileName',sub_berita='$sub',isi_berita='$isi' where id_berita='$a'"); 
	
	if($up_berita) {
	 echo "<script>
		alert('Data Berhasil Di Ubah');
		window.location='index.php?page=lihat_berita';
		</script>"; }
	}else {
		echo "<script> alert('Foto Belum Dimasukkan');
		window.location='index.php?page=ubah_berita&id=$a'</script>"; 
	}
}else{
	 echo "<script>
		alert('Data Tidak Lengkap ..');
		window.location='index.php?page=ubah_berita&id=$a';
		</script>";
} 
?>
</body>
</html>