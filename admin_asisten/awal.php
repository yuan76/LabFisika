<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include "../koneksi.php";
$user = $_POST['user'];
$pass = $_POST['pass'];

$hasil = mysqli_query($conn, "SELECT * FROM asisten WHERE user_asis='$user' AND pass_asis='$pass';");
/*
echo"<script>
		alert('Hallo');
		</script>";
*/		
if(mysqli_num_rows($hasil) > 0)
{
	//echo "adaaa";
	
	$member = mysqli_fetch_array($hasil);
	$_SESSION['id']= $member['id_asis'];
	$_SESSION['SESS_user'] = $member['user_asis'];
	$_SESSION['SESS_pass'] = $member['pass_asis'];
	echo"<script>window.location='index.php'</script>";
	
} else {
	//echo "ga adaa";
	
	echo "<script>
	alert('Username dan Password yang Anda Masukkan Salah');
	window.location='loginbaru.php';
	</script>";
	
}
?>
</body>
</html>
