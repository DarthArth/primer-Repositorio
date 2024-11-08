<?php
/* CBTIS89
P39Array.19
Arreglo que muestra las edades de un grupo de personas y las ordena en otrtos grupos dependiendo de esta misma

Gonzalez Renteria Dylan Arath
Programacion 3roA TM */

$Nombre = array("Paco", "Mari","Lalo", "Rosi", "Paty", "Beto");

$edad = array(17,30,71,38,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();
echo "NOMBRE". " " ."EDAD". " " ."GRUPO1". " " ."GRUPO2". " " ."GRUPO 3". " ";
echo "<br>";
   for($i=0; $i<6; $i++)
   	{ if($edad[$i] < 18)
        {$Grupo1[$i]=1;
         $Grupo2[$i]=0;
         $Grupo3[$i]=0;}

    else if($edad[$i] > 18 && $edad[$i] < 49 )
   	{$Grupo2[$i]=1;
   	 $Grupo1[$i]=0;
   	 $Grupo3[$i]=0;}

   	elseif($edad[$i] > 49)
    {$Grupo3[$i]=1;
     $Grupo1[$i]=0;
     $Grupo2[$i]=0;}
   	} 

   	for($j=0; $j<6; $j++)
   	{echo $Nombre[$j]."------------".$edad[$j]." ";
      echo "---------".$Grupo1[$j]."--------".$Grupo2[$j]."--------".$Grupo3[$j]. "<br>";}
