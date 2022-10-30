<?php

include_once '../database/database.php';
// se llama la sesion del controlador usuario.php que se creo ' $_SESSION['usuario_sesion ']= $nombreusuario_tabla;'
session_start();

?>

<body">

<?php require ('./layout/headerpaneladministrativo.php')?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Inventario</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombres </th>
                                            <th>cantidad ingreso</th>
                                            <th>cantidad Cantidad salida</th>
                                            <th>nombre producto</th>
                                            <th>Ciudad</th>
                                            <th>Telefono</th>
                                            <th>Id Factura</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                   
                                        <tr>
                                            <td>Alpina</td>
                                            <td>123</td>
                                            <td>50</td>
                                            <td>queso Alpina</td>
                                            <td>Bogota</td>
                                            <td>65534233</td>
                                            <td>65</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button  onclick="eliminar()" type="button" class="btn btn-danger">Eliminar</button>
                                                    <button type="button" class="btn btn-success">Actualizar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
     <?php require ('./layout/footerpaneladministrativo.php')?>
</body>

</html>
