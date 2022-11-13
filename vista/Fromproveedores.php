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

<body>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lista Proveedores</h1>

                    <button type="button" class="btn btn-success btn-sm mb3" data-bs-toggle="modal"
                     data-bs-target="#agregarproveedores">agregar categorias</button>
                    <!-- DataTales Example -->
                    
                        <div class="table-responsive">
                                <table class="m-7" id="provedor">
                                <thead>
                                    <tr>
                                        <th>Numero</th>
                                        <th>Nombre</th>
                                        <th>Pagina web</th>
                                        <th>Telefono</th>
                                        <th>ciudad</th>
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


            <!-- Modal para agregar proeveedores-->
            <form class="row " action= "../controler/registrar/registrarproveedor.php" method="POST">
                <div class="modal fade" id="agregarproveedores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Proveedores</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                         <div class="col-12">
                               <label form="nombreinput" class="form-label" > Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese direccion">
                            </div>
                            <div class="col-12">
                                <label form="nombreinput" class="form-label" >Nombres Pagina:</label>
                                <input type="text" class="form-control" id="pagina" name="pagina" placeholder="Ingrese direccion">
                            </div>

                            <div class="col-12">
                                <label form="nombreinput" class="form-label" >Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese direccion">
                            </div>
                        
                            <div class="col-12">
                                <label >Ciudad:</label>
                                <select  class="form-control"name="ciudad" id="ciudad" placeholder="Rol"></select>
                            </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                    </div>
                </div>
                </div>
             </form>


                  <!-- Modal para actualizar proeveedores-->
             <form class="row " action= "../controler/actualizar/actualizarproveedor.php" method="POST" >
                <div class="modal fade" id="actualizarprovedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Proveedores</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-12">
               
                <input type="hidden" class="form-control" id="idactualizar" name="idactualizar" placeholder="id proveedor">
                    </div>
                    <div class="col-12">
                        <label for="nombreactualizar"> Nombre:</label>
                        <input type="text" class="form-control" id="nombreactualizar" name="nombreactualizar" placeholder="Ingrese direccion">
                    </div>
                    <div class="col-12">
                        <label for= "paginaactualizar">Nombres Pagina:</label>
                        <input type="text" class="form-control" id="paginaactualizar" name="paginaactualizar" placeholder="Ingrese direccion">
                    </div>

                    <div class="col-12">
                        <label for="telefonoactualizar">Telefono:</label>
                        <input type="text" class="form-control" id="telefonoactualizar" name="telefonoactualizar" placeholder="Ingrese direccion">
                    </div>
                
                    <div class="col-12">
                        <label for="actualizar">Ciudad:</label>
                        <select  class="form-control"name="actualizarciudad" id="actualizarciudad" placeholder="Ciudad"></select>
                    </div>
            
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                    </div>
                </div>
                </div>
                
             </form>
             <script src= "js/demo/listar.js" ></script> 
            <script src="js/demo/listaroles.js" ></script>
            <?php require ('./layout/footerpaneladministrativo.php')?>  
    
            
         