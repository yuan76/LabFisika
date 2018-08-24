<?php
$a=$_GET['id'];
error_reporting(0);
include ("../koneksi.php");
$sql="delete from nilai where id_nilai='$a'";
$query=mysql_query($sql);
if ($query)
	{
		echo"<script language='javascript'> alert ('Data Berhasil Di hapus');
			window.location='index.php?page=lihat_nilai';
			</script>";
	} else {
		echo"<script language='javascript'> alert ('Data Gagal Di hapus');
			window.location='index.php?page=lihat_nilai';
			</script>";
	}
?>