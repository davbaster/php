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
				$stmt = $dbh->prepare("INSERT INTO {$this->tabla} (nombre, paterno, materno, email) VALUES (:nombre, :paterno, :materno, :email)");

				//ATRIBUTES para decidir que tipos de errores mostrar
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
				return true;//se ha insertado satisfactoriamente

			} catch (PDOException $e) {
				   if ($e->errorInfo[1] == 1062) {
				      // duplicate entry, do something else
				   	echo "<br />Email ya existe en el sistema. Por favor use otro email.<br />";
				   } else {
				      // an error other than duplicate entry occurred
				   	echo "<br />Error: ".$e.getMessage()."<br />";
				   }
			}
		}
		/*MUESTRA TODOS LOS REGISTROS DE LA DB*/
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

		//actualiza registros usando el email como key
		public function actualizar($registro) {
			#UPDATE nombre_tabla SET col1 = valor1, col2 = valor2, col3 = valor3 WHERE condicion;
			$conexion = parent::conectar();
			try {
				$query = "UPDATE estudiantes SET nombre=:nombre, paterno=:paterno, materno=:materno WHERE email=:email;";
				$stmt = $conexion->prepare($query);
				$stmt->execute($registro);

				//cuenta los row afectados por el sql statement
				$count = $stmt->rowCount(); 


				if ($count > 0){//si es mayor a cero, borro la fila
					echo "<br />Se ha actualizado el registro satisfactoriamente. <br />";
					$actualizado = true;
				}else{
					echo "<br />No se ha podido actualizar el registro. <br />";
					$actualizado = false;
				}

				return $actualizado;//return true if registro actualizado

			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function eliminar($accion, $eliminar) {
			#DELETE FROM nombre_tabla WHERE condicion;
			$conexion = parent::conectar();
			if ($accion === 'todos') {
				try {
					$query = "DELETE FROM estudiantes";
					//cuando el execute no tiene parametro, se elimina toda la informacion.
					$eliminado = $conexion->prepare($query)->execute();
					//cuenta los row afectados por el sql statement
					$count = $stmt->rowCount(); 


					if ($count > 0){//si es mayor a cero, borro la fila
						echo "<br />Se han elminado todos los registros. <br />";
						$eliminado = true;
					}else{
						echo "<br />No se ha podido eliminar los registros. <br />";
						$eliminado = false;
					}

					return $eliminado;

				} catch (Exception $e) {
					exit("ERROR Line 94: ".$e->getMessage());
				}
			} else {
				try {

					$query = "DELETE FROM estudiantes WHERE email=:email";
					//se ejecuta basandose en el email contenido en $eliminar
					$stmt = $conexion->prepare($query);
					$stmt->execute($eliminar);

					//cuenta los row afectados por el sql statement
					$count = $stmt->rowCount(); 


					if ($count > 0){//si es mayor a cero, borro la fila
						echo "<br />He eliminado {$eliminar['email']}<br />";
						$eliminado = true;
					}else{
						echo "<br />No se ha podido eliminar {$eliminar['email']}<br />";
						$eliminado = false;
					}

					return $eliminado;
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			}
		}

	}


?>
