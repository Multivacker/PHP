<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	/*Compra_vehiculo::$ayuda=10000;
	
	Al crear el metodo descuento, que es la ayuda que da el gobierno,
	matamos dos pajaros de un tiro, ya que por un lado logramos
	que el monto no se pueda modificar y por otro lado, lo hacemos
	opcional, aplicando el método o no 
	y aplicarlo a tioda la lista de compradores*/
	
	Compra_vehiculo::descuento_gobierno();
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("berlina");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final() . "<br>";
	
	
	
	


?>
</body>
</html>