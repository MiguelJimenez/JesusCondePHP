<html>
<head>
  <title>Formulario de pedido de libros</title>
</head>
<body>
<h1>Librer&iacute;a Online </h1>
<h2>Resumen del Pedido </h2>

<? 
  echo "<p>Pedido procesado el "; // Start printing order 

  echo date("jS F,H:i ");
  echo "<br>";
  echo "<p>Su pedido es el siguiente:";
  echo "<br>";
  echo $actionqty." ActionScript<br>";
  echo $photoqty." Photoshop<br>";
  echo $flashqty." Flash MX<br>";

  $totalqty = 0;
  $totalamount = 0.00;
 
  define("ACTIONPRICE", 100);
  define("PHOTOPRICE", 10);
  define("FLASHPRICE", 4);

  $totalqty = $actionqty + $photoqty + $flashqty;
  $totalamount =  $actionqty * ACTIONPRICE
                + $photoqty * PHOTOPRICE
                + $flashqty * FLASHPRICE;
  
  echo "<br>\n";
  echo "Artículos Pedidos:       ".$totalqty."<br>\n";
  echo "Subtotal:            €";
  echo number_format($totalamount, 2);
  echo "<br>\n";

  $taxrate = 0.10;  // local sales tax is 10%
  $totalamount = $totalamount * (1 + $taxrate);
  $totalamount = number_format($totalamount, 2);
  echo "Total incluyendo impuestos: €".$totalamount."<br>\n";

?>
</body>
</html>
