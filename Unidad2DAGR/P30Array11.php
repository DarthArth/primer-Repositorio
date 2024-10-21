<?php
/* CBTIS 89
   Programa que usa el array_push
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>