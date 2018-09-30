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

$b=mysqli_query($conn,"select*from jadwal where id_jadwal='$a'"); 
$c=mysqli_fetch_array($b);
?>
<font face="Century Gothic, Chiller, Comic Sans MS">
<font size="+3"> Ubah Jadwal Praktik </font>
<br />
<br />
<font size="+1">
<form method="post" action="ubahjadwal.php" enctype="multipart/form-data">
<table align="center" cellpadding="4px">
<tr> <td> <a href="index.php?page=lihat_jadwal"> <= Batal </a> </td> </tr>
<tr> <td> Nama </td> <td> : </td> <td> <input type="text" name="nama" value="<?php echo $c['nama']?>" /> </td> </tr>
<tr> <td> NPM </td> <td> : </td> <td> <input type="text" name="npm" value="<?php echo $c['npm']?>"/> </td> </tr>
<tr> <td> Kelas </td> <td> : </td> <td> <input type="text" name="kelas" value="<?php echo $c['kelas']?>"/> </td> </tr>
<tr> <td> Kelompok </td> <td> : </td> <td> <input type="text" name="kelompok" value="<?php echo $c['kelompok']?>"/> </td> </tr>
<tr> <td> Shift </td> <td> : </td> <td> <input type="text" name="shift" value="<?php echo $c['shift']?>" /> </td> </tr>
<tr> <td> Hari </td> <td> : </td> <td> <input type="text" name="hari" value="<?php echo $c['hari']?>" /> </td> </tr>
<tr> <td> Modul 1 </td> <td> : </td> <td> <input type="text" name="mod1" value="<?php echo $c['mod1']?>"/> </td> </tr>
<tr> <td> Modul 2 </td> <td> : </td> <td> <input type="text" name="mod2" value="<?php echo $c['mod2']?>"/> </td> </tr>
<tr> <td> Modul 3 </td> <td> : </td> <td> <input type="text" name="mod3" value="<?php echo $c['mod3']?>"/> </td> </tr>
<tr> <td> Modul 4 </td> <td> : </td> <td> <input type="text" name="mod4" value="<?php echo $c['mod4']?>"/> </td> </tr>
<tr> <td> Modul 5 </td> <td> : </td> <td> <input type="text" name="mod5" value="<?php echo $c['mod5']?>" /> </td> </tr>
<tr> <td> Modul 6 </td> <td> : </td> <td> <input type="text" name="mod6" value="<?php echo $c['mod6']?>"/> </td> </tr>
<tr> <td> Modul 7 </td> <td> : </td> <td> <input type="text" name="mod7" value="<?php echo $c['mod7']?>"/> </td> </tr>
<tr> <td> Modul 8 </td> <td> : </td> <td> <input type="text" name="mod8" value="<?php echo $c['mod8']?>"/> </td> </tr>
<tr> <td> <button>Perbarui</button></td>
<td> <input type="hidden" name="id" value="<?php echo $c['id_jadwal']?>"/> </td> </tr>
</tr> 
</table>
</form>
</font> </font>
</body>
</html>
