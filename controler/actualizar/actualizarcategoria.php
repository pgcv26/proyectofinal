<?php
include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

   
    
    $idcategoria = $_POST['idcategoria'];
    $categoria = $_POST['categoriaActualizar'];
    //$categoria ='otros';
            
            // tabla usuario update
            $sql="Update tblcategoria Set CatNombre='$categoria' Where idCategoria='$idcategoria'";
            $stm = $con->prepare($sql);
            $stm->bindParam(':idCategoria',$idcategoria);
            $stm->execute();