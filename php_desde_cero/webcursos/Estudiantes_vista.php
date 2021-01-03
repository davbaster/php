<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h1>CRUD de Estudiantes</h1>

	<?php  #var_dump(PDO::getAvailableDrivers()); ?>

	<h3>C: Insertar</h3>
	<?php

		require_once 'Estudiantes_modelo.php';
		$estudiante = new Estudiantes_modelo();

		$alumno1 = [
			'nombre'  => 'David',
			'paterno' => 'Cordoba',
			'materno' => 'C',
			'email'   => 'cajina@gmail.com'
		];

		$alumno2 = [
			'nombre'  => 'Oscar',
			'paterno' => 'Castro',
			'materno' => 'V',
			'email'   => 'oscavi@gmail.com'
		];

		// var_dump($alumno);

		$respuesta = $estudiante->insertar($alumno2);
		echo "<br /> Respuesta del insertar Estudiantes_vista.php: $respuesta <br />";
		if ($respuesta == true) {
			echo "<br />Se ha insertado";
		} else {
			echo "<br />Hay un error";
		}

	?>

	<h3>R: Leer/Consultar</h3>
	<?php
		$resultados = $estudiante->consultar();
		// var_dump($resultados)
		foreach ($resultados as $estudiante) {
			echo $estudiante['nombre']." ".$estudiante['paterno']."<br />";
		}
	?>

	<h3>U: Actualizar</h3>

	<?php

		/*$alumno = [
			'nombre' => 'Yesi',
			'paterno' => 'Days.',
			'materno' => 'B.',
			'email' => 'silvercorp@gmail.com'
		];
		$estudiante->actualizar($alumno);*/

	?>

	<h3>D: Eliminar</h3>

	<?php

		// $alumno = ['email' => 'silvercorp@gmail.com'];
		// $estudiante->eliminar('todos', $alumno);

	?>




</body>
</html>
