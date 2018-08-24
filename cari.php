<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table border="0" width="80%" align="center">
<tr> <td align="center"> <font face="Century Gothic, Chiller, Comic Sans MS"> <font size="+3"> Jadwal Praktikum  </font> </font></td> </tr>
<tr> <td> <font size="+1"> Cari Jadwal : <select name="hari">
										<option> Senin </option> <option> Selasa </option> <option> Rabu </option>
										<option> Kamis </option> <option> Jumat </option> <option> Sabtu </option>
										</select> </font>
	<input type="submit" name="submit" value="Cari Hari" style="background-color:#D79C15"/> </td>
</tr>
</table>
</form>

<?php
include ("koneksi.php");
$hari=$_POST['hari'];
$liat=mysqli_query($conn, "select*from jadwal where hari like '$hari%'");
echo "<table border=0 align=center>
		<tr> <td align=left> <font face=Century Gothic, Chiller, Comic Sans MS> <font size=+2> Jadwal Hari $hari </font> </font></td> </tr>
	  </table>";
echo "<table border=1 align=center>
	<tr style=background-color:#FB3C6B;font-size:16px>
		<td rowspan=2 align=center width=75px> NPM </td>
		<td align=center rowspan=2 width=185px> Nama </td>
		<td rowspan=2 align=center width=45px> Kelas </td>
		<td rowspan=2 width=63px align=center> Kelompok </td>
		<td rowspan=2 align=center width=40px> Shift </td>
		<td colspan=8 align=center> Modul </td>
	</tr>
	<tr style=background-color:#FFFF00>
		<td align=center width=65px> Minggu 1 </td>
		<td align=center width=65px> Minggu 2 </td>
		<td align=center width=65px> Minggu 3 </td>
		<td align=center width=65px> Minggu 4 </td>
		<td align=center width=65px> Minggu 5 </td>
		<td align=center width=65px> Minggu 6 </td>
		<td align=center width=65px> Minggu 7 </td>
		<td align=center width=65px> Minggu 8 </td>
	</tr>";
while ($baris=mysqli_fetch_array($liat))
echo "<tr>
		<td align=center style=background-color:#2DF245> $baris[2] </td>
		<td align=center> $baris[1] </td>
		<td align=center style=background-color:#2DF245> $baris[3] </td>
		<td align=center> $baris[4] </td>
		<td align=center style=background-color:#2DF245> $baris[5] </td>
		<td align=center> $baris[7] </td>
		<td align=center style=background-color:#2DF245> $baris[8] </td>
		<td align=center> $baris[9] </td>
		<td align=center style=background-color:#2DF245> $baris[10] </td>
		<td align=center> $baris[11] </td>
		<td align=center style=background-color:#2DF245> $baris[12] </td>
		<td align=center> $baris[13] </td>
		<td align=center style=background-color:#2DF245> $baris[14] </td>
		</tr>";
?>
<?php echo "</table>"; ?>
<br />
</body>
</html>
