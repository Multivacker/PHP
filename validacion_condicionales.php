<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if(isset($_POST["enviando"])){
		
		/*$edad=$_POST["edad_usuario"];*/
		$contra=$_POST["password"];
		$nombre=$_POST["nombre_usuario"];
		
		/*if($edad<=18){
			
			echo "Eres menor de edad";
			
		}else if($edad<=40){
			
			echo "Eres joven";
			
		}else if($edad<=65){
			
			echo "Eres maduro";
			
		}else{
			
			echo "Cu&iacute;date";
			
		}*/
		
		/*if($edad<=18){
			
			echo "Eres menor de edad, no tienes acceso";
			
		}else{
			
			echo "Eres mayor de edad, tienes acceso";

			
		}*/
		
		/*$resultado=$edad<18 ? "Eres menor de edad. No puedes acceder":"Eres mayor de edad. puedes acceder";
		
		echo $resultado;
	}*/
	
	$resultado= $nombre=="Nahuel" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder";
	
	echo $resultado;
	
	}
	
?>