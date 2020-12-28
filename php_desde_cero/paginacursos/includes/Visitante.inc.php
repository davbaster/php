<?php

	/**
	 * 
	 */
	class Visitante extends Persona
	{
		private $badge;
		
		public function __construct($nombre, $apellido, $email, $badge)
		{
			parent::__construct($nombre, $apellido, $email);
			$this->badge = $badge;
		}


		public function despedida(){
			echo "Hola {$this->nombre} te esperamos en ED team.";
		}
	}


?>