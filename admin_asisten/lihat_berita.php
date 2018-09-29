<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<font face="Century Gothic, Chiller, Comic Sans MS" size="+3" color="#000000"> Data Berita </font>
<?php
include ("../koneksi.php");

$liat=mysqli_query($conn,"select*from berita");
echo "<table border=1 align=center width=80%>
	<tr style=background-color:#F8ED23>
		<td align=center width=120px> Judul </td>
		<td align=center width=120px> Gambar </td>
		<td align=center> Sub Berita </td>   
		<td align=center width=300px> Isi Berita </td>  
		<td align=center> Aksi </td>
	</tr>";
while ($baris=mysqli_fetch_array($liat))
echo "<tr>
		<td align=center> $baris[1] </td>
		<td align=center><img src='../$baris[2]' width=100 height=95 />  </td>
		<td align=center> $baris[3] </td>
		<td align=center> $baris[4] </td>
		<td> <a onclick=\"return confirm('Anda Yakin $baris[1] Akan Dihapus ?');\" href='del_berita.php?id=$baris[0]'><button>Hapus</button></a> <a href='index.php?page=ubah_berita&id=$baris[0]'><button>Ubah</button></a></td>
		</tr>";
?>
<?php echo "</table>"; ?>

</body>
</html>
