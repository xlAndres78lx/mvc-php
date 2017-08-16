        <!-- PAGE WRAPPER -->
        <div id="page-wrapper">
            <!-- Información página actual -->
            <div class="header">
                <h1 class="page-header">Lista informe ventas</h1>
                <ol class="breadcrumb">
    				<li>Reportes</li>
    				<li class="active">Listar</li>
    			</ol>				
    		</div>
            <!-- FIN Información página actual -->
            <!-- Cuerpo página actual -->
<div id="page-inner">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-content">
				<div class="input-field col s6">
                    <table>
                    <?php $objListar->listar(); ?>
                    </table>
                </div>
			</div>
		</div>
	</div>