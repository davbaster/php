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

	// $cadena = '';
	// $arrego = [];
	$videojuegos = ['FIFA','Fornite','Red Dead','Call of Duty','Battlefield','Pokemon','GTA','The sims', 'NFL'];

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
	// asort($videojuegos);
	// var_dump($videojuegos);

	#Sumar valores del arreglo.

	// $numeros = [1,20,30,15,5,10];
	// $suma = array_sum($numeros);
	// echo "Mi suma es ".$suma;

	#Encontar las diferencias entre arreglos
	// $salonA = ['g20' =>'david' ,'g2' => 'oscar','g3' => 'marielos','g4' => 'henry','g5' => 'maribel','g6' => 'mauricio','g7' => 'andrea'];
	// $salonB = ['g1' => 'david','g2' => 'oscar','g3' => 'marielos','g4' => 'henry','g30' => 'pedro'];

	// $diferencia = array_diff($salonA, $salonB);
	// var_dump($diferencia);

	#Dividir un arreglo especificando su tamaño
	// $dividir = array_chunk($videojuegos, 5);
	// var_dump($dividir);

	#Dividir el arreglo y eliminar lo anterior
	// var_dump(array_slice($videojuegos, 3));
	// var_dump($videojuegos);


	#Unir arreglos
	// $frutas = array('f1' =>'mango', 'f2' =>'naranja' );
	// $vegetales = array('v1' =>'perejil', 'v2' =>'apio' );
	// $numeros = [1,2,3.4,6];
	// $unir = array_merge($numeros, $vegetales);
	// var_dump($unir);

	#Eliminar el último elemento
	// array_pop($videojuegos);
	// var_dump($videojuegos);

	#Agregar uno o más elementos al final del arreglo.
	// array_push($videojuegos, "Smash Bros", "Street Fighter");
	// var_dump($videojuegos);

	#Buscar un elemento en el arreglo
	$calificacionesAlumnos = [10,9,4,6];
	$buscar = array_search(4, $calificacionesAlumnos);
	var_dump($buscar);


?>