<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<font face="Century Gothic, Chiller, Comic Sans MS">
<font size="+3"> Nilai Praktikum </font> </font>

<?php
$a=$_GET['id'];
include ("../koneksi.php");


$liat=mysql_query("select * from nilai where npm like '$a%'");
echo "<table border=0 align=center>
	<tr style=background-color:#FB3C6B;font-size:16px>
		<td align=center width=70px> Modul </td>
		<td align=center width=100px> Tanggal </td>
		<td align=center width=55px> LP </td>
		<td align=center width=55px> TP </td>
		<td align=center width=55px> K </td>
		<td align=center width=55px> LA </td>
		<td align=center width=55px> Total </td>
	</tr>";
while ($baris=mysql_fetch_array($liat))
echo "<tr>
		<td align=center> $baris[2] </td>
		<td align=center> $baris[3] </td>
		<td align=center> $baris[4] </td>
		<td align=center> $baris[5] </td>
		<td align=center> $baris[6] </td>
		<td align=center> $baris[7] </td>
		<td align=center> $baris[8] </td>
		</tr>";
?>
<?php echo "</table>"; ?>
</body>
</html>
