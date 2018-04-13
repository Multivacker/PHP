
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
	
	//-------------------------------------------------------------
	
		class Camion{
		
		var $ruedas;
		var $color;
		var $motor;
		
		function Camion(){//Método constructor
		
			$this->ruedas=8;
			$this->color="gris";
			$this->motor=2600;
			
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
		
		
		
	}

	
?>
