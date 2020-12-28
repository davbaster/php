<?php

	/**
	 * 
	 */
	class Frontend extends Curso
	{
		
		public function __construct($titulo, $profesor, $duracion, $costo, $disponible)
		{
			parent::__construct($titulo, $profesor, $duracion, $costo, $disponible);
		}
	}

?>