<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<font face="Century Gothic, Chiller, Comic Sans MS" size="+3" color="#000000"> Data Praktikan </font>
<?php
include ("../koneksi.php");

$liat=mysql_query("select*from praktikan");
echo "<table border=1 align=center>
	<tr style=background-color:#F8ED23>
		<td align=center width=75px> NPM </td>
		<td> Nama Praktikan </td>
		<td align=center> Password </td>   
		<td align=center> Aksi </td>
	</tr>";
while ($baris=mysql_fetch_array($liat))
echo "<tr>
		<td align=center> $baris[0] </td>
		<td align=center> $baris[1] </td>
		<td align=center> $baris[2] </td>
		<td> <a onclick=\"return confirm('Anda Yakin Praktikan $baris[1] Akan Dihapus ?');\" href='del_prak.php?id=$baris[0]'> <button>Hapus</button></a> <a href='index.php?page=formprak&id=$baris[0]'><button>Ubah</button></a></td>
		</tr>";
?>
<?php echo "</table>"; ?>
<br />
</body>
</html>
