<?php
/* CBTIS 89
   Programa que almacena en un arreglo llamado $compras el valor de 6 compras, posteriormente en otros arreglos se debe almacenar informacion de acuerdo a algunas condiciones
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $compras = array(800, 2700, 1900, 150, 7600, 1000);
   $descuentos = array();
   $total = array();
   $porcentaje = array();

   $longitud = count($compras);
   for($i=0; $i<$longitud; $i++)
   {
   	if ($compras[$i]<=300)
   		{$descuentos[$i] = $compras[$i]*0;
   		 $descuento[$i]=0;}

   	 else if($compras[$i] > 300 && $compras[$i] <= 1000)
   	 	{$descuentos[$i] = $compras[$i]*0.10;
   	 		$descuento[$i]=10;}

   	 else if($compras[$i] > 1000 && $compras[$i] <= 2500)
   	 	{$descuentos[$i] = $compras[$i]*0.15;
   	 		$descuento[$i]=15;}

   	 else if($compras[$i] > 2500 && $compras[$i] <= 5000)
   	 	{$descuentos[$i] = $compras[$i]*0.20;
   	 		$descuento[$i]=20;}

   	 else if($compras[$i] > 5000)
   	 	{$descuentos[$i] = $compras[$i]*0.25;
   	 		$descuento[$i]=25;}

   	  $total[$i] = $compras[$i] - $descuentos[$i];
      $descuentos[$i]=$descuentos[$i];
      $porcentaje[$i]=$descuento[$i];}

   echo "COMPRAS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo $compras[$i];
  	echo "<br>";
  }

echo "<br>";
  echo "DESCUENTOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo $descuentos[$i];
  	echo "<br>";
  }

echo "<br>";
  echo "TOTAL";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo $total[$i];
  	echo "<br>";
  }

  echo "<br>";
  echo "PORCENTAJE";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo "% ". $porcentaje[$i];
  	echo "<br>";
  }

