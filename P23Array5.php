<?php
/* CBTIS 89
   Programa que almacena los datos en un arreglo y posteriormente los imprime
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   $kilo = array("Manzana"=>"25","Mango"=>"40","Limon"=>"35","Naranja"=>"20");

echo "** FRUTERIA DEL SUR **","<br>","<br>";

foreach($kilo as $fruta=>$precio)
{ echo "El kilo de ".$fruta." cuesta ".$precio;
  echo "<br>","<br>";
  }
  ?>