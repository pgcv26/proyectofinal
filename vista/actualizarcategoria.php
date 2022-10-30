

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrocategoria</title>
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
            <a  class="navbar-brand" href="fromcategorias.php">Lista Categorias</a>  
          </div>
        </div>
      </nav>

    <h1 class="text-center">Actualizar Categoria</h1>
        <br>
    <div class="container ">
        <form  id="categoria"  class="row" action= "../controler/actualizar/actualizarcategoria.php" method="POST">
         
        <div class="col-2">
                <label form="imageninput" class="form-label">Numero</label>
                
                <input type="num" id ="idcategoria" name="idcategoria"/>
            </div>
            <div class="col-2">
                <label form="imageninput" class="form-label">Nombre categoria</label>
                <input type="text" id="categoria" name="categoria"  placeholder="ingrese categoria"/>
            </div>
                <br>

            <div class="col-2">
            <button type="submit" class="btn btn-success" >Actualizar</button>
            </div>
        </form>

            
            
    </div>
    <script src="js/demo/listar.js" ></script>
</body>

</html>