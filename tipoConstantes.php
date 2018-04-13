<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

	define("AUTOR", "Nahuel");
	
	//define("AUTOR", "Nahuel", true); con define imprime Mayra
	
	//AUTOR = "Mayra"; Error
	
	//define(AUTOR = "Mayra"); Error
	
	echo "Mi nombre es: " . AUTOR . "<br>";
	
	//echo "Mi nombre es: AUTOR"La constante no puede estar dentro del String
	
	echo "la línea de esta instrucción es: " . __LINE__ . "<br>"; //Constante mágica, predefinida
	
	echo "Estamos trabajando con este fichero: " . __FILE__ . "<br>";

?>

</body>
</html>