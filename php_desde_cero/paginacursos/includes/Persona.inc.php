<?php

	class Persona {

		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email){
			if($this->esNombreValido($nombre)){
				$this->nombre = $nombre;
			}
			if($this->esNombreValido($apellido)){
				$this->apellido = $apellido;
			}

			if ($this->esCorreoValido($email)){
				$this->email = $email;
			}
			
		}

		public function bienvenida(){
		echo "Hola {$this->nombre} {$this->apellido}, espero que te lleguen los correos a {$this->email}.<br />";
		}

		public function despedida(){
			echo "Hola {$this->nombre} {$this->apellido}, gracias por estar con nosotros.";
		}

		public function asignarNombre($nombre){

			if($this->esNombreValido($nombre)){
				$this->nombre = $nombre;
			}

			echo "<br />Nombre {$nombre} asignado correctamente";

		}


		// VALIDACIONES
		// validar nombre
		private function esNombreValido($nombre){
			$esNombreValido = true;

			try{

				if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
  					$nameErr = "Solo letras y espacios en blanco son permitidos / Only letters and white space allowed <br />";
  					$esNombreValido = false;
					throw new Exception("Tiene que ingresar un nombre valido");
					  
				}
				

			}catch ( Exception $error){

				echo $error->getMessage();
				
			}

			return $esNombreValido;
		}

		// validar correo
		//formato correos validos: test@host, test@host.something
		private function esCorreoValido($email){
			$esValido = true; //valor por defecto
			try{

				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Escriba un formato de correo valido<br />";
					$esValido = false; //valor si formato invalido
					throw new Exception("Correo no valido");

				}
				

			}catch (Exception $e ){

				$e->getMessage();
				
			}

			return $esValido;
			
		}//fin esCorreoV


	}//fin clase


	// echo "hola";
	

?>