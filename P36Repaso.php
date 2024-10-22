<?php
/* CBTIS 89
   Programa que agrega y elimina nombres a una lista de alumnos y los ordena de forma ascendente y descendete
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   echo "**ALUMNOS 3A**";
   echo "<br>","<br>";

$array=array("kalep","Carlos","Ale","Sebastian","Arath","Erick");
$longitud = count($array);

   
sort($array);
for($i=0; $i<$longitud; $i++)
 {
  echo $array [$i];
  echo "<br>";
  }
echo "<p>";

echo "Lista con los nombres ya agregados y/o eliminados";
echo "<br>";

array_push($array,"Hector","Zorek","Charly","Ennio");
unset($array[2],$array[6]);
$longitud = count($array);

rsort($array);
for($i=0; $i<$longitud; $i++)
      {
         echo $array [$i];
         echo "<br>";
     }
     echo "<br>";
     echo "El numero de alumnos actual en la lista es de: 8";
?>