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
			echo "Hola {$this->nombre}, espero que te lleguen los correos a {$this->$email}";
		}
	}

	$david = new Persona("David", "Cordoba", "cajina@gmail.com");
	$david.bienvenida();

?>