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
$npm=$_POST['npm'];
$kelas=$_POST['kelas'];
$kelompok=$_POST['kelompok']; 
$shift=$_POST['shift']; 
$hari=$_POST['hari'];
$mod1=$_POST['mod1'];
$mod2=$_POST['mod2'];
$mod3=$_POST['mod3'];
$mod4=$_POST['mod4'];
$mod5=$_POST['mod5']; 
$mod6=$_POST['mod6'];
$mod7=$_POST['mod7'];
$mod8=$_POST['mod8'];
$nama=strtolower($nama);

if ((!empty($nama) && !empty($npm)) && (!empty($kelas) && !empty($kelompok))){		
	$isi=mysqli_query($conn,"insert into jadwal (nama,npm,kelas,kelompok,shift,hari,mod1,mod2,mod3,mod4,mod5,mod6,mod7,mod8) values ('$nama','$npm','$kelas','$kelompok','$shift','$hari','$mod1','$mod2','$mod3','$mod4','$mod5','$mod6','$mod7','$mod8')");
	if($isi){	
		echo "<script> alert('Data Berhasil Di simpan');
		window.location='index.php?page=tambah_jadwal'</script>"; 
	}else {
		echo "<script> alert('Data Gagal Di simpan');
		window.location='index.php?page=tambah_jadwal'</script>"; }
}else {
		echo "<script> alert('Data Kurang Lengkap');
		window.location='index.php?page=tambah_jadwal'</script>"; }

?>
</body>
</html>
