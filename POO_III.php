<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	include("POO_I.php");
	
	include("POO_II.php");
	
	$renault=new Coche(); 
	$ferrari=new Coche(); 
	$seat=new Coche();
	
	$mazda=new Coche();
	
	$pegaso=new Camion();
	
	echo "el Mazda tiene " . $mazda->ruedas . " ruedas<br>";
	
	echo "el Pegaso tiene " . $pegaso->ruedas . " ruedas<br>";

?>
</body>
</html>