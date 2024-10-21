<?php
/* CBTIS 89
   Programa que almacena los datos en un arreglo y posteriormente los imprime
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   $equipo = array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Juan","delantero"=>"rafa");

echo "** SELECCION NACIONAL **","<br>","<br>";

foreach($equipo as $posicion=>$jugador)
{ echo "El jugador ".$jugador." es el ".$posicion;
  echo "<br>","<br>";
  }
  ?>