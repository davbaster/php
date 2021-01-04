<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h1>CRUD de Estudiantes</h1>

	<?php  #var_dump(PDO::getAvailableDrivers()); 

		require_once 'Estudiantes_modelo.php';
		$estudiante = new Estudiantes_modelo();

	?>

	<h3>C: Insertar</h3>
	<?php



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

		$alumno3 = [
			'nombre'  => 'Maria',
			'paterno' => 'Castro',
			'materno' => 'V',
			'email'   => 'mariaa@gmail.com'
		];

		/*INSERTANDO UN REGISTRO*/

		// $respuesta = $estudiante->insertar($alumno3);
		// // echo "<br /> Respuesta del insertar Estudiantes_vista.php: $respuesta <br />";
		// if ($respuesta > 0) {
		// 	//logica a seguir si se pudo insertar
		// } else {
		// 	//logica a seguir si no se pudo insertar
		// }

	?>

	<h3>R: Leer/Consultar</h3>
	<?php

		/*HACIENDO CONSULTAS DE REGISTRO*/

		function imprimirEstudiantes(){
			$estudiante = new Estudiantes_modelo();
			$registros = $estudiante->consultar();
			// var_dump($resultados)
			
			foreach ($registros as $registro) {
				echo $registro['nombre']." ".$registro['paterno']."<br />";
			}
		}
		imprimirEstudiantes();

	?>

	<h3>U: Actualizar</h3>

	 <?php 
	 	/*ACTUALIZANDO UN REGISTRO*/

		// $alumno = [
		// 	'nombre' => 'Marielos',
		// 	'paterno' => 'Castro',
		// 	'materno' => 'V.',
		// 	'email' => 'mari@gmail.com'];
		// $actualizado = $estudiante->actualizar($alumno);

		//logica a seguir si no pudo actualizar?

		/*imprimiendo tabla actualizada*/
		// if ($actualizado){
		// 	echo "<br />**TABLA ACTUALIZADA**<br />";
		// 	imprimirEstudiantes();
		// }
		

	?> 

	<h3>D: Eliminar</h3>

	<?php

		/*ELIMINANDO REGISTROS*/

		/*ELIMINANDO REGISTRO ESPECIFICO*/
		// $alumno = ['email' => 'cajina@gmail.com'];
		$alumno = ['email' => 'mariaa@gmail.com'];
		$estado = 
		$eliminado =$estudiante->eliminar('',$alumno);

		/*ELIMINANDO TODOS LOS REGISTROS*/
		// $eliminado = $estudiante->eliminar('todos', '');

		//logica si se pudo eliminar
		if ($eliminado){
			echo "<br />**TABLA ACTUALIZADA**<br />";
			imprimirEstudiantes();
		}

		//logica a seguir si no pudo eliminar?

	?>




</body>
</html>
