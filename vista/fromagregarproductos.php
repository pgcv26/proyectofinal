<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registroproductos</title>
    <script src="https://kit.fontawesome.com/1b8299affd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a  class="navbar-brand" href="paneladministrativo.php">salir</a>
            <a  class="navbar-brand" href="fromproductos.php">Lista Productos</a>  
          </div>
        </div>
      </nav>

    <h1 class="text-center">Registro Productos</h1>
        <br>
    <div class="container ">
        <form class="row ">
            <div class="col-6">
                <label form="nombreinput" class="form-label" >Nombre:</label>
                <input type="nombre" class="form-control" id="nombreinput" placeholder="Ingrese Nombres">
            </div>

            <div class="col-6">
                <label form="cantidadinput" class="form-label" >Cantidad:</label>
                <input type="cantidad" class="form-control" id="cantidadinput" placeholder="Ingrese la cantidad">
            </div>

            <div class="col-6">
                <label form="precioinput" class="form-label" >Precio:</label>
                <input type="precio" class="form-control" id="precioinput" placeholder="Ingrese precio">
            </div>

            <div class="col-6">
                <label form="categoriainput" class="form-label" >Categoria</label>:</label>
                <input type="categoria" class="form-control" id="categoriainput" placeholder="Ingrese la acategoria">
            </div>
            <div class="col-6">
                <label form="fechavencimientoinput" class="form-label" >Fecha Vencimiento:</label>
                <input type="fechavencimiento" class="form-control" id="fechavencimientoinput" placeholder="Ingrese la Fecha de vencimiento">
            </div>

            <div class="col-6">
                <label form="correoinput" class="form-label" >Precio Total:</label>
                <input type="preciototal" class="form-control" id="preciototalinput" placeholder="Ingrese precio total">
            </div>
        </form>
        <br>
            <button  onclick="ingresar()" type="button" class="btn btn-success">Guardar</button>
            <br>
            <br>
    </div>
    <script src="js/demo/elertas.js" ></script>
</body>

</html>