<?php

//variables en PHP

#Reglas

$nombre = 'David';

// echo $nombre;

$entero = 123;
$negativo = -1000;
$flotante = 13.1416;

// echo $entero." ".$negativo." ".$flotante."<br />";

$octal = 0755; //493
$hexadecimal = 0xC4E; //3150
$binario = 0b1010; //10

// echo $octal." ".$hexadecimal." ".$binario."<br />";

$nombre = "David";
$apellido = "Cordoba";
$edad = 34;
$soltero = false;

// echo gettype($soltero);

// var_dump($nombre);

// var_dump($edad);

// variable por referencia
$variable = "Hola mundo, soy David <br />";
$nueva    = &$variable;

echo $nueva;

$variable = "Espero poder aprender mas de php";
echo $nueva;


?>