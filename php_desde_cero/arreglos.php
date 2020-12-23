<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arreglos</title>
</head>
<body>
	<h1> Arreglos</h1>

</body>
</html>

<?php

#Arreglos

#$numeros = [];
#var_dump($numeros);
#echo <!-- "<br />" -->;

#arreglos indexados

#$dias = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

#var_dump($dias);
#echo <!-- "<br />" -->;

#print_r($dias);
#echo <!-- "<br />" -->;

#echo $dias[2];
#echo <!-- "<br />" -->;


#$numeros = []; //Arreglo vacio

#$numeros = "Viernes"; 
#var_dump($numeros) ;
#echo <!-- "<br />" -->;
#echo $numeros[0];
#echo <!-- "<br />" -->;
#echo $numeros[6];
#echo <!-- "<br /> -->";

// ARREGLOS ASOCIATIVO

#$usuario = ['nombre' => 'David', 'edad' => 38, 'lenguaje => spanish'];

#print_r($usuario);
#echo <!-- "<br />" -->;
#echo 'Edad: '.$usuario['edad'].<!-- "<br />" -->;


// otra forma ARREGLOS ASOCIATIVO
#$usuario2 = array('tania' => 'David', 'edad' => 38, 'lenguaje => spanish');
#echo<!-- ("<pre>") -->;
#var_dump($usuario2);
#echo<!-- ("</pre>") -->;

//ARREGLOS MULTIDIMENSIONALES

$alumnos = array(
	array('Juan', 20, 'Mexico'), #fila 1
	array('Salome', 25, 'Peru'), #fila 2
	array('Carlos', 24, 'Bolivia')#fila 3
);

<pre>
	var_dump($alumnos);
</pre>


?> 