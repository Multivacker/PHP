<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$alimentos=array("fruta"=>array("citrico"=>"mandarina",
									"tropical"=>"kiwi", "banana"),
	"leche"=>array("tipo"=>"descremada", "entera"),
	"carne"=>array("tipo"=>"vaca", "pollo", "cerdo",
					"vacuno"=>"lomo",
					"porcino"=>"pata"));
					
					
	echo $alimentos["carne"]["vacuno"] . "<br>";
	
	/*foreach($alimentos as $producto=>$especificacion){
		
		echo "$producto:<br>";
		while(list($clave,$valor)=each($especificacion)){
			
			echo "$clave=$valor<br>";
			
		}
		
			echo"<br>";
		
	}*/
	
	
	echo var_dump($alimentos);

?>
</body>
</html>