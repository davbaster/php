<?php

	class Persona {

		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->email = $email;
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

		private function esNombreValido($nombre){

			try{

				if(empty($nombre)){
					throw new Exception("Tiene que ingresar un nombre valido");
					  
				}else{
					//todavia no hemos decidido que va a pasar aqui
					return true;
				}

			}catch ( Exception $error){

				echo $error->getMessage();
				return false;
			}
		}
	}


	// echo "hola";
	

?>