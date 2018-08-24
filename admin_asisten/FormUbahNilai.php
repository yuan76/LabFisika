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

$b=mysql_query("select*from nilai where id_nilai='$a'"); 
$c=mysql_fetch_array($b);
?>
<font face="Century Gothic, Chiller, Comic Sans MS">
<font size="+3"> Ubah Nilai Praktik </font>
<br />
<br />
<font size="+1">
<form method="post" action="ubahNilai.php" enctype="multipart/form-data">
<table align="center" cellpadding="4px">
<tr> <td> <a href="index.php?page=lihat_nilai"> <= Batal </a> </td> </tr>
<tr> <td> NPM </td> <td> : </td> <td> <input type="text" name="npm" value="<?php echo $c['npm']?>" /> </td> </tr>
<tr> <td> Modul </td> <td> : </td> <td> <input type="text" name="modul" value="<?php echo $c['modul']?>" /> </td> </tr>
<tr> <td> Tanggal </td> <td> : </td> <td> <input type="text" name="tgl" value="<?php echo $c['tgl']?>"/> </td> </tr>
<tr> <td> LP </td> <td> : </td> <td> <input type="text" name="lap_pen" value="<?php echo $c['lap_pen']?>" id="lp" onkeyup="ubah();"/> </td> </tr>
<tr> <td> TP </td> <td> : </td> <td> <input type="text" name="tes_pen" value="<?php echo $c['tes_pen']?>" id="tp" onkeyup="ubah();"/> </td> </tr>
<tr> <td> K </td> <td> : </td> <td> <input type="text" name="ker" value="<?php echo $c['ker']?>" id="k" onkeyup="ubah();"/> </td> </tr>
<tr> <td> LA </td> <td> : </td> <td> <input type="text" name="lap_ak" value="<?php echo $c['lap_ak']?>" id="la" onkeyup="ubah();"/> </td> </tr>
<tr> <td> Total </td> <td> : </td> <td> <input type="text" name="total" value="<?php echo $c['nilai_tot']?>" id="total"/> </td> </tr>
<tr> <td> <button>Perbarui</button></td>
<td> <input type="hidden" name="id" value="<?php echo $c['id_nilai']?>"/> </td> </tr>
</tr> 
</table>
</form>
</font> </font>

<script language='javascript'>
function ubah(){
	var a=document.getElementById('lp').value;
	var b=document.getElementById('tp').value;
	var c=document.getElementById('k').value;
	var d=document.getElementById('la').value;
	var hasil=parseFloat(a)+parseFloat(b)+parseFloat(c)+parseFloat(d);
	if (!isNaN(hasil)){
		document.getElementById('total').value=hasil;
	}
}
</script>
</body>
</html>
