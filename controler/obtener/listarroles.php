<?php
require "../../database/database.php";

$conexion  = new Conexion();
$pdo = $conexion->getConexion();

$sql = "SELECT * FROM tblrol";

$stm = $pdo->query($sql);

$response = $stm->fetchAll(PDO::FETCH_ASSOC);
$rownum = $stm->rowCount();

if($rownum == 0){
    $response['ok'] = false;
    $response['status'] = 204;
    $response['data'] = null;
}
echo json_encode($response);