<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }
    require '../../config/conexion.php';
    //trae los registros de la db en utf-8
    header("Content-Type: text/html;charset=utf-8");

    $query = "SELECT * FROM servicio";
    
    $resultado = mysqli_query($conexion, $query);

    $salida = array('data' => array());

    if(mysqli_num_rows($resultado) > 0) {

        while($row = mysqli_fetch_array($resultado)) {
            $salida['data'][] = array($row['id'], $row['nombre'], $row['precio']);
        }
    }

    mysqli_close($conexion);
    echo json_encode($salida);
?>