<?php
require ("../../database/database.php");
//header('Content-Type: application/json;charset=utf-8');

$con  = new Conexion();
$pdo = $con->getConexion();

$sql = "CALL listacategoria()";

$stm = $pdo->query($sql);

if($resultado = $stm->rowCount()) {
    /* obtener el array de objetos */

    $jsnDatos = array();
    $responses = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach ($responses as $row) {
        $jsnDatos[] = $row;
    }
    $resultado = array(
        "draw" => 1,
        "recordsTotal" => count($jsnDatos),
        "recordsFiltered" => count($jsnDatos),
        "data" => $jsnDatos
    );
    
    echo json_encode($resultado,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
}