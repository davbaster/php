<?php

class Curso {
	public $nombre;
	public $duracion;
	public $costo;
	public $moneda;
	public $profesor;
	public $disponible;

	public function imprimirInfo(){
	return "El curso se llama ".$this->nombre." y el profesor que lo imparte es ".$this->profesor."<br /> ";
	}

	public function validaDisponibilidad(){
		return (($this->disponible) ? "Esta disponible.<br />" : "No esta disponible<br /> ") ;
	}
}

$php = new Curso();

$php->nombre = 'POO en PHP';
$php->duracion = '3 Sesiones';
$php->costo = 10;
$php->moneda = 'USD';
$php->profesor = 'Yesi Days';
$php->disponible = false;

// var_dump($php);

$javascript = new Curso();

$javascript->nombre = 'Javascript desde cero';
$javascript->duracion = '6 Sesiones';
$javascript->costo = 0;
$javascript->moneda = 'USD';
$javascript->profesor = 'Alvaro Felipe';
$javascript->disponible = true;

// var_dump($javascript);

// imprimir curso


echo $php->imprimirInfo();
echo $php->validaDisponibilidad();
echo $javascript->validaDisponibilidad();

?>