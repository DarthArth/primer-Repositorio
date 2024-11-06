<?php
/* CBTIS 89
   Programa que use el array
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $array=array(-4,8,17,-11,-3,1,22,-30,21,50,-73,-7,-10,-8);
   $arraypos=array( );
   $arrayneg=array( );
   $spos=0;
   $sneg=0;
   $longitud = count($array);
   for($i=0; $i<$longitud; $i++)
   	{
   		if($array[$i] >= 0)
   			{$arraypos[$i]=$array[$i];}
   		else
   			{$arrayneg[$i]=$array[$i];}
   	}
 
   	echo "POSITIVOS";

   	echo "<br>";

  foreach($arraypos as $positivo)
  	{ echo$positivo;
  	echo "<br>";
  	 }
  	 echo"<br>";
  	 echo"La suma de los positivos ";
  	 echo"<br>";
  	 foreach($arraypos as $positivo)
  	 	{$spos = $spos + $positivo;}
  	 echo $spos;
  	 echo"<p>";

  	 echo "NEGATIVOS";

  	 echo "<br>";

  	  	 foreach($arrayneg as $negativo)
  	{ echo$negativo;
  	echo "<br>";
  	 }
  	 echo"<br>";
  	 echo"La suma de los positivos ";
  	 echo"<br>";
  	 foreach($arrayneg as $negativo)
  	 	{$sneg = $sneg + $negativo;}
  	 echo $sneg;
  	 echo"<br>";
     
     ?>