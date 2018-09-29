<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a=$_GET['id'];
include ("../koneksi.php");

$b=mysqli_query($conn,"select*from berita where id_berita='$a'"); 
$c=mysqli_fetch_array($b);
?>
<font face="Century Gothic, Chiller, Comic Sans MS">
<font size="+3"> Ubah Berita </font>
<br />
<br />
<font size="+1">
<form method="post" action="ubahBerita.php" enctype="multipart/form-data">
<table align="center" cellpadding="4px">
<tr> <td> <a href="index.php?page=lihat_berita"> <= Batal </a> </td> </tr>
<tr> <td> Judul </td> <td> : </td> <td> <input type="text" name="judul" value="<?php echo $c['judul']?>" /> </td> </tr>
<tr> <td> Gambar </td> <td> : </td> <td> <input type="file" name="gambar" /> </td> </tr>
<tr> <td> Sub Berita </td> <td> : </td> <td> <input type="text" name="sub" value="<?php echo $c['sub_berita']?>"/> </td> </tr>
<tr> <td> Isi Berita </td> <td> : </td> <td> <textarea name="isi"> <?php echo $c['isi_berita']?> </textarea> </td> </tr>
<tr> <td> <button>Perbarui</button></td>
<td> <input type="hidden" name="id" value="<?php echo $c['id_berita']?>"/> </td> </tr>
</tr> 
</table>
</form>
</font> </font>
</body>
</html>
