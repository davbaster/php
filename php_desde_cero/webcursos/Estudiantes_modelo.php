<?php

	require_once "BD.php";

	class Estudiantes_modelo extends BD {

		private $bd;
		public $nombre;
		public $paterno;
		public $materno;
		public $email;
		private $tabla = 'estudiantes';

		public function insertar($registro) {
			//$dbh es la conexion bd
			$dbh = parent::conectar();
			try {
				

				// Prepare
				$stmt = $dbh->prepare("INSERT INTO estudiantes (nombre, paterno, materno, email) VALUES (:nombre, :paterno, :materno, :email)");

				//ATRIBUTES
				$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// Bind
				$nombre = $registro['nombre'];
				$paterno = $registro['paterno'];
				$materno = $registro['materno'];
				$email = $registro['email'];
				$stmt->bindParam(':nombre', $nombre);
				$stmt->bindParam(':paterno', $paterno);
				$stmt->bindParam(':materno', $materno);
				$stmt->bindParam(':email', $email);
				// Excecute
				$stmt->execute();
				//obteniendo ID de fila
				 $id = $dbh->lastInsertId();
				echo "mostrando... ".$id;

				// #echo "He insertado el registro";
				return true;

			} catch (Exception $e) {
				exit("ERROR: Linea 38 ".$e->getMessage());
			}
		}

		public function consultar() {
			$conexion = parent::conectar();
			try {
				#SELECT * FROM nombre_tabla;
				$query = "SELECT * FROM estudiantes";
				#return $consulta = $conexion->query($query)->fetch(); #selecciona primer registro
				return $consulta = $conexion->query($query)->fetchAll();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function actualizar($registro) {
			#UPDATE nombre_tabla SET col1 = valor1, col2 = valor2, col3 = valor3 WHERE condicion;
			$conexion = parent::conectar();
			try {
				$query = "UPDATE estudiantes SET nombre=:nombre, paterno=:paterno, materno=:materno WHERE email=:email;";
				$actualizar = $conexion->prepare($query)->execute($registro);
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function eliminar($accion, $eliminar) {
			#DELETE FROM nombre_tabla WHERE condicion;
			$conexion = parent::conectar();
			if ($accion == 'todos') {
				try {
					$query = "DELETE FROM estudiantes";
					$eliminar = $conexion->prepare($query)->execute();
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			} else {
				try {
					$query = "DELETE FROM estudiantes WHERE email=:email";
					$eliminar = $conexion->prepare($query)->execute($eliminar);
					echo "He eliminado";
					#$query = "DELETE FROM estudiantes WHERE email=".$eliminar['email'];
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			}
		}

	}


?>
