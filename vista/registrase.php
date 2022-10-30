<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar</title>

    <!-- Custom fonts for this template-->
    <link href="../vista/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../vista/efectos/sb-admin-2.css" rel="stylesheet">

    
    



</head>

<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img class="imagen-login" src="../vista/imagenes/logo.jpeg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta!</h1>
                            </div>

                            <!--ingresa el controlador y metodo pos que se en cuentra en 
                            la carpeta controler el el archivo se llama usuarios controler -->
                            <form id ="registrarselogin"class="user" method="POST" action="usuarioscontroller.php" enctype="multipart/form-data" >
                                <div class="form-group row">
                                   <!--llama al controlador-->
                                   <input type="hidden" name="action" value="insertar">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="identificacion"
                                            placeholder="numero de identificacion" name="identificacion"required>
                                    </div>

                                    <div class="col-sm-6">

                                        <input type="text" class="form-control form-control-user" id="nombre"
                                            placeholder="Nombres" name ="nombre"required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="apellido"
                                            placeholder="Apellidos" name="apellido"required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="usuario"
                                            placeholder="Nombre de Usuario" name="usuario"required>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        placeholder="Email " name="email" required>
                                </div>
                                

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="contrasena" placeholder="Contraseña" name="contrasena"  required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="contrasena" placeholder="Confirmar Contraseña" name ="contrasena"required>
                                    </div>
                                </div>
                              <button type="submit" class="btn btn-dark btn-user btn-block">
                              Registrar Usuario</button>
                
                                <hr>
                                <a href="login.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registra con Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a  class="small" href="recuperarcontraseña.php">Has Olvidado tu Contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Ya Tienes cuenta? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vista/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../vista/js/sb-admin-2.min.js"></script>

</body>

</html>