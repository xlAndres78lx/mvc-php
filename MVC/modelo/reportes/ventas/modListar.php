<?php
	include_once 'modelo/masterModel.php';
	class modListar extends masterModel
	{
		function listar(){
			// Crear Objeto
			$objListar = new modListar();
			// Extraer los datos del formulario
			extract($_POST);
			// Hacer las condiciones
			if($fechaInicio != "" && $fechaFin != ""){
				$condicion=" AND facturas_venta.fact_fecha BETWEEN '$fechaInicio' AND '$fechaFin' ";
			}
			if($cliente != ""){
				$condicion.=" AND facturas_venta.fact_cliente=$cliente ";
			}
			if($servicio != ""){
				$condicion.=" AND detalle_factura_venta.prod_codigo='$servicio' ";
			}
			// Verificar tipo de detalle 
			if($tipoInforme==1){
				// SQL para listar los productos
				$sqlInforme = "SELECT CONCAT(clientes.clie_nombres, ' ', clientes.clie_apellidos) as Nombre, SUM(facturas_venta.fact_total) as total FROM facturas_venta as facturas_venta, clientes as clientes, detalle_factura_venta as detalle_factura_venta WHERE facturas_venta.fact_cliente = clientes.clie_identificacion AND facturas_venta.fact_no_factura = detalle_factura_venta.fact_no_factura $condicion GROUP BY facturas_venta.fact_cliente";
				// Guardar la lista de productos en una variable
				$informes = $objListar->selectObjeto($sqlInforme);
				// Mostrar la tabla
				echo "<tbody><th>Nombre</th>
                    <th>Total</th></tbody>";
				while($informe = mysqli_fetch_object($informes)){
					echo "<tr>
							<td>".  $informe->Nombre . "</td>
							<td>".  $informe->total . "</td>
						</tr>";
				}
			}
			if($tipoInforme==2){
				// SQL para listar los productos
				$sqlInforme = "SELECT CONCAT(clientes.clie_nombres,' ',clientes.clie_apellidos) as Nombre,clientes.clie_identificacion as documento,facturas_venta.fact_fecha as fecha,detalle_factura_venta.prod_codigo as servicio,facturas_venta.fact_paciente as paciente,detalle_factura_venta.cantidad as cantidad,SUM(facturas_venta.fact_total) as total FROM facturas_venta as facturas_venta, clientes as clientes, detalle_factura_venta as detalle_factura_venta WHERE facturas_venta.fact_cliente=clientes.clie_identificacion AND facturas_venta.fact_no_factura=detalle_factura_venta.fact_no_factura $condicion GROUP BY fact_cliente";
				// Guardar la lista de productos en una variable
				$informes = $objListar->selectObjeto($sqlInforme);
				// Mostrar la tabla
				echo "<tbody><th>Nombre</th>
					<th>Documento</th>
					<th>Fecha</th>
					<th>Servicio</th>
					<th>Paciente</th>
					<th>Cantidad</th>
					<th>Total</th></tbody>";
				while($informe = mysqli_fetch_object($informes)){
					echo "<tr>
							<td>".  $informe->Nombre . "</td>
							<td>".  $informe->documento . "</td>
							<td>".  $informe->fecha . "</td>
							<td>".  $informe->servicio . "</td>
							<td>".  $informe->paciente . "</td>
							<td>".  $informe->cantidad . "</td>
							<td>".  $informe->total . "</td>
						</tr>";
				}
			}
		}
	}
?>