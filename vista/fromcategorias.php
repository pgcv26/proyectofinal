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
                    <h1 class="h3 mb-2 text-gray-800">Lista categorias</h1>

                    <div class="col-log-3" >
                        <a href="fromagregarcategoria.php" class="btn btn-success btn-sm mb3">Agregar categorias</a>
                    </div>
                    <br>
                    <!-- DataTales Example -->
                    
                        <div class="table-responsive">
                                <table class="m-9" id="categoria">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Nombre</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                </table>
                          </div>
                      

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <script src= "../vista/js/demo/listar.js" ></script>  

            <?php require ('./layout/footerpaneladministrativo.php')?>  
            

