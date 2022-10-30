<?php

include_once ('../database/database.php');
include_once ('layout/datos_usuario.php');
// se llama la sesion del controlador usuario.php que se creo ' $_SESSION['usuario_sesion ']= $nombreusuario_tabla;'
session_start();

?>
<body >
            <?php require ('./layout/headerpaneladministrativo.php')?>          

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <!--contenido-->
                 <img class="imagen-loginpa" src="imagenes/logo.jpeg" alt="" >

                </div>
               

            </div>

            <!-- Footer -->
            <?php require ('./layout/footerpaneladministrativo.php')?>

</body>
