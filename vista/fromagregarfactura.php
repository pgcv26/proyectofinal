<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisFacuras</title>
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
            <a  class="navbar-brand" href="fromfactura.php">Lista Facturas</a>  
          </div>
        </div>
      </nav>

    <h1 class="text-center">Registro Usuarios</h1>
        <br>
    <div class="container ">
        <form class="row ">
            <div class="col-6">
                <label form="fechainput" class="form-label" >Fecha:</label>
                <input type="fecha" class="form-control" id="fechainput" placeholder="Ingrese Fecha">
            </div>

            <div class="col-6">
                <label form="clienteinput" class="form-label" >Nombre Cliente:</label>
                <input type="cliente" class="form-control" id="clienteinput" placeholder="Nombre cliente">
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

            <div class="col-12">
                
                <label form="comentariosinput" class="form-label" >Comentarios:</label>
                <abbr title="descripcion de la factura o observaciones que se presentaron" ><i class="fa-regular fa-circle-question"></i></abbr></label><br>
                <textarea type="comentario" class="form-control" id="comentariosinput" placeholder="Comentarios"></textarea>
                <br>
            </div>
            
            
        </form>

            <button  onclick="ingresar()" type="button" class="btn btn-success">Guardar</button>
            <br>
            <br>
    </div>
    <script src="js/demo/elertas.js" ></script>
</body>

</html>