<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<font face="Century Gothic, Chiller, Comic Sans MS" size="+3" color="#000000"> Data Jadwal Praktik </font>
<?php
include ("../koneksi.php");

$liat=mysqli_query($conn,"select*from jadwal");
echo "<table border=1 align=center>
	<tr style=background-color:#F8ED23>
		<td rowspan=2 align=center width=70px> NPM </td>
		<td align=center rowspan=2> Nama </td>
		<td rowspan=2 align=center width=45px> Kelas </td>
		<td rowspan=2 width=63px align=center> Kelompok </td>
		<td rowspan=2 align=center width=55px> Hari </td>
		<td rowspan=2 align=center width=30px> Shift </td>
		<td colspan=8 align=center> Modul </td>
		<td rowspan=2 align=center width=60px> Aksi </td>
	</tr>
	<tr style=background-color:#FAFEB1>
		<td align=center> Minggu 1 </td>
		<td align=center> Minggu 2 </td>
		<td align=center> Minggu 3 </td>
		<td align=center> Minggu 4 </td>
		<td align=center> Minggu 5 </td>
		<td align=center> Minggu 6 </td>
		<td align=center> Minggu 7 </td>
		<td align=center> Minggu 8 </td>
	</tr>";
while ($baris=mysqli_fetch_array($liat))
echo "<tr>
		<td align=center> $baris[2] </td>
		<td align=center> $baris[1] </td>
		<td align=center> $baris[3] </td>
		<td align=center> $baris[4] </td>
		<td align=center> $baris[6] </td>
		<td align=center> $baris[5] </td>
		<td align=center> $baris[7] </td>
		<td align=center> $baris[8] </td>
		<td align=center> $baris[9] </td>
		<td align=center> $baris[10] </td>
		<td align=center> $baris[11] </td>
		<td align=center> $baris[12] </td>
		<td align=center> $baris[13] </td>
		<td align=center> $baris[14] </td>
		<td> <a onclick=\"return confirm('Anda Yakin Jadwal $baris[1] Akan Dihapus ?');\" href='del_jadwal.php?id=$baris[0]'> <button>Hapus</button></a> <a href='index.php?page=ubah_jadwal&id=$baris[0]'><button>Ubah</button> </a> </td>
		</tr>";
?>
<?php echo "</table>"; ?>
<br />
</body>
</html>
