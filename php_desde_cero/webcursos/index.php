<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>

	<h1>Panel de administración</h1>

	<a href="Estudiantes_vista.php">Estudiantes</a>
	<a href="#">Profesores</a>
	<a href="#">Cursos</a>

<?php  

	echo "<br/ >BD drivers disponibles: <br/ >";
	var_dump( PDO::getAvailableDrivers() ); 
	

?>

</body>
</html>
