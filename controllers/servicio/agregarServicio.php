<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }
    require '../../config/conexion.php';

    $valido['success'] = array('success'=>false, 'mensaje'=>'');

    if($_POST) {

        $nombre_servicio = $_POST['nombre_servicio'];
        $precio = $_POST['precio'];

        $query = "INSERT INTO servicio(nombre, precio)
        VALUES('$nombre_servicio', '$precio')";
    
        if(mysqli_query($conexion, $query) === true){
            
            $valido['success'] = true;
            $valido['mensaje'] = 'Servicio guardado correctamente';
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'No se pudo guardar el servicio';
        }
    }
    else {
        $valido['success'] = false;
        $valido['mensaje'] = 'No se guardo';
    }

    mysqli_close($conexion);
    echo json_encode($valido);
?>