<?php
  $uri_actual = $_SERVER['REQUEST_URI'];
  $ruta_especifica = parse_url($uri_actual, PHP_URL_PATH);    
?>
<aside class="main-sidebar elevation-4 sidebar-dark-danger">
    <!-- Brand Logo -->
    <a href="view/src/index3.html" class="brand-link bg-white">
      <img src="view/src/img/sistema/logo.png" alt="SiteTecSol Logo" class="brand-image" style="opacity: .8">      
    </a>

<!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="view/src/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="home" class="nav-link <?php if ($ruta_especifica == "/home"): ?> active <?php endif ?>">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Inicio</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="usuarios" class="nav-link <?php if ($ruta_especifica == "/usuarios"): ?> active <?php endif ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Usuarios</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="clientes" class="nav-link <?php if ($ruta_especifica == "/clientes"): ?> active <?php endif ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Clientes</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="proveedores" class="nav-link <?php if ($ruta_especifica == "/proveedores"): ?> active <?php endif ?>">
                    <i class="far fa-id-card"></i>
                    <p>Proveedores</p>
                </a>
            </li>
           
            <li class="nav-item">
                <a href="proyectos" class="nav-link">
                    <i class="fas fa-folder"></i>
                    <p>
                        Proyectos
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/proyectosActivos" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Activos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/proyectosPosibles" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Posibles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/proyectosTerminados" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Terminados</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/proyectosCancelados" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Cancelados</p>
                        </a>
                    </li>
               
                </ul>
            </li>

            <li class="nav-item">
                <a href="/ticketsSoporte" class="nav-link">
                    <i class="fas fa-ticket-alt"></i>
                    <p>
                        Tickets Soporte
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    
                    <li class="nav-item">
                        <a href="/ticketsActivos" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Activos</p>
                        </a>
                    </li>                   
                    <li class="nav-item">
                        <a href="/ticketsTerminados" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Terminados</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/ticketsCancelados" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Cancelados</p>
                        </a>
                    </li>
               
                </ul>
            </li>
            
            <li class="nav-item">
                <a href="/documentos" class="nav-link">
                    <i class="fas fa-file"></i>
                    <p>
                        Documentos
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/contratos" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contratos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/presupuestos" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Presupuestos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/renovaciones" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Renovaciones</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="ventas" class="nav-link <?php if ($ruta_especifica == "/ventas"): ?> active <?php endif ?>">
                    <i class="fas fa-hand-holding-usd"></i>
                    <p>Ventas</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="mensajes" class="nav-link <?php if ($ruta_especifica == "/mensajes"): ?> active <?php endif ?>">
                    <i class="fas fa-comment"></i>
                    <p>Mensajes</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="servicios" class="nav-link <?php if ($ruta_especifica == "/servicios"): ?> active <?php endif ?>">
                    <i class="fas fa-hand-holding-heart"></i>
                    <p>Servicios</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/salir" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Cerrar sesión</p>
                </a>
            </li>
        </ul>
        
        </nav>
        <!-- /.sidebar-menu -->
    </div>
<!-- /.sidebar -->
</aside>