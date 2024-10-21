
<?php
/* CBTIS 89
   Programa que hace el calculo de un cheque
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/

   $bm=0;
   $bq=0;
   $bd=0;
   $bc=0;
   $bcin=0;
   $bv=0;
   $md=0;
   $mc=0;
   $mdo=0;
   $c=3893;

   $bm=floor($c/1000);
   $c=$c%1000;
   $bq=floor($c/500);
   $c=$c%500;
   $bd=floor($c/200);
   $c=$c%200;
   $bc=floor($c/100);
   $c=$c%100;
   $bcin=floor($c/50);
   $c=$c%50;
   $bv=floor($c/20);
   $c=$c%20;
   $md=floor($c/10);
   $c=$c%10;
   $mc=floor($c/5);
   $c=$c%5;
   $mdo=floor($c/2);
   $c=$c%2;
   

   echo "el cheque es: ", "<br>";
   echo "Son ".$bm." billetes de mil pesos ", "<br>";
   echo "Son ".$bq." billetes de quinientos pesos ","<br>";
   echo "Son ".$bd." billetes de docientos pesos ", "<br>";
   echo "Son ".$bc." billetes de cien pesos","<br>";
   echo "Son ".$bcin." billetes de cincuenta pesos ","<br>";
   echo "Son ".$bv." billetes de veinte pesos ","<br>";
   echo "Son ".$md." monedas de diez pesos ","<br>";
   echo "Son ".$mc." monedas de cinco pesos ","<br>";
   echo "Son ".$mdo." monedas de dos pesos ", "<br>";