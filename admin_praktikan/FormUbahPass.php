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

$b=mysql_query("select*from praktikan where npm='$a'"); 
while ($c=mysql_fetch_array($b)){
?>
<font face="Century Gothic, Chiller, Comic Sans MS">
<font size="+3"> Ubah Password </font>
<br />
<br />
<font size="+1">
<form method="post" action="UbahPass.php?id=<?php echo $a;?>">
<table align="center" cellpadding="5px" cellspacing="5px">
<tr> <td> Username </td> <td> : </td> <td> <input type="text" name="user" value="<?php echo $c['npm']?>" readonly=""/> </td> </tr>
<tr> <td> Password Lama </td> <td> : </td> <td> <input type="password" name="pl" value="<?php echo $c['pass_prak']?>" readonly=""/> </td> </tr>
<tr> <td> Password Baru </td> <td> : </td> <td> <input type="password" name="pb" /> </td> </tr>
<tr> <td> Ulangi Password </td> <td> : </td> <td> <input type="password" name="ulang" /> </td> </tr>
<tr> <td> <button> Ubah </button> </td> 
<td> <input type="hidden" name="id" value="<?php echo $c['npm']?>"/> </td></tr>
</table>
</form>
</font>
</font>
<?php
	}
?>
</body>
</html>
