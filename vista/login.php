

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src = "../vista/js/jquery-3.6.1.min.js"></script>
    <!--stilos formulario-->
    <link href="../vista/efectos/sb-admin-2.css" rel="stylesheet">


</head>

<body class="bg-gradient-dark">

    <div class="container">

        <!-- Outer Row -->
        <div   class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-img ">
                                <img class="imagen-login" src="../vista/imagenes/logo.jpeg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>

                                    <!--conexcion base de datos -->
                                    <?php
                                    include_once '../database/database.php';
                                    
                                    ?>


                                    <form id="formlogin" class="user" method="POST" action="#" enctype="multipart/form-data">
                                        <!--se nombra un id respuesta el cual se llama desde el js validar usuarios para que 
                                        se muestre un alerta al ingresar usuario co contraseña si es correcto se muestra usuario correcto 
                                    si es incorecto se muestra usuario incorrecto -->
                                        <div id="respuesta"></div>
                                     <br>
                                        <div class="form-group">
                                            <input type="usuario" class="form-control form-control-user"
                                                id="usuario" aria-describedby="emailHelp"
                                                placeholder="usuario" >
                                        </div>
                                        <div class="form-group">
                                            <input type="new-password" class="form-control form-control-user"
                                                id="contrasena" placeholder="Contraseña" >
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                
                                                <label class="custom-control-label" for="customCheck">Recordar</label>
                                            </div>
                                        </div>

                                        <button  id="ingresar"  class="btn btn-dark btn-user btn-block">
                                        Ingresar</button>


                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> iniciar con Google
                                        </a>
                                      
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="recuperarcontraseña.php">Recuperar contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../vista/registrase.php">Registrarse!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


  <!--se llama este script de la carpeta js/demo/validar usuarios donde de muestra 
la logica para enviar los datos del formulario a js -->
    <script src ="../vista/js/demo/validausuarios.js"></script>
 

</body>

</html>