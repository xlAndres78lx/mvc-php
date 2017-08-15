<?php
	session_start();
	// Variables modulo/controlador/funcion
	$modulo = isset($_GET['modulo']) ? strtolower($_GET['modulo']) : null;
	$controlador = isset($_GET['controlador']) ? strtolower($_GET['controlador']) : null;
	$funcion = isset($_GET['funcion']) ? strtolower($_GET['funcion']) : null;
	// Includes
	include_once 'lib/helpers.php';
	include_once 'vista/template/head.php';
	include_once 'vista/template/header.php';
	include_once 'vista/template/sidebar-left.php';
	// Modulos
	if( !isset($modulo) && !isset($controlador) && !isset($funcion) ){
		echo "xd";
	} else {
		// Verificar si existe el modulo
		if (is_dir("controlador/$modulo")) {
			// Verificar si existe el archivo controlador
			if(file_exists("controlador/$modulo/{$controlador}Controller.php")){
				// Verificar si existe la función
				include_once("controlador/$modulo/{$controlador}Controller.php");
				$nombreClase = "{$controlador}Controller";
				$objControlador = new $nombreClase;
				if (method_exists($objControlador, $funcion)){
    				$objControlador->$funcion();
    			} else {
    				echo "La función no existe.";
    			}
			} else {
				echo "El archivo controlador no existe.";
			}
		} else {
			echo "El modulo no existe.";
		}
	}
	include_once 'vista/template/footer.php';
?>