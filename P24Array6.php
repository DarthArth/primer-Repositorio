<?php
/* CBTIS 89
   Programa que almacena los datos en un arreglo y posteriormente los imprime
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   $datos = array("Jose"=>"Programacion","Aurelio"=>"Construccion","Karla"=>"Arquitectura","Adilene"=>"Electronica","Rogelio"=>"Mecatronica");

echo "** DATOS DE ALUMNOS **","<br>","<br>";

foreach($datos as $alumno=>$carrera)
{ echo "El alumno del CBTIS89 ".$alumno." estudia ".$carrera;
  echo "<br>","<br>";
  }
  ?>