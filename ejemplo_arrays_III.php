<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$datos=array("Nombre"=>"Nahuel", "Apellido"=>"Greco","Edad"=>38);
	
	$datos["País"]="Argentina";
	
	/*echo $datos["Apellido"];*/
	//Comprueba si existe el array
	if(is_array($datos)){
		
		echo "Es un array<br>";
		
	}else{
		
		echo "No es un array<br>";		
	
	}
	
	foreach($datos as $clave=>$valor){
		
		echo "A $clave le corresponde $valor <br>";
		
	}

?>
</body>
</html>