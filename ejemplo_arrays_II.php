<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$semana[]="Lunes";
	
	$semana[]="Martes";
	
	$semana[]="Miércoles";
	
	$semana[]="Jueves";
	
	$semana[]="Viernes";
	
	$semana[]="Sábado";
	
	$semana[]="Domingo";
	
	
	for($i=0; $i<count($semana); $i++){
		
		echo $semana[$i] . "<br>";
		
	}
	
	echo "<br>";
	
	$semana[]="Osvaldo";
	
	for($i=0; $i<count($semana); $i++){
		
		echo $semana[$i] . "<br>";
		
	}


?>
</body>
</html>