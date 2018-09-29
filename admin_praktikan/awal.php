<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start();
include ("../koneksi.php");
$user = $_POST['user']; 
$pass = $_POST['pass'];

$query = "select * from praktikan where npm='$user' AND pass_prak='$pass'"; 
$hasil = mysqli_query($conn,$query)or die("Error"); 
if(mysqli_num_rows($hasil) > 0) 
{
	$member = mysqli_fetch_array($hasil);
	$_SESSION['id']= $member['npm'];
	//$_SESSION['SESS_user'] = $member['user'];
	$_SESSION['SESS_pass'] = $member['pass_prak'];
	$_SESSION['SESS_nama'] = $member['nama_prak'];
	echo"<script>window.location='index.php'</script>";

} else {
	echo "<script>
	alert('Username dan Password yang Anda Masukkan Salah..');
	window.location='login.php';
	</script>";
}
?> 

</body>
</html>
