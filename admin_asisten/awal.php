<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
include ("../koneksi.php");

$query = "SELECT * FROM asisten WHERE user_asis='$user' AND pass_asis='$pass'";
$hasil = mysqli_query($conn, $query);
echo"<script>
		alert('Hallo');
		</script>";
if(mysqli_num_rows($hasil) == true)
{
	$member = mysqli_fetch_assoc($hasil);
	$_SESSION['id']= $member['id_asis'];
	$_SESSION['SESS_user'] = $member['user'];
	$_SESSION['SESS_pass'] = $member['pass'];
	echo"<script>window.location='index.php'</script>";
} else {
	echo "<script>
	alert('Username dan Password yang Anda Masukkan Salah oyy');
	window.location='loginbaru.php';
	</script>";
}
?>
</body>
</html>
