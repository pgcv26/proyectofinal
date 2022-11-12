    <?php
    include_once "../../database/database.php";
        $conexion = new conexion();
    // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
        $con = $conexion->getconexion();

    
    $idproveedor = $_POST['idactualizar'];
    $nombre = $_POST['nombreactualizar'];
    $pagina = $_POST['paginaactualizar'];
    $telefono = $_POST['telefonoactualizar'];
    $ciudad = $_POST['actualizarciudad'];
        //$categoria ='otros';
                
                // tabla usuario update
                $sql="Update tblproveedor Set ProNombre='$nombre',ProPaginaweb='$pagina',
                id_ciudad='$ciudad',telefono='$telefono' Where idProveedor='$idproveedor'";
                $stm = $con->prepare($sql);
                $stm->bindParam(':ProNombre',$nombre);
                $stm->bindParam(':ProPaginaweb',$pagina);
                $stm->bindParam(':id_ciudad',$ciudad);
                $stm->bindParam(':telefono',$telefono);
                $stm->execute();