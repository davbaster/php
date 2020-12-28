<?php

	/**
	 * 
	 */
	class Backend extends Curso
	{
		
		public function __construct()
		{
			parent::__construct($titulo, $profesor, $duracion, $costo, $disponible);
		}
	}

?>