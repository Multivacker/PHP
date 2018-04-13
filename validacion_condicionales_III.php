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
		
		$nombre=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];
	
	switch(true){
		
		case $edad<=18: echo "eres menor de edad"; break;	
		
		case $edad<=30: echo "eres joven"; break;
		
		case $edad<=40: echo "eres adulto"; break;
		
		case $edad<=65: echo "eres maduro"; break;
		
		default:
		
		if($edad<=120){
		
			echo "Cu&iacute;date";
		
		}else{
			
			echo "Como es que sigues vivo?!?!";
		}
	}
	
	}
	
?>