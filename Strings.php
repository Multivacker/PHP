<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style>

.resaltar{
	color:#F0C;
	font-weight:bold;
	
}
</style>
</head>
<body>

<?php

	$nombre = "Nahuel";

	echo "<p class = 'resaltar' >Esto es un ejemplo de frase</p>";

	echo '<p class = "resaltar" >Esto es un ejemplo de frase</p>';
	
	echo "<p class = \"resaltar\" >Esto es un ejemplo de frase</p>";
	
	echo "Hola $nombre<br>"; //No usamos el concatenador punto
	
	echo 'Hola $nombre<br>'; //Toma como literal la variable
	
	//strcmp es String Compare y strcasecmp ignora mayusculas y minúsculas
	//boolean devuelve 1 si no son iguales (false) y 0 si son iguales (true) al 		
	//revés de java
	
	$variable1= "Casa";
	
	$variable2= "CASA";
	
	$resultado = strcmp($variable1, $variable2);
	
	echo "El resultado es: " . $resultado . "<br>";
	
	$resultado = strcasecmp($variable1, $variable2);
	
	echo "El resultado es: " . $resultado . "<br>";
	
	if(!$resultado) {
		
		echo "Coinciden";
	
	}else{
		
		echo "No coinciden";
	}
?>
</body>
</html>