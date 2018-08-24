<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
$npm=$_POST['npm'];
$nama=$_POST['nama'];
$password=$_POST['password'];
$ulang=$_POST['ulang'];

if ($ulang == $password) {
	if ((!empty($npm) && !empty($nama)) && (!empty($password))){
		include ("../koneksi.php");
		$query = "INSERT INTO praktikan (npm, nama_prak, pass_prak) VALUES('$npm','$nama','$password')";
		$hasil = mysqli_query($conn, $query);
			if ($hasil) {
				echo "<script>alert('Data Berhasil DiSimpan..');
				window.location='index.php?page=tambah_prak'; </script>";
			} else {
				echo "<script> alert('Data Gagal DiSimpan.. Data NPM sudah ada..');
				window.location='index.php?page=tambah_prak'; </script>";
			}
/*
				window.close(); </script>"; }
*/
	} else {
		  echo "<script> alert('Data Kurang Lengkap');
		  window.close(); </script>";
		echo"<script>window.location='index.php?page=tambah_prak'</script>"; }
} else {
		  echo "<script> alert('Password Tidak Sama');
		  window.close(); </script>";
		echo"<script>window.location='index.php?page=tambah_prak'</script>"; }
?>
</body>
</html>
