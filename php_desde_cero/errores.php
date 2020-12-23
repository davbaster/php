<?php


#Desactivar toda notificacion de error
error_reporting(1);
$nombre ='hola';
echo $nombre;
echo $nombres;

#E_NOTICE informa de variables no inicializadas o capturadas

#guarda errores en un log.
ini_set("log_error", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log("Hay un error en pagina errores.php");

?>

