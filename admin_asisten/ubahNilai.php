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
$modul=$_POST['modul'];
$tgl=$_POST['tgl'];
$lap_pen=$_POST['lap_pen'];
$tes_pen=$_POST['tes_pen'];
$ker=$_POST['ker'];
$lap_ak=$_POST['lap_ak'];
$total=$_POST['total'];
$modul=strtoupper($modul);

if ((!empty($npm) && !empty($modul)) && (!empty($lap_ak) && !empty($total))){		
$up_nilai = mysqli_query($conn,"update nilai set npm='$npm',modul='$modul',tgl='$tgl',lap_pen='$lap_pen',tes_pen='$tes_pen',ker='$ker',lap_ak='$lap_ak',nilai_tot='$total' where id_nilai='$a'");
	
	if($up_nilai) {
	 echo "<script>
		alert('Data Berhasil Di Ubah');
		window.location='index.php?page=lihat_nilai';
		</script>"; 
	}else {
		echo "<script> alert('Data Gagal Di Ubah');
		window.location='index.php?page=ubah_nilai&id=$a'</script>"; }
}else{
	 echo "<script>
		alert('Data Tidak Lengkap..');
		window.location='index.php?page=ubah_nilai&id=$a';
		</script>";} 
?>
</body>
</html>