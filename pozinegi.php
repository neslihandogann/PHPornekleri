<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php

$s1=$_POST["sayi1"];
 
switch ($s1){
   case 0: echo "Sayı sıfırdır.";break;
   case $s1>0: echo "Sayı pozitiftir.";break;
   default: echo "Sayı negatiftir.";
}
?>




</body>
</html>