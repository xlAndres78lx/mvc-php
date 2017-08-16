<?php
class ventasController{
	function filtrar(){
		include_once 'modelo/reportes/ventas/modFiltrar.php';
		$objFiltrar = new modFiltrar();
		include_once 'vista/reportes/ventas/visFiltrar.php';
	}
	function listar(){
		include_once 'modelo/reportes/ventas/modListar.php';
		$objListar = new modListar();
		include_once 'vista/reportes/ventas/visListar.php';
	}
}
?>