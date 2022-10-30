<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="efectos/index.css">
    <script src="https://kit.fontawesome.com/1b8299affd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>

        <!-- panel de control con los botones distri carnes el paisa, inicio, acerca de nosotros , categorias , ofertas a qui , buscar , ingreso de usuario -->
        <nav class="navbar navbar-expand-lg color-navba ">
            <img class="imagen-logo" src="imagenes/logo.jpeg" alt="">
            <div class="container-fluid menu">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="cliente.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acercadenosotros.php">Acerca de nosotros</a>
                        </li>
                        <li class="nav-item dropdown color-panel">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="abarrotes.php">Abarrotes</a></li>
                                <li><a class="dropdown-item" href="aseo.php">Aseo</a></li>
                                <li><a class="dropdown-item" href="dulceria.php">Dulceria</a></li>
                                <li><a class="dropdown-item" href="licores.php">Licores</a></li>
                                <li><a class="dropdown-item" href="#">Lacteos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="cliente.php">Seguimiento de compras</a>
                        </li>
                        <li class="nav-item">
                            <a href="abarrotes.php" class="nav-link">Ofertas Aqui</a>
                        </li>
                    </ul>
                    <nav class="navbar bg-opacity-100">
                        <div class="container-fluid">
                            <form class="d-flex " role="search">
                                <button class="btn btn-outline-dark color-buton img-1" type="submit"><i
                                        class="fa-solid fa-cart-shopping"></i></button>
                                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                                <button class="btn btn-outline-dark color-buton"
                                    type="submit"><a>Buscar</a></button><br>
                            </form>

                            <!-- Button trigger modal formulario desplegable  -->
                            <button type="button" class="btn btn btn-outline-dark color-buton" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class="fa-solid fa-user"></i><a>Nombre de Usuario </a></button>

                            <!--formulario desplegable cuando da click en en boton ingreso de usuarios -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title " id="staticBackdropLabel"><i
                                                    class="fa-solid fa-user-check"></i>Usuario</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                                
                                        </div>
                                        <!--caja de texto para formulario de inicio de sesion -->
                                    
                                        <div class="modal-content button-modal">
                                            <button type="button" class="btn btn-outline-dark color-buton">Recuperar Contraseña</button>
                                        </div>
                                        <div class="modal-content button-modal">
                                            <a  href="index.php"><button type="button" class="btn btn-outline-dark color-buton">Salir</button></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </nav>
    </header>
                   