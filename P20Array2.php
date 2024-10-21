<?php
/* CBTIS 89
   Programa que use el array
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
$nombre = "Anna";
$array = array(1, 2, 3, "casa", $nombre
);
$longitud = count ($array);
//Se obtiene el numero de elemnetos
//$longitud = count0($array);

//recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{ //se obtiene el valor de cada lemento
echo $array [$i];
echo "<br>";
}