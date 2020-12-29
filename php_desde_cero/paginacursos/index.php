<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cursos de programacion</title>
</head>
<body>
	<h1>Cursos de programacion</h1>

	<?php

		// define('INC', '/includes/');
		// // Incluyendo mi archivo global, que tiene todas las clases que nnecesito
		// require_once __DIR__ . INC .'Global.inc.php';

		// $curso1 = new Curso('POO en PHP', 'Yesi Days', '3 Sesiones', 10, true);

		// $curso2 = new Curso('Javascript', 'Alvaro Felipe', '6 Sesiones', 10, true);

		// echo $curso1->obtenerTitulo().'<br />';
		// $curso1->asignarTitulo("POO en PHP 2020");
		// echo $curso1->obtenerTitulo().'<br />';

		// $curso1->asignarRequerimiento(["PHP desde cero", "Conocimientos basicos de programacion", "Ganas de aprender", "Practica"]);
		// echo "<p>El conocimiento necesario para este curso es: </p>";
		// $curso1->obtenerRequerimiento();


		// $curso1->asignarConocimiento(["Escribir paginas web en php", "Resolver algoritmos sencillos", "herramientas para el futuro"]);
		// echo "<p>Los conocimiento que tendras despues de llevar este curso son: </p>";
		// $curso1->obtenerConocimiento();


		// // echo $curso1->obtenerProfesor().'<br />';
		// // $curso1->asignarTitulo('POO en PHP 2020');
		// // echo $curso1->obtenerProfesor().'<br />';



		// Incluyendo mi archivo global, que tiene todas las clases que nnecesito
		require_once __DIR__ . '/includes/Global.inc.php';

		$estudiante1 = new Estudiante("David","Cordoba","cajina@gmail","Costa Rica");

		$estudiante1->bienvenida();

		$visitante1 = new Visitante("David","Cordoba","cajina@gmail","Costa Rica", 001);

		$visitante1->despedida();

		$curso1 = new Frontend("Node.js", "David", 3, 10, "Si");

		echo $curso1->valorCurso3Meses(10);


		$estudiante1->asignarNombre("Enrique");
		


	?>
	
</body>
</html>