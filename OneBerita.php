<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Untitled Document</title>
</head>


<body>
<?php
$a=$_GET['id'];
include ("koneksi.php");

$b=mysqli_query($conn, "select*from berita where id_berita='$a'"); 
$c=mysqli_fetch_array($b);
?>
<form method="post">
<table border="0" width="1000px" align="center">
<tr> <td> <h2> <?php echo $c['judul'];?> </h2> </td> </tr>
<tr> <td align=center> <img src=<?php echo $c['gambar'];?> width=200 height=210 /> </td> </tr>
<tr> <td> </td> </tr>
<tr> <td> </td> </tr>
<tr> <td align="justify"> <?php echo $c['isi_berita'];?> </td> </tr>
<td> <input type="hidden" name="id" value="<?php echo $c['id_berita'];?>"/> </td> </tr>
</table>
</form>

</body>
</html>
