<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<form>
	Sayı 1:<br>
	<input type="text" name="txtSayi1"><br>
	Sayı 2:<br>
	<input type="text" name="txtSayi2"><br>
	<input type="submit" name="btn" value="TOPLA">
</form>
<div>
	<?php
	if(isset($_POST["btn"])){ //isset() ile hesapla butonuna basılıp basılmadığını kontrol ediyoruz.
		$s1=$_POST["txtSayi1"];
		$s2=$_POST["txtSayi2"];
		$toplam=$s1+$s2;
		echo($s1." + ".$s2." = ".$toplam);
	}
	?>
</div>




</body>
</html>