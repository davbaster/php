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

		/*INSERTANDO UN REGISTRO*/

		$respuesta = $estudiante->insertar($alumno2);
		// echo "<br /> Respuesta del insertar Estudiantes_vista.php: $respuesta <br />";
		if ($respuesta > 0) {
			//logica a seguir si se pudo insertar
		} else {
			//logica a seguir si no se pudo insertar
		}

	?>

	<h3>R: Leer/Consultar</h3>
	<?php

		/*HACIENDO CONSULTAS DE REGISTRO*/

		$resultados = $estudiante->consultar();
		// var_dump($resultados)
		foreach ($resultados as $sujeto) {
			echo $sujeto['nombre']." ".$sujeto['paterno']."<br />";
		}
	?>

	<h3>U: Actualizar</h3>

	 <?php 
	 	/*ACTUALIZANDO UN REGISTRO*/

		// $alumno = [
		// 	'nombre' => 'Alberto',
		// 	'paterno' => 'Castro',
		// 	'materno' => 'V.',
		// 	'email' => 'oscavi@gmail.com'];
		// $estudiante->actualizar($alumno);

		//logica a seguir si no pudo actualizar?

	?> 

	<h3>D: Eliminar</h3>

	<?php

		/*ELIMINANDO REGISTROS*/

		/*ELIMINANDO REGISTRO ESPECIFICO*/
		// $alumno = ['email' => 'cajina@gmail.com'];
		// $alumno = ['email' => 'oscavi@gmail.com'];
		// $estado = 
		// $estudiante->eliminar('',$alumno);

		/*ELIMINANDO TODOS LOS REGISTROS*/
		// $estudiante->eliminar('todos', '');

		//logica a seguir si no pudo insertar?

	?>




</body>
</html>
