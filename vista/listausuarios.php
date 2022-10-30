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

                    <div class="col-log-3" >
                        <a href="fromagregarusuario.php" class="btn btn-success btn-sm mb3">Agregar Usuarios</a>
                    </div>
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
            <?php require ('./layout/footerpaneladministrativo.php')?>   
          
<script src= "../vista/js/demo/listar.js" ></script>   


