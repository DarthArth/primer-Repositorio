<?php
/* CBTIS 89
   Programa que usa el array multidimencional
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $n=array();

   for ($j=1;$j<=100;$j++)
   	{$numeros []=$j;}

   foreach($numeros as $valor)
   {
   	if($valor%2==0)
   	{
   		echo $valor." ";}
   }
?>