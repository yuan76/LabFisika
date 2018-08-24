<?php
$a=$_GET['id'];
error_reporting(0);
include ("../koneksi.php");
$sql="delete from praktikan where npm='$a'";
$query=mysql_query($sql);
if ($query)
	{
		echo"<script language='javascript'> alert ('Data Berhasil Di hapus');
			window.location='index.php?page=lihat_prak';
			</script>";
	} else {
		echo"<script language='javascript'> alert ('Data Gagal Di hapus');
			window.location='index.php?page=lihat_prak';
			</script>";
	}
?>