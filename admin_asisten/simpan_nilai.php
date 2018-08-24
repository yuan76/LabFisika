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

$npm=$_POST['npm'];
$modul=$_POST['modul'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln']; 
$thn=$_POST['thn'];
$lp=$_POST['lp']; 
$tp=$_POST['tp'];
$k=$_POST['k'];
$la=$_POST['la'];
$total=$_POST['total'];

if (!empty($modul) && !empty($npm)){		
	$nilai=mysql_query("insert into nilai (npm,modul,tgl,lap_pen,tes_pen,ker,lap_ak,nilai_tot) values ('$npm','$modul','$tgl/$bln/$thn','$lp','$tp','$k','$la','$total')");
	if($nilai){	
		echo "<script> alert('Data Berhasil Di simpan');
		window.location='index.php?page=tambah_nilai'</script>"; 
	}else {
		echo "<script> alert('Data Gagal Di simpan');
		window.location='index.php?page=tambah_nilai'</script>"; }
}else {
		echo "<script> alert('Data Kurang Lengkap');
		window.location='index.php?page=tambah_nilai'</script>"; }

?>
</body>
</html>
