<?php


class Curso {

	private $titulo;
	private $duracion;
	private $costo;
	private $moneda;
	private $profesor;
	private $disponible;


	#creando constructor
	public function __construct($titulo, $profesor, $duracion, $costo, $disponible){


		$this->titulo = $titulo;
		$this->duracion = $duracion;
		$this->costo = $costo;
		$this->moneda = 'Dollar';
		$this->profesor = $profesor;
		$this->disponible = $disponible;

	}

	#ENCAPSULACION
	#getter
	public function obtenerTitulo(){
		return $this->titulo;

	}

	public function obtenerProfesor(){
		return $this->profesor;
	}

	#setter
	public function asginarTitulo($titulo){
		$this->titulo = $titulo;
	}

		public function asginarProfesor($profesor){
		$this->profesor = $profesor;
	}



	public function imprimirInfo(){
	return "El curso se llama ".$this->nombre." y el profesor que lo imparte es ".$this->profesor."<br /> ";
	}

	public function validaDisponibilidad(){
		return (($this->disponible) ? "Esta disponible.<br />" : "No esta disponible<br /> ") ;
	}

}

	// $curso3 = new Curso('POO en PHP', 'David Cordoba', '3 Sesiones', 10, true); 
	// echo $curso3->obtenerTitulo();

	// echo "Codigo esta sirviendo";

?>