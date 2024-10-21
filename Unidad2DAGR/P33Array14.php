<?php
/* CBTIS 89
   Programa que usa el array_push
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
echo "Array original";
   echo "<br>";

$array=array("Pedro","Brenda","Arath","Sebastian","Andrea","Amy");
$longitud = count($array);

   
sort($array);
for($i=0; $i<$longitud; $i++)
 {
  echo $array [$i];
  echo "<br>";
  }
echo "<p>";

echo "Array Despues De Agregar Nombres";
echo "<br>";

array_push($array,"Adilene","Cossio","Gael","Uriel");
unset($array[3],$array[5]);
$longitud = count($array);

rsort($array);
for($i=0; $i<$longitud; $i++)
      {
         echo $array [$i];
         echo "<br>";
     }
     echo "<br>";
     echo "El numero de elementos actual en el arreglo es de: 8";
?>