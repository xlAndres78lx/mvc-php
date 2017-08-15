<?php
	// Obtener nombre de modulo/controlador/funcion para el sidebar
	$sbmodulo = $modulo; $sbcontrolador = $sbmodulo.'/'.$controlador; $sbfuncion = $sbcontrolador.'/'.$funcion;
?>
		<!-- Navegación lateral -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                	<li>
                		<a href="#" class="waves-effect waves-dark <?php echo ($sbmodulo=='reportes') ? 'active-menu':''; ?>">
						<i class="fa fa-address-card"></i> Reportes<span class="fa arrow"> </span></a>
                        <ul class="nav nav-second-level">
                            <li>
  								<a href="#" class="<?php echo ($sbcontrolador=='reportes/ventas') ? 'active-menu':''; ?>">
  								<i class="fa fa-address-card"></i> Ventas<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo getUrl('reportes','ventas','filtrar'); ?>" class="<?php echo ($sbfuncion=='reportes/ventas/filtrar') ? 'active-menu':''; ?>"> Filtrar</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="<?php echo ($sbcontrolador=='reportes/comisiones') ? 'active-menu':''; ?>">
                                <i class="fa fa-address-card"></i> Comisiones<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo getUrl('reportes','comisiones','filtrar'); ?>" class="<?php echo ($sbfuncion=='reportes/comisiones/filtrar') ? 'active-menu':''; ?>"> Filtrar</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- FIN Navegación lateral -->
