<?php

#interfaces->interface
interface Requerimiento {
	
	public function asignarRequerimiento($listado);
	public function obtenerRequerimiento();
}

interface Conocimiento {
	public function asignarConocimiento($listado);
	public function obtenerConocimiento();
}


class Curso  implements Requerimiento, Conocimiento {

	private $titulo;
	private $duracion;
	private $costo;
	private $moneda;
	private $profesor;
	private $disponible;
	private $listadoRequerimientos;
	private $listadoConocimientos;




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
	public function asignarTitulo($titulo){
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

	#interfaces metodos
	public function asignarRequerimiento($listado){
		$this->listadoRequerimientos = $listado;
	}

	public function obtenerRequerimiento(){
		if (!empty($this->listadoRequerimientos)) {
			// var_dump($this->listadoRequerimientos);
			foreach ($this->listadoRequerimientos as $requerimiento) {
				echo "<p>".$requerimiento."</p>";
			}
		}else{

				echo "<p>".$requerimiento."</p>";
		}
	}

	public function asignarConocimiento($listado){

		$this->listadoConocimientos = $listado;
	}
	public function obtenerConocimiento(){
		
		if(!empty($this->listadoConocimientos)){
			foreach ($this->listadoConocimientos as $conocimiento) {
				echo "<p>".$conocimiento."</p>";
			}
		}else{
			echo "<p>".$conocimiento."</p>";
		}
	}



}//fin de la clase Curso


	// $curso3 = new Curso('POO en PHP', 'David Cordoba', '3 Sesiones', 10, true); 
	// echo $curso3->obtenerTitulo();

	// echo "Codigo esta sirviendo";

?>