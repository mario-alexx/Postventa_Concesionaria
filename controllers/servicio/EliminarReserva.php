<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }
    require '../../config/conexion.php';

    $valido['success'] = array('success'=>false, 'mensaje'=>'');

    if($_POST) {

        $id = $_POST['id'];
        $query = "DELETE FROM reservaservicio WHERE reserva_id = $id;";
        $query2 = "DELETE FROM reserva WHERE id = $id;";

        if(mysqli_query($conexion, $query) === true && mysqli_query($conexion, $query2) === true){
            
            $valido['success'] = true;
            $valido['mensaje'] = 'Servicio eliminado correctamente';
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'No se pudo eliminar el servicio';
        }
    }
    else {
        $valido['success'] = false;
        $valido['mensaje'] = 'No se guardo';
    }
    
    mysqli_close($conexion);
    echo json_encode($valido);
?>
