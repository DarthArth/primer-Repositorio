<?php
/* CBTIS 89
   Programa que almacena los datos en un arreglo y posteriormente los imprime
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

$nombres = array("Luis","Zoe","Ana","Jose","Raul","Gabriela","Arath","Brenda");

$n="toto";
foreach ($nombres as $nombreArray) {
	if ($n === $nombreArray) {
		echo "Este nombre esta en el array";
		break;
	}
}
?>