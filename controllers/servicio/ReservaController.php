<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }
    include '../../config/conexion.php';
    
    $cliente_id = $_SESSION['idcliente'];
    //QUERY PARA INSERTAR LOS DATOS DEL FORM A LA BD
    if( isset($_POST["patente"]) && isset($_POST["kilometraje"]) && isset($_POST["modelo"]) && isset($_POST["fecha"])){
        $patente = $_POST["patente"];
        $kilometraje = $_POST["kilometraje"];
        $id_modelo = $_POST["modelo"]; //recibo el id modelo por el formulario
        $fecha = $_POST["fecha"] ?? date('Y-m-d');

        $query_cliente = "INSERT INTO reserva (fecha, kilometraje, patente, cliente_id, vehiculo_id) 
            VALUES ('$fecha', $kilometraje, '$patente', $cliente_id, $id_modelo);";
        mysqli_query($conexion, $query_cliente); //ejecuta la consulta
    }
    else{
        echo "falta completar campos";
    }

    $idreserva = mysqli_insert_id($conexion);//me devuele el id del ultimo INSERT in the last query
    //QUERY PARA INSERTAR EN LA TABLA PUENTE RESERVA-SERVICIO
    
    if(isset($_POST["opcion"])){
        foreach($_POST['opcion'] as $idservicio){
            $query_reserva_servicio = "INSERT INTO reservaservicio (servicio_id, reserva_id) VALUES ($idservicio,$idreserva);";
            mysqli_query($conexion, $query_reserva_servicio); //ejecuta la consulta
        }
    }
    else{
        echo "Elija como minimo una consulta";
    }

    mysqli_close($conexion);
?>