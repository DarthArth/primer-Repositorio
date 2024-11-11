<?php
/* CBTIS 89
   Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la siguiente manera:
   En el $Arreglo1 van los numeros pares, en el $Arreglo 2 los impares, en el $Arreglo 3 la suma de los numeros 
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   $Array1 = array();
   $Array2 = array();
   $Array3 = array();

echo "Arreglo1". " " ."Arreglo2". " " ."Arreglo3". " ";
echo "<br>";
   for ($i=150; $i<=202; $i++)
{
	$resi=$i%2;
   	if ($resi==0)
   	{array_push($Array1, $i);}

   else
   	{array_push($Array2, $i);}
}
   	for($j=0; $j<count($Array1) && $j<count($Array2); $j++)
   		{$Array3[$j] = $Array1[$j] + $Array2[$j];}

   	for($k=0; $k<26; $k++)
   	{echo $Array1[$k]."--------".$Array2[$k]."--------".$Array3[$k]. "<br>";}

   ?>

