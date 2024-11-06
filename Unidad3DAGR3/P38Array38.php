<?php
/* CBTIS 89
   Programa que use el array
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $datos = array(
   	array(10,20,30), array(40,50,60), array(70,80,90));

   echo "NORMAL";
   echo "<br>";
   for ($i=0;$i<3;$i++)
   	{ for($j=0;$j<3;$j++)
   		{echo $datos[$i][$j]." "; }

   	     echo "<br>";
   	 }

   	 echo "<p>";
   	 echo "FILAS A COLUMNAS";
   	 echo "<br>";
   for ($i=0;$i<3;$i++)
   	{ for($j=0;$j<3;$j++)
   		{echo $datos[$j][$i]." "; }

   	     echo "<br>";
   	 }
     
     echo "<p>";
   	 echo "FILAS INVERSAS";
   echo "<br>";
   for ($i=2;$i>=0;$i--)
   	{ for($j=0;$j<3;$j++)
   		{echo $datos[$i][$j]." "; }

   	     echo "<br>";
   	 }


     echo "<p>";
   	 echo "COLUMNAS INVERSAS";
   echo "<br>";
   for ($j=2;$j>=0;$j--)
   	{ for($i=0;$i<3;$i++)
   		{echo $datos[$i][$j]." "; }

   	     echo "<br>";
   	 }

     echo "<p>";
   	 echo "FILA ESPEJO";
   echo "<br>";
   for ($i=2;$i>=0;$i--)
   	{ for($j=2;$j>=0;$j--)
   		{echo $datos[$i][$j]." "; }

   	     echo "<br>";
   	 }
?>
