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
        $query = "DELETE FROM contacto WHERE id =$id;";
    
        if(mysqli_query($conexion, $query) === true){
            
            $valido['success'] = true;
            $valido['mensaje'] = 'Consulta eliminada correctamente';
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'No se pudo eliminar la consulta';
        }
    }
    else {
        $valido['success'] = false;
        $valido['mensaje'] = 'No se guardo';
    }
    
    mysqli_close($conexion);
    echo json_encode($valido);
?>