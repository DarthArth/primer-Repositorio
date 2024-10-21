<?php
/* CBTIS 89
   Programa que usa el array_push
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   echo "Array original";
   echo "<br>";

$array=array("camisa","pantalon","cinturon");

foreach($array as $prenda)
      {echo $prenda. "<br>";}

   $arraynumerico = array("camisa", "pantalon","Cinturon");


sort($arraynumerico);
var_export($arraynumerico);
echo "<p>";

echo "Array Despues De Agregar Productos";
echo "<br>";

array_push($array,"Gorra","Calcetines");

foreach($array as $prenda)
{echo $prenda. "<br>";}

$arraynumerico1=array("Gorra","Calcetines");

rsort($arraynumerico1);
var_export($arraynumerico1);
?>