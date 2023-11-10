<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }

    require '../../config/conexion.php';
    header("Content-Type: text/html;charset=utf-8");

    $valido['success'] = array('success'=>false, 
    'mensaje'=>"",
    'id'=>"",
    'nombre'=>"",
    'precio'=>"");

    if($_POST) {
        
        $id = $_POST['id'];

        $query = "SELECT * FROM servicio where id = $id;";
        $resultado = mysqli_query($conexion, $query);
        $row = mysqli_fetch_array($resultado);
       
        $valido['success'] = true; 
        $valido['mensaje'] = 'Se encontro el registro'; 
        $valido['id'] = $row['id'];
        $valido['nombre_servicio'] = $row['nombre'];
        $valido['precio'] = $row['precio'];
    }
    else {
        $validp['success'] = false;
        $valido['mensaje'] = 'Error al cargar el Servicio';
    }

    mysqli_close($conexion);
    echo json_encode($valido);
?>