<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

/*Ámbito de las variables
LOCAL: Declarada dentro de la función, visible y accesible desde dentro de la funcion.
GLOBAL: Declarada en cualquier lugar del codigo PHP (Dentro o fuera e la funcion), visible y accesible desde cualquier lugar del código.
SUPER GLOBAL: Declarada como Array, visible y accesible desde fuera del script PHP*/

	$nombre = "Nahuel";//Ámbito fuera de la función
	
	function dameNombre(){//Ámbito de la función
	
		global $nombre;//Hace global la variable siempre dentro de la función.
		
		$nombre = "Mayra";
		
	}
	
	dameNombre();
	
	echo $nombre;
	
	/*include ("dameNombre.php");
	
	dameNombre();*/

?>

<body>
</body>
</html>