<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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

</head>


<body>
<?php

	if(isset($_POST["enviando"])){
		
		$usuario = $_POST["nombre_usuario"];//$_POSTes una variable super global
		$edad  = $_POST["edad_usuario"];
		
		
		if($usuario == "Nahuel" && $edad>=18) {
			
			echo "<p class = 'validado'>Puedes entrar</p>";
	}else{
		
		echo "<p class = 'no_validado'>No puedes entrar</p>";
		}
	}
?>

</body>
</html>