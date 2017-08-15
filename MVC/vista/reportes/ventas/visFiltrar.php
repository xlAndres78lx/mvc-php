        <!-- PAGE WRAPPER -->
        <div id="page-wrapper">
            <!-- Información página actual -->
            <div class="header">
                <h1 class="page-header">Consulta informe ventas</h1>
                <ol class="breadcrumb">
    				<li>Reportes</li>
    				<li class="active">Filtrar</li>
    			</ol>				
    		</div>
            <!-- FIN Información página actual -->
            <!-- Cuerpo página actual -->
<div id="page-inner">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-content">
				<div class="input-field col s6">Fecha inicio <?php input('date','fecha-inicio')?></div>
				<div class="input-field col s6">Fecha fin <?php input('date','fecha-fin')?></div>
                <div class="input-field col s6">Cliente
                    <select name="cliente" id="cliente" style="display:block;">
                    <?php $objFiltrar->selectClientes(); ?>
                    </select>
                </div>
                <div class="input-field col s6">Producto
                    <select name="producto" id="producto" style="display:block;">
                    <?php $objFiltrar->selectProductos(); ?>
                    </select>
                </div>
			</div>
		</div>
	</div>