<?php

// // funciones anonimas
// $despedida = function(){
// 	echo "Ultima clase de php desde cero, gracias David por el esfuerzo.";
// };

// $despedida();

// FUNCION ANONIMA CLOSURE
function finalizarCurso(Closure $curso, $nombre){
	return $curso($nombre);
};

$php = function($nombre){
	return "<p>Gracias ".$nombre." por finalizar el curso de PHP.";
};

$laravel = function($nombre) {
	return "<p>Gracias ".$nombre." por finalizar el curso de Laravel";
};

echo finalizarCurso($php, 'David');
echo finalizarCurso($laravel, 'David');

?>