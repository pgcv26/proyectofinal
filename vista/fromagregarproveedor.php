<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroUsuarios</title>
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
            <a  class="navbar-brand" href="Fromproveedores.php">Lista Proveedores</a>  
          </div>
        </div>
      </nav>

    <h1 class="text-center">Registro Proveedores</h1>
        <br>
    <div class="container ">
        <form class="row ">
            <div class="col-6">
                <label form="nombreinput" class="form-label" >Nombres Proveedor:</label>
                <input type="nombre" class="form-control" id="nombreinput" placeholder="Ingrese Nombres">
            </div>

            <div class="col-6">
                <label form="nitinput" class="form-label" >Nit Proveedor:</label>
                <input type="nit" class="form-control" id="nitinput" placeholder="Ingrese nit proveedor">
            </div>

            <div class="col-6">
                <label form="ciudadinput" class="form-label" >Ciudad:</label>
                <input type="ciudad" class="form-control" id="ciudadinput" placeholder="Ingrese ciudad">
            </div>

            <div class="col-6">
                <label form="telefonoinput" class="form-label" >Telefono:</label>
                <input type="telefono" class="form-control" id="telefonoinput" placeholder="Telefono">
            </div>
            <div class="col-6">
                <label form="direccioninput" class="form-label" >Direccion:</label>
                <input type="direccion" class="form-control" id="direccioninput" placeholder="Direccion">
            </div>

            <div class="col-6">
                <label form="correoinput" class="form-label" >Correo:</label>
                <input type="correo" class="form-control" id="correoinput" placeholder="Ingrese Correo">
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