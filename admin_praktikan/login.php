<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<title> Login Praktikan Laboratorium </title>
</head>

<body style="background-color:#1A1395;">
	<div id="utama"> 
		<div id="menu">
		<ul>
			<li class="utama"> <a href="../index.php"> <img src="../gambar/back.JPG" height="30" width="35"/></a> </li>
			<li class="utama" style="margin-top:5px;"> <a href=""> Login Praktikan </a> </li>
		</ul>
		</div>
		<div id="inputan">
			<form method="post" action="awal.php">
				<input type="text" class="form-control input-md" id="user" name="user" placeholder="Masukkan Username" style="height:40px;">
				<div class="form-group" style="margin-top:10px; margin-bottom:20px">
					<input type="password" class="form-control input-md" id="pass" name="pass" placeholder="Masukkan Password" style="height:40px;">
				</div>
				<button type="submit" class="btn btn-warning btn-md btn-block" name="login">Login</button>
			</form>
		</div>
	</div>
</body>
</html>
