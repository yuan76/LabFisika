<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<script language='javascript'> 
		if(confirm('Anda yakin ingin keluar?')){
		window.location='../index.php';
		session_destroy();
		} else {
		window.location='index.php';
		}
	</script>";
?>
</body>
</html>
