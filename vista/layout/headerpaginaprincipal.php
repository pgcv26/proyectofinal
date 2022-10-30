

<!doctype html>

<html lang="es">
<!--admin lai-->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1b8299affd.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="vista/efectos/index.css">
    <title>index</title>
</head>

<body>
  
  <header>

    <!-- panel de control con los botones distri carnes el paisa, inicio, acerca de nosotros , categorias , ofertas a qui , buscar , ingreso de usuario -->
    <nav class="navbar navbar-expand-lg color-navba color-navba">
        <img class="imagen-logo" src="vista/imagenes/logo.jpeg" alt="">
        <div class="container-fluid menu">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vista/acercaindex.php">Acerca de nosotros</a>
                    </li>
                   
                </ul>
                
                <nav class="navbar bg-opacity-100">
                    <div class="container-fluid">
                        <form class="d-flex " role="search">
                            <button class="btn btn-outline-dark color-buton img-1" type="submit"><i
                                    class="fa-solid fa-cart-shopping color-buton"></i></button>
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-outline-dark color-buton"
                                type="submit"><a>Buscar</a></button><br>
                        </form>
                        <!-- Button trigger modal formulario desplegable  -->
                        <button type="button" class="btn btn btn-outline-dark color-buton" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="fa-solid fa-user "></i><a class="text-decoration-none" href="vista/login.php" >Ingreso Usuarios</a></button>

                    </div>
                </nav>
            </div>
        </div>
    </nav>
</header>

