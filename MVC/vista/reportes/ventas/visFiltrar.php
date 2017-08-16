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
                <form action="<?php echo getUrl('reportes','ventas','listar'); ?>" method="POST">
				<div class="input-field col s6">Fecha inicio <?php input('date','fechaInicio')?></div>
				<div class="input-field col s6">Fecha fin <?php input('date','fechaFin')?></div>
                <div class="input-field col s6">Tipo informe 
                    <select name="tipoInforme" style="display:block;">
                        <option value="0">Seleccione</option>
                        <option value="1">Detallano</option>
                        <option value="2">Resumido</option>
                    </select>
                </div>
                <div class="input-field col s6">Cliente
                    <select name="cliente" id="cliente" style="display:block;">
                    <option value="0">Seleccione</option>
                    <option value="">Todos</option>
                    <?php $objFiltrar->selectClientes(); ?>
                    </select>
                </div>
                <div class="input-field col s6">Servicio
                    <select name="servicio" id="servicio" style="display:block;">
                        <option value="0">Seleccione</option>
                        <option value="">Todos</option>
                    <?php $objFiltrar->selectProductos(); ?>
                    </select>
                </div>
                <div class="input-field col s6"><?php input('submit','enviar')?></div>
                </form>
			</div>
		</div>
	</div>