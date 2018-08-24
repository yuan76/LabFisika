<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>Untitled Document</title>
</head>

<body>
<?php
include 'koneksi.php';

$liat=mysqli_query($conn, "select id_berita,judul,gambar,sub_berita,isi_berita from berita");

while ($baris=mysqli_fetch_array($liat)){

//while ($baris=$liat->fetch_array(MYSQLI_NUM)){
echo "<table width=95% align=center border=0>
	<tr>
		<td colspan=2> <h2> $baris[1] </h2> </td>
	</tr>
	<tr>
		<td width=30% align=center><img src=$baris[2] width=120 height=120 />  </td>
		<td> <p> $baris[3] </p>
		<p><a href=index.php?page=readmore&id=$baris[0]>Lanjut Baca......</a> </p> </td>
	</tr>";
}
/*
while ($baris=$liat->fetch_array(MYSQLI_ASSOC)){
echo "<table width=95% align=center border=0>
	<tr>
		<td colspan=2> <h2> $baris['judul'] </h2> </td>
	</tr>
	<tr>
		<td width=30% align=center><img src=$baris['gambar'] width=120 height=120 />  </td>
		<td> <p> $baris['sub_berita'] </p>
		<p><a href=index.php?page=readmore&id=$baris['id_berita']>Lanjut Baca......</a> </p> </td>
	</tr>";
}
*/
?>
<?php echo "</table>"; ?>
</body>
</html>
