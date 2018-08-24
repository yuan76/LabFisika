<?php
$a=$_GET['id'];
error_reporting(0);
include ("koneksi.php");
$sql="delete from komentar where idkomen='$a'";
$query=mysql_query($sql);
if ($query)
	{
		echo"<script language='javascript'> alert ('Komentar Berhasil Di hapus');
			window.location='index.php?page=readmore&id=$a';
			</script>";
	} else {
		echo"<script language='javascript'> alert ('Komentar Gagal Di hapus');
			window.location='index.php?page=readmore&id=$a';
			</script>";
	}
?>