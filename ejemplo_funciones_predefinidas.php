<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$palabra="NAHUEL";
	
	echo(strtolower($palabra)) . "<br>";
	
	$palabra1="nahuel";
	
	echo(strtoupper($palabra1)) . "<br>";
	
	
	function suma($num1, $num2){
		
		$resultado=$num1+$num2;	
		
		return $resultado;
	}
	
	echo (suma(9,34)) . "<br>";
	
	
	function frase_mayuscula($frase, $conversion=true){
		
		$frase=strtolower($frase);
		
		if($conversion==true){
			
			$resultado=ucwords($frase);
			
		}else{
			
			$resultado=strtoupper($frase);
			
		}
		
		return $resultado;
		
	}
	
	echo(frase_mayuscula("esto es una prueba", false));

?>
</body>
</html>