<?php
/* CBTIS 89
   Programa que usa el array multidimencional
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>