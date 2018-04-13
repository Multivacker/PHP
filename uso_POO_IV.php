<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

	include("POO_IV.php");
	
	$mazda=new Coche();
	
	$pegaso=new Camion();
	
	/*$mazda->ruedas=7;
	
	echo "el Mazda tiene " . $mazda->ruedas . " ruedas <br>";
	
	echo "el Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

	$pegaso->frenar();
	
	$pegaso->setcolor();
	
	$pegaso->arrancar();*/
	
	echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas.<br>";
	
	echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas.<br>";
	
	echo "El pegaso tiene " . $pegaso->get_motor() . " cc.<br>";

?>

<body>
</body>
</html>