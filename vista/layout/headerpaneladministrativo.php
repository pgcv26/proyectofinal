
<?php
// se llaman todas las seciones en los formularios que quiere visualizar (prueba)
if (isset($_SESSION['usuario_sesion'])) {
    ?>
        <!DOCTYPE html>
<html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            
            <title>Categorias</title>
            <!-- Custom styles for this template -->
            <script src = "../vista/js/jquery-3.6.1.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
            <link href="efectos/sb-admin-2.css" rel="stylesheet">       
                
            <!--link iconos-->
            <script src="https://kit.fontawesome.com/1b8299affd.js" crossorigin="anonymous"></script>
            

        </head>

        <body id="page-top">

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="paneladministrativo.php">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fa-solid fa-store"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Mini Market<sup></sup></div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    </li>

                    <!-- Nav Item - Tables -->
                    <li class="nav-item ">
                        <a class="nav-link" href="listausuarios.php">
                            <i class="fa-solid fa-user-group"></i>
                            <span>Lista Usarios</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="fromfactura.php">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                            <span>Factura</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="fromcategorias.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>categoria</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="fromproductos.php">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>Ingreso de Productos</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="Fromproveedores.php">
                            <i class="fa-solid fa-truck-fast"></i>
                            <span>Proveedores</span></a>
                    </li> 
                    <li class="nav-item ">
                        <a class="nav-link" href="fromdetalle.php">
                            <i class="fa-solid fa-pen"></i>
                            <span>Detalle</span></a>
                    </li> 
                    <li class="nav-item ">
                        <a class="nav-link" href="frominventario.php">
                            <i class="fa-solid fa-lock"></i>
                            <span>Inventario</span></a>
                    </li> 

                    <li class="nav-item ">
                        <!--se llama la sesion para que se cierre que esta en la parte de arriba -->
                        <a class="nav-link" href="../database/cerrar_session.php">
                        <i class="fa-solid fa-arrow-right"></i>
                            <span>Cerrar sesion </span></a>
                    </li> 
                    

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <form class="form-inline">
                                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </form>

                            <!-- Topbar Search -->
                            <form
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                        aria-labelledby="searchDropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="Search for..." aria-label="Search"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>


                                <div class="topbar-divider d-none d-sm-block"></div>


                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre_usuario_sesion; ?></span>
                                        <img class="img-profile rounded-circle"
                                            src="imagenes/logo.jpeg">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            compras
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="index.php">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Salir
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->
    <?php
}else {
    header("location: ../index.php");
}
?>


