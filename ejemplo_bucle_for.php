<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	for($i=0; $i<=10; $i++){
		
		echo "<p>Hemos entrado en el bucle 1 por " . $i . "° vez.</p>" ;
	
	}
	
	echo "<br>";
	
	for($i=10; $i>=0; $i--){
		
		echo "<p>Hemos entrado en el bucle 2 por " . $i . "° vez.</p>" ;
	
	}
	
	echo "<br>";
	
	for($i=0; $i<=20; $i+=2){
		
		echo "<p>Hemos entrado en el bucle 3 por " . $i . "° vez.</p>" ;
	
	}
	
	echo "<br>";
	
	for($i=0; $i<=20; $i+=2){
		
		echo "<p>Hemos entrado en el bucle 4 por " . $i . "° vez.</p>" ;
		
			if($i==6){
				
				echo "<p>Bucle interrumpido</p>";
				
				break;
				
			}
	
	}

?>
</body>
</html>