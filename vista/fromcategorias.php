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
                        
            <!-- Button trigger modal para agregar categorias -->
            
            <button type="button" class="btn btn-success btn-sm mb3" data-bs-toggle="modal"
             data-bs-target="#agregar">agregar categorias</button>
            
              
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
            <script src= "../vista/js/demo/alertasbotones.js" ></script>  
          
            
            <!-- Modal para agregar categorias-->
            <form  class="row" action= "../controler/registrar/registrarcategoria.php" method="POST">
                <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Categorias</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-12">
                                <label form="imageninput" class="form-label" >Nombre categoria</label>
                                <input type="text" id="categoria" name="categoria" class="form-control" placeholder="ingrese categoria">
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                    </div>
                </div>
                </div>
             </form>

                  <!-- Modal para agregar para actualizar  categorias-->
            <form  id="categoria"  class="row" action= "../controler/actualizar/actualizarcategoria.php" method="POST">
                <div class="modal fade" id="actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Categorias</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="col-6">
                            
                                <!--hidden-->
                                <input type="hidden" id ="idcategoria" name="idcategoria" value ="  " />
                            </div>
                            <div class="col-6">
                                <label form="imageninput" class="form-label">Nombre categoria</label>
                                <input type="text"  id="categoriaActualizar" name="categoriaActualizar"  placeholder="ingrese categoria"/>
                            </div>
            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
                        <button type="submit" onclick="actualzar()" class="btn btn-success">Aztualizar</button>
                    </div>
                    </div>
                </div>
                </div>
             </form>
                
            <?php require ('./layout/footerpaneladministrativo.php')?>  

            

