<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registroproveedores</title>
    <script src = "../vista/js/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/1b8299affd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        <form class="row " action= "../controler/registrar/registrarproveedor.php" method="POST">
            <div class="col-6">
                <label form="nombreinput" class="form-label" >Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion">
            </div>
            <div class="col-6">
                <label form="nombreinput" class="form-label" >Nombres Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese direccion">
            </div>
            <div class="col-6">
                <label form="nombreinput" class="form-label" >Nombres Pagina:</label>
                <input type="text" class="form-control" id="pagina" name="pagina" placeholder="Ingrese direccion">
            </div>
            <div class="col-6">
                <label form="nombreinput" class="form-label" >$telefono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese direccion">
            </div>
            <div class="col-6">
                <label >Ciudad:</label>
                <select  class="form-control"name="ciudad" id="ciudad" placeholder="Rol"></select>
            </div>
            
            <div class="col-6">
            <button type="submit" class="btn btn-success" >Guardar</button>
            </div>
            
        </form>
       
    </div>
    <script src="js/demo/listaroles.js" ></script>
</body>

</html>