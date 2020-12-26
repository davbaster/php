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

		define('INC', '/includes/');
		require_once __DIR__ . INC .'Curso.inc.php';

		$curso1 = new Curso('POO en PHP', 'Yesi Days', '3 Sesiones', 10, true);

		$curso2 = new Curso('Javascript', 'Alvaro Felipe', '6 Sesiones', 10, true);

		echo $curso1->obtenerTitulo().'<br />';
		$curso1->asignarTitulo("POO en PHP 2020");
		echo $curso1->obtenerTitulo().'<br />';


		// echo $curso1->obtenerProfesor().'<br />';
		// $curso1->asignarTitulo('POO en PHP 2020');
		// echo $curso1->obtenerProfesor().'<br />';

	?>
	
</body>
</html>