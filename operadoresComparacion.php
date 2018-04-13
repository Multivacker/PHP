<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

/*  $var1==$var2 igual que
	$var1===$var2 idéntica que (Verdadero si son iguales y del ismo tipo
	$var1!=$var2
	$var1<>$var2
	$var1<$var2
	$var1>$var2
	$var1<=$var2
	$var1>=$var2*/
	
	$var1 = 8;
	
	$var2 = "8";
	
	$var3 = "Ramiro";
	
	if($var1==$var2){
		
		echo "Son iguales<br>";
		
	}else{
		
		echo "No son iguales<br>";
	}
	//-------------------------------------------
	
	if($var1==$var3){
		
		echo "Son iguales<br>";
		
	}else{
		
		echo "No son iguales<br>";
	}
	//-------------------------------------------
	
	if($var1===$var2){
		
		echo "Son iguales<br>";
		
	}else{
		
		echo "No son iguales<br>";
	}
	//-------------------------------------------
	
	if($var1!=$var3){
		
		echo "No son iguales<br>";
		
	}else{
		
		echo "Son iguales<br>";
	}
	//-------------------------------------------
	
	
?>
</body>
</html>