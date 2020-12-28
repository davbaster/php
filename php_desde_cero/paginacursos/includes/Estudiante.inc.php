<?php

	Class Estudiante extends Persona {

		private $pais;

		public function __construct($nombre, $apellido, $email, $pais){

			// llamando al constructor padre
			parent::__construct($nombre, $apellido, $email);
			$this->pais = $pais;
		}

	}//final clase



?>