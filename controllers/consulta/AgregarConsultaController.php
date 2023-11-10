<?php
    session_start();
    require '../../config/conexion.php';

    $valido['success'] = array('success'=>false, 'mensaje'=>'');

    //if($_POST) {

        $descripcion_consulta = $_POST['descripcion'];
        $id = $_SESSION['idcliente'];
        $query = "INSERT INTO contacto (descripcion, cliente_id)
                    VALUES('$descripcion_consulta', $id);";
    
        if(mysqli_query($conexion, $query) === true){
            
            $valido['success'] = true;
            $valido['mensaje'] = 'Su consulta fue enviada';
            $_SESSION['id_consulta'] = mysqli_insert_id($conexion);
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'No se pudo enviar su consulta';
        }
    // }
    // else {
    //     $valido['success'] = false;
    //     $valido['mensaje'] = 'No se guardo';
    // }

    mysqli_close($conexion);
    echo json_encode($valido);
?>