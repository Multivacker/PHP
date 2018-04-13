<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	
	$num1=rand(10,50);
	
	$num2=pow(5,5);
	
	$num3=345.2543;
	
	$num4="5";
	
	$num4+=2;
	
	$num4+=5.75;
	
	$num5="5";
	
	$resultado=(int)$num4;
	
	echo "El número es: " . $num1 . "<br>";
	
	echo "El número es: " . $num2 . "<br>";
	
	echo "El número es: " . round($num3,2) . "<br>";

?>
</body>
</html>