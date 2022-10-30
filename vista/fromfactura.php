
<?php

include_once '../database/database.php';
// se llama la sesion del controlador usuario.php que se creo ' $_SESSION['usuario_sesion ']= $nombreusuario_tabla;'
session_start();

?>
<body >
<?php require ('./layout/headerpaneladministrativo.php')?>
   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Facturas</h1>

                    <a href="fromagregarfactura.php" class="btn btn-success btn-sm mb3">Agregar Factura</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Iva</th>
                                            <th>Valor</th>
                                            <th>Nombre Cliente</th>
                                            <th>Email</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>notas</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                   
                                        <tr>
                                            <td>agosto 21 2022</td>
                                            <td>19%</td>
                                            <td>$ 230.000</td>
                                            <td>1.026.745.366</td>
                                            <th>vvff@gmail</th>
                                            <th>cr 56 g 56 78 </th>
                                            <td>12344455</td>
                                            <th>mal estipulada</th>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button onclick="eliminar()" type="button" class="btn btn-danger">eliminar</button>
                                                    <a href="fromagregarfactura.php"><button type="button" class="btn btn-success">Actualizar</button></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>enero 23 2022</td>
                                            <td>19%</td>
                                            <td>$ 13.300</td>
                                            <td>1.835.651.489</td>
                                            <th>vvff@gmail</th>
                                            <th>cr 56 g 56 78 </th>
                                            <td>3114567832</td>
                                            <th>mal estipulada</th>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button type="button" class="btn btn-danger">eliminar</button>
                                                    <a href="fromagregarfactura.php"><button type="button" class="btn btn-success">Actualizar</button></a>
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

