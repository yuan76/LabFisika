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
$mod1=strtoupper($mod1);
$mod2=strtoupper($mod2);
$mod3=strtoupper($mod3);
$mod4=strtoupper($mod4);
$mod5=strtoupper($mod5);
$mod6=strtoupper($mod6);
$mod7=strtoupper($mod7);
$mod8=strtoupper($mod8);

if ((!empty($nama) && !empty($npm)) && (!empty($kelas) && !empty($kelompok))){		
	$up_jadwal = mysqli_query($conn,"update jadwal set nama='$nama',npm='$npm',kelas='$kelas',kelompok='$kelompok',shift='$shift',hari='$hari',mod1='$mod1',mod2='$mod2',mod3='$mod3',mod4='$mod4',mod5='$mod5',mod6='$mod6',mod7='$mod7',mod8='$mod8' where id_jadwal='$a'"); 
	
	if($up_jadwal) {
	 echo "<script>
		alert('Data Berhasil Di Ubah');
		window.location='index.php?page=lihat_jadwal';
		</script>"; 
	}else {
		echo "<script> alert('Data Gagal Di Ubah');
		window.location='index.php?page=ubah_jadwal&id=$a'</script>"; }
}else{
	 echo "<script>
		alert('Data Tidak Lengkap ..');
		window.location='index.php?page=ubah_jadwal&id=$a';
		</script>";} 
?>
</body>
</html>