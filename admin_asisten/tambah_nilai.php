<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="simpan_nilai.php" enctype="multipart/form-data">
<font face="Century Gothic, Chiller, Comic Sans MS">
<font size="+3"> Tambah Nilai Praktik </font>
<br />
<br />
<font size="+1">
<table align="center" cellspacing="7px" border="0">
<tr> <td> NPM </td> <td> : </td> <td> <input type="text" name="npm" maxlength="8"/> </td> </tr>
<tr> <td> Modul </td> <td> : </td> <td> <select name="modul">
										<option> M0 </option> <option> M1 </option> <option> M3 </option> <option> M4 </option> 
										<option> L1 </option> <option> K2 </option> <option> K3 </option> <option> K4 </option>
										</select> </td> </tr>
<tr> <td> Tanggal </td> <td> : </td> <td> <select name="tgl">
											<script language="javascript">
											for (n=1; n<=31; n++) 
											{document.write("<option>"+n+"</option>")}
											</script> </select>
											<select name="bln">
											<script language="javascript">
											bln1= Array ('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agst','Sept','Okt','Nov','Des');
											for (b=0; b<=11; b++) 
											{document.write("<option>"+bln1[b]+"</option>")}
											</script> </select>
											<select name="thn">
											<script language="javascript">
											for(c=2010; c<=2040; c++)
											{document.write("<option>"+c+"</option>")}
											</script> </select> </td> </tr>
<tr> <td> LP </td> <td> : </td> <td> <input type="text" name="lp" id="lp" onkeyup="tambah();"/> </td> </tr>
<tr> <td> TP </td> <td> : </td> <td> <input type="text" name="tp" id="tp" onkeyup="tambah();"/>  </td> </tr>
<tr> <td> K </td> <td> : </td> <td> <input type="text" name="k" id="k" onkeyup="tambah();" /> </td> </tr>
<tr> <td> LA </td> <td> : </td> <td> <input type="text" name="la" id="la" onkeyup="tambah();"/>  </td> </tr>
<tr> <td> Total </td> <td> : </td> <td> <input type="text" name="total" id="total"/> </td> </tr>
<tr> <td> <button>Simpan</button></td> </tr> 
</table>
</font>
</font>
</form>

<script language='javascript'>
function tambah(){
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
