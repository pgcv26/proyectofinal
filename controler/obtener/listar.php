    <?php

include_once "../../database/database.php";

$conexion = new conexion();
// ese objeto conexion lo llamamos con el metodo (getconexion ) con la variable
$con = $conexion->getconexion();

$sql = "CALL verlistado()";
$stm = $con->query($sql);

if($resultado=$stm->rowCount()){
    $jsnDatos = array();
    $responses= $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach ($responses as $row) {
        $jsnDatos[]=$row;
    }
    $resultado=array(
        "draw" => 1,
        "recordsTotal" => count($jsnDatos),
        "recordsFiltered" => count($jsnDatos),
        "data" => $jsnDatos
    );

    echo json_encode($resultado,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
}


?>