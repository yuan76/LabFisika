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
		} else {
		window.location='index.php';
		}
	</script>";
	session_destroy();
?>
</body>
</html>
