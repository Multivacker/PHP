<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	class Coche{
		
		var $ruedas;
		var $color;
		var $motor;
		
		function Coche(){//Método constructor
		
			$this->ruedas=4;
			$this->color="";
			$this->motor=1600;
			
		}
		
		function arrancar(){
			
			echo "estoy arrancando<br>";
		}
		
		function girar(){
			
			echo "estoy girando<br>";
			
		}
		
		function frenar(){
			
			echo "estoy frenando<br>";
			
		}
		
		function setcolor($color_coche, $nombre_coche){
			
			$this->color=$color_coche;
			
			echo "El color de " . $nombre_coche . "  es: " . $this->color . "<br>";
		}
		
	}

	
	
	$renault->setcolor("rojo", "Renault");
	$seat->setcolor("azul", "Seat");
	
	/*$mazda->girar();
	
	echo $mazda->ruedas; 
*/
?>
</body>
</html>