<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arreglos y funciones nativas</title>
</head>
<body>
	<h1>Arreglos y funciones nativas</h1>

</body>
</html>

<?php

	#Arreglos y sus funciones nativas

	$cadena = '';
	$arrego = [];
	$videojuegos = ['FIFA','Fornite','Red Dead','Call of Duty','Battlefield','Pokemon','GTA','The sims'];

	#vacio

	# var_dump(empty($videojuegos));

	#Existe
	 #var_dump(isset($videojuegos[20]));

	#Contar elementos del arreglo
	#echo count($videojuegos);

	#Antepenultimo elemento
	#$posicion = count($videojuegos)- 2;
	#echo ($videojuegos[$posicion]);

	#Ordenar el arreglo de manera alfabetica
	// sort($videojuegos);
	// var_dump($videojuegos);

	#Ordenar el arreglo sin perder su indice
	// asort($videojuegos);
	// var_dump($videojuegos);

	#Ordenar de manera inversa
	// rsort($videojuegos);
	// var_dump($videojuegos);

	#Ordenar de manera inversa sin perder su indice
	asort($videojuegos);
	var_dump($videojuegos);

	#Sumar valores del arreglo.

?>