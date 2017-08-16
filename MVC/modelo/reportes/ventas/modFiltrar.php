<?php
	include_once 'modelo/masterModel.php';
	class modFiltrar extends masterModel
	{
		function selectClientes(){
			// Crear Objeto
			$objFiltrar = new modFiltrar();
			// SQL para listar los clientes
			$sqlClientes = "SELECT * FROM clientes ORDER BY clie_nombres";
			// Guardar la lista de clientes en una variable
			$clientes = $objFiltrar->selectObjeto($sqlClientes);
			// Mostrar los options
			while($cliente = mysqli_fetch_object($clientes)){
				echo "<option value='".$cliente->clie_identificacion."'>".$cliente->clie_nombres." ".$cliente->clie_apellidos."</option>";
			}
		}
		function selectProductos(){
			// Crear Objeto
			$objFiltrar = new modFiltrar();
			// SQL para listar los productos
			$sqlProductos = "SELECT * FROM productos";
			// Guardar la lista de productos en una variable
			$productos = $objFiltrar->selectObjeto($sqlProductos);
			// Mostrar los options
			while($producto = mysqli_fetch_object($productos)){
				echo "<option value='".$producto->prod_codigo."'>".$producto->prod_codigo." | ".$producto->prod_descripcion."</option>";
			}
		}
	}
?>