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
                    <h1 class="h3 mb-2 text-gray-800">Lista Usuarios</h1>

                    <button type="button" class="btn btn-success btn-sm mb3" data-bs-toggle="modal"
             data-bs-target="#agregarusuario">Agregar Usuarios</button>

                    <br>
                    <!-- DataTales Example -->
                    
                        <div class="table-responsive">
                                <table class="m-9" id="usuarios">
                                    <thead>
                                        <tr>
                                            <th>Identificacion</th>
                                            <th>Nombre completo</th>
                                            <th>nombre usuario</th>
                                            <th>Rol</th>
                                            <th>Contraseña</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Ciudad</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                </table>    
                          </div>
                      

                </div>
              

         <!-- Modal para agregar usuarios-->
         <form class="row" action= "../controler/registrar/registrarusuarios.php" method="POST">
         <div class="modal fade" id="agregarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Usuarios</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-12">
                <label form="cedulainput" class="form-label" >Cedula:</label>
                <input type="number" class="form-control" id="identificacion"  name="identificacion" placeholder="Ingrese Cedula">
                     </div>
            <div class="col-12">
                <label form="nombreinput" class="form-label" >Nombres:</label>
                <input type="nombre" class="form-control" id="nombre"  name="nombre" placeholder="Ingrese Nombres">
            </div>
            <div class="col-12">
                <label form="nombreinput" class="form-label" >Apellido:</label>
                <input type="nombre" class="form-control"id="apellido"  name="apellido" placeholder="Ingrese apellido">
            </div>

            <div class="col-12">
                <label form="apellidosinput" class="form-label" >Nombre usuario:</label>
                <input type="apellido" class="form-control" id="nombreusuario"  name="nombreusuario" placeholder="Ingrese nombre usuario">
            </div>

            <div class="col-12">
                <label form="contraseñainput" class="form-label" >Contraseña:</label>
                <input type="password" class="form-control" id="contrasena"  name="contrasena" placeholder="Ingrese contraseña">
            </div>

            <div class="col-12">
                <label form="contraseñainput" class="form-label" >Correo:</label>
                <input type="email" class="form-control" id="correo"  name="correo" placeholder="Ingrese correo">
            </div>
            <div class="col-12">
                <label form="contraseñainput" class="form-label" >telefono:</label>
                <input type="number" class="form-control" id="telefono"  name="telefono" placeholder="Ingrese Telefono">
            </div>
            <div class="col-12">
                <label form="contraseñainput" class="form-label" >direccion:</label>
                <input type="number" class="form-control" id="direccion"  name="direccion" placeholder="Ingrese Direccion">
            </div>

            <div class="col-12">
                <label >Rol:</label>
                <select  class="form-control"name="roltipo" id="roltipo"  placeholder="Rol"></select>
            </div>

            <div class="col-12">
                <label >Ciudad:</label>
                <select  class="form-control"name="ciudad" id="ciudad"  placeholder="Rol"></select>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                    </div>
                </div>
                </div>
         </form>



            <!-- Modal para actualizar usuarios-->
      <form class="row" action= "../controler/actualizar/actualizarusuarios.php" method="POST">
            <div class="modal fade" id="actualizarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar usuario </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                   
                        <div class="col-12">
                        <input type="hidden" class="form-control" id="actualizaridentificacion" name="actualizaridentificacion" placeholder="Ingrese Cedula" value="<?=$identificacion['identificacion']?>">
                        </div>
                        <div class="col-12">
                            <label form="nombreinput" class="form-label" >Nombres:</label>
                            <input type="nombre" class="form-control" id="actualizarnombre"  name="actualizarnombre" placeholder="Ingrese Nombres">
                        </div>
                                
                        <div class="col-12">
                            <label form="apellidosinput" class="form-label" >Nombre usuario:</label>
                            <input type="apellido" class="form-control" id="actualizarnombreusuario"  name="actualizarnombreusuario" placeholder="Ingrese nombre usuario">
                        </div>

                        <div class="col-12">
                            <label form="contraseñainput" class="form-label" >Contraseña:</label>
                            <input type="password" class="form-control" id="actualizarcontrasena"  name="actualizarcontrasena" placeholder="Ingrese contraseña">
                        </div>

                        <div class="col-12">
                            <label form="contraseñainput" class="form-label" >Correo:</label>
                            <input type="email" class="form-control" id="actualizarcorreo"  name="actualizarcorreo" placeholder="Ingrese correo">
                        </div>
                        <div class="col-12">
                            <label form="contraseñainput" class="form-label" >telefono:</label>
                            <input type="number" class="form-control" id="actualizartelefono"  name="actualizartelefono" placeholder="Ingrese Telefono">
                        </div>
                      
                        <div class="col-12">
                            <label >Rol:</label>
                            <select  class="form-control"name="actualizarroltipo" id="actualizarroltipo"placeholder="Rol"></select>
                        </div>

                        <div class="col-12">
                            <label >Ciudad:</label>
                            <select  class="form-control"name="actualizarciudad" id="actualizarciudad"placeholder="Rol"></select>
                        </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                    </div>
                </div>
                </div>
      </form>

     <script src= "js/demo/listar.js" ></script>  
    <script src="js/demo/listaroles.js"></script>
            <?php require ('./layout/footerpaneladministrativo.php')?>   
          



