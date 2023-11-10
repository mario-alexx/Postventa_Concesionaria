<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
        exit();
    }
    require '../config/conexion.php';
    
    $cliente_id = $_SESSION['idcliente'];
    //QUERY PARA INSERTAR LOS DATOS DEL FORM A LA BD
    if( $_POST["patente"] !== "" && $_POST["kilometraje"] !== "" && $_POST["fecha"] !== "" && $_POST["hora"] !== "" && $_POST["opcion"] !== null){
        $patente = $_POST["patente"];
        $kilometraje = $_POST["kilometraje"];
        $id_modelo = $_POST["modelo"]; //recibo el id modelo por el formulario
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $anio = $_POST["anio"];
        $query_cliente = "INSERT INTO reserva (fecha, hora, kilometraje, patente, cliente_id, vehiculo_id, anio_vehiculo) 
                            VALUES ('$fecha', '$hora', $kilometraje, '$patente', $cliente_id, $id_modelo, $anio);";

        if(mysqli_query($conexion, $query_cliente) === true) {
            header('Location: ../views/usuario/historial.php');
        }
        else {
            echo "<script>alert('Su reserva no se ha podido realizar, intente de nuevo');</script>";
            header('Location: ../views/usuario/formReserva.php');
        }
        $idreserva = mysqli_insert_id($conexion);
        foreach($_POST['opcion'] as $idservicio){
            $query_reserva_servicio = "INSERT INTO reservaservicio (servicio_id, reserva_id) VALUES ($idservicio,$idreserva);";
            mysqli_query($conexion, $query_reserva_servicio); //ejecuta la consulta
        }
    }
    else{
        echo "<script>alert('Los campos no pueden estar vacios');</script>";
        header('Location: ../views/usuario/formReserva.php');
    }
    mysqli_close($conexion);
?>