<?php

	function conecta(){

		try{
			//localizacion del servidor de DB y nombre de la DB
			$cadena = 'mysql:host=localhost;dbname=cursophp';
			                            //usuario , password de la DB
			$conexion = new PDO ($cadena, 'root','');

			return true;

		}catch (PDOException $e){

			echo "ERROR: ". $e->gnupg_geterror();
		}
	}



?>