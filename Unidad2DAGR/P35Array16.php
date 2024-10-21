<?php
/* CBTIS 89
   Programa que suma, resta y multiplica los datos de un arreglo
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $array = array(10, 20, 30, 40, 50);
   $array2 = array(3, 7, 6, 15, 18);
   $arraysuma = array();
   $arrayresta = array();
   $arraymulti = array();
   $arraydivi = array();

   
   $longitud = count($array);
   for($i=0; $i<$longitud; $i++)
   {$arraysuma[$i]=$array[$i]+$array2[$i];
   $arrayresta[$i]=$array[$i]-$array2[$i];
   $arraymulti[$i]=$array[$i]*$array2[$i];
   $arraydivi[$i]=$array[$i]/$array2[$i];
  }

  echo "SUMA ENTRE DOS ARREGLOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$array[$i]."+".$array2[$i]." = ".$arraysuma[$i];
  	echo "<br>";
  }
  echo "<br>";

  echo "RESTA ENTRE DOS ARREGLOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$array[$i]."-".$array2[$i]." = ".$arrayresta[$i];
  	echo "<br>";
  }
  echo "<br>";

  echo "MULTIPLICACION ENTRE DOS ARREGLOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$array[$i]."*".$array2[$i]." = ".$arraymulti[$i];
  	echo "<br>";
  }
  echo "<br>";

  echo "DIVISION ENTRE DOS ARREGLOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$array[$i]."/".$array2[$i]." = ".$arraydivi[$i];
  	echo "<br>";
  }
?>
