<?php
/* CBTIS 89
   Programa que usa el rsort
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>