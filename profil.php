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

$liat=mysqli_query($conn, "select id_profil,nama,jurusan,status,gambar from profil");
echo "<table border=0 align=center width=80%>
	<tr>
	<td align=center colspan=2>
	<font face=Century Gothic, Chiller, Comic Sans MS>
	<font size=+3> Profil Laboratorium Fisika Dasar </font>
	</font>
	</td>
	</tr>
	<tr> <td> </td> </tr>";
while ($baris=mysqli_fetch_array($liat)){
echo "<tr>
		<td width=25% align=center> <img src=$baris[4] width=120 height=165 /> </td>
		<td>
			<p> <b> $baris[3] </b> </p>
			<p> $baris[1] </p>
			<p> $baris[2] </p>
		</td>
	</tr>";
}
?>
<?php echo "</table>"; ?>
</body>
</html>
