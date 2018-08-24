<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<font face="Century Gothic, Chiller, Comic Sans MS" size="+3" color="#000000"> Data Nilai Praktik </font>
<?php
include ("../koneksi.php");

$liat=mysql_query("select*from nilai");
echo "<table border=1 align=center>
	<tr style=background-color:#F8ED23>
		<td align=center width=80px> NPM </td>
		<td align=center width=70px> Modul </td>
		<td align=center width=80px> Tanggal </td>
		<td align=center width=50px> LP </td>
		<td align=center width=50px> TP </td>
		<td align=center width=50px> K </td>
		<td align=center width=50px> LA </td>
		<td align=center width=50px> Total </td>
		<td align=center> Aksi </td>
	</tr>";
while ($baris=mysql_fetch_array($liat))
echo "<tr>
		<td align=center> $baris[1] </td>
		<td align=center> $baris[2] </td>
		<td align=center> $baris[3] </td>
		<td align=center> $baris[4] </td>
		<td align=center> $baris[5] </td>
		<td align=center> $baris[6] </td>
		<td align=center> $baris[7] </td>
		<td align=center> $baris[8] </td>
		<td> <a onclick=\"return confirm('Anda Yakin Nilai Modul $baris[2] dari NPM $baris[1] Akan Dihapus ?');\" href='del_nilai.php?id=$baris[0]'> <button>Hapus</button></a> <a href='index.php?page=ubah_nilai&id=$baris[0]'><button>Ubah</button> </a> </td>
		</tr>";
?>
<?php echo "</table>"; ?>
<br />
</body>
</html>
