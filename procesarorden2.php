<html>
<head>
  <title>Formulario de pedido de libros</title>
</head>
<body>
<h1>Librer�a Online </h1>
<h2>Resumen del Pedido </h2>


<?php

/* Autor: Jes�s Conde
�ltima modificaci�n:septiembre
Este script procesa un pedido de libros
*/
	$actionqty = $_POST["actionqty"];
	$photoqty = $_POST["photoqty"];
	$flashqty = $_POST["flashqty"];
echo "<p>Orden procesada a las: "; // Esto aparecer� en pantalla
echo date("H:i ");
echo "del d�a ";
echo date("j ");
echo "de ";
echo date("F ");
echo "del a�o ";
echo date("Y");
echo "<br>";
echo "<p>Su pedido es el siguiente:</p>";
	echo $actionqty." ActionScript<br>";
	echo $photoqty." Photoshop<br>";
	echo $flashqty." Flash MX<br>";

	$totalqty = 0;
	$totalamount = 0.00;
	define("PRECIOACTION", 100);
	define("PRECIOPHOTO", 10);
	define("PRECIOFLASH", 4);
?>

</body>
</html>
