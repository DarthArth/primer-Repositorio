<?php
/* CBTIS 89
   Programa que saca el pomedio del precio de 4 articulos diferentes (examen)
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $productos = array("Vestido","Pantalon","Cinturon","Camiseta");
   $precios = array(
   	array(500,600,550), array(800,700,600), array(400,200,300), array(500,200,500));
   $subtotal = array();
   $promedio = array();
   $st=0;

   $longitud = count($precios);
    foreach($precios as $precios2){
    	$st=$st+$precios;
    	for($i=0; $i<$longitud; $i++){
    		$subtotal[$i]=$st[$i];
    		$promedio[$i]=$subtotal[$i]/3;
    	}
    }
echo "TIENDA DE ROPA";
echo "<br>";
echo "Productos". "--" ."Subtotal". "--" ."Promedio";
echo "<br>";
foreach($productos as $prenda)
      {
      	for ($j=0; $j<4; $j++)
      		{echo $prenda[$j]."<br>".$subtotal[$j]."<br>".$promedio[$j]."<br>";}
      	}


   for ($i=0;$i<3;$i++)
   	{ for($j=0;$j<3;$j++)
   		{echo $precios[$i][$j]." ";}

   	     echo "<br>";
   	 }
   	 ?>