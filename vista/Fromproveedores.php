<?php

include_once '../database/database.php';
// se llama la sesion del controlador usuario.php que se creo ' $_SESSION['usuario_sesion ']= $nombreusuario_tabla;'
session_start();

$conexion = new conexion();
// ese objeto conexion lo llamamos con el metodo (getconexion ) con la variable
  $con = $conexion->getconexion();

?>

<body>
<?php require ('./layout/headerpaneladministrativo.php')?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lista Proveedores</h1>

                    <div class="col-log-3" >
                        <a href="fromagregarproveedor.php" class="btn btn-success btn-sm mb3">Agregar proveedor</a>
                    </div>
                    <br>
                    <!-- DataTales Example -->
                    
                        <div class="table-responsive">
                                <table class="m-7" id="provedor">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Pagina web</th>
                                        <th>ciudad</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                </table>
                          </div>
                    </div>
            <!-- End of Main Content -->
             </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <?php require ('./layout/footerpaneladministrativo.php')?>  
            
            <script src= "../vista/js/demo/listar.js" ></script>  