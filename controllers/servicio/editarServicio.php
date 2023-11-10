<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }
    require_once '../../config/conexion.php';

    $valido['success'] = array('success'=>false, 'mensaje'=>'');

    if($_POST) {

        $id = $_POST['id'];
        $nombre_servicio = $_POST['nombre_servicio'];
        $precio = $_POST['precio'];
    
        $query = "UPDATE servicio SET nombre = '$nombre_servicio', precio = '$precio' WHERE id = '$id';";
    
        if(mysqli_query($conexion, $query) === true){
            
            $valido['success'] = true;
            $valido['mensaje'] = 'Cambios guardados correctamente';
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'No se pudo modificar el servicio';
        }
    }
    else {
        $valido['success'] = false;
        $valido['mensaje'] = 'No se guardo';
    }

    mysqli_close($conexion);
    echo json_encode($valido);
?>