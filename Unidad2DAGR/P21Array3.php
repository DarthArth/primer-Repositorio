<?php
/* CBTIS 89
   Programa que almacena los nombres de 6 personas en un arreglo y posteriormente los imprime
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $n1 = "Toño";
   $n2 = "Dylan";
   $n3 = "Sofia";
   $n4 = "Quetzal";
   $n5 = "Rodolfo";
   $n6 = "Daniela";
   $array = array($n1." ".$n2." ".$n3." ".$n4." ".$n5." ".$n6);
   //Se obtiene el numero de elementos
   $longitud = count($array);

   //Reporte de los elementos
   for($i=0; $i<$longitud; $i++)
      {//Se obtiene el valor de cada elemento
         echo $array [$i];
         echo "<br>";
     }
     ?>