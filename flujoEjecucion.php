<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

	function dameDatos1(){
		
		echo "Este es el mensaje del interior de la primer función<br>";
		
	}

	

?>

<?php
	//Flujo de ejecución
	
	dameDatos2();
	
	echo "Este es el primer mensaje<br>";
	
	function dameDatos2(){
		
		echo "Este es el mensaje del interior de la segunda función<br>";
		
	}
	
	//dameDatos2();
	
	echo "Este es el segundo mensaje<br>";
	
	
	//dameDatos2();
	dameDatos2();
	dameDatos2();
	dameDatos2();
	dameDatos1();
	dameDatos1();
	
	include ("dameDatos3.php");//llama a otro programa PHP
	//Con require se detiene el flujo del programa ante cualquier error
	
	dameDatos3();
?>

</body>
</html>