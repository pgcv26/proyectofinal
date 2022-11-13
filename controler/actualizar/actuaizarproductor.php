
<?php
include_once "../../database/database.php";
$conexion = new conexion();
// ese objeto conexion lo llamamos con el metodo (getconexion ) con la variable
$pdo = $conexion->getconexion();



$idProducto=1;
$nombre='arrozzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz';


$sql=" UPDATE tblproducto SET proNombreProducto='$nombre' WHERE idProducto='$idProducto'";

$stm=$pdo->prepare($sql);

$stm->bindParam(':idProducto',$idProducto);

$stm->execute();