<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
        exit();
    }
    require '../config/conexion.php';

    $campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']): null;

    $query = "SELECT reserva.id ,CONCAT(cliente.nombre,' ',cliente.apellido) AS Cliente, cliente.correo, GROUP_CONCAT(servicio.nombre) AS ServicioNombre,
    SUM(servicio.precio) AS precio_final, reserva.patente, vehiculo.modelo, reserva.fecha, reserva.hora FROM reserva 
    LEFT OUTER JOIN cliente ON reserva.cliente_id = cliente.id LEFT OUTER JOIN reservaservicio ON reservaservicio.reserva_id= reserva.id
    LEFT OUTER JOIN servicio ON servicio.id = reservaservicio.servicio_id LEFT OUTER JOIN vehiculo ON reserva.vehiculo_id = vehiculo.id 
    WHERE(reserva.id LIKE '%$campo%' OR 
    cliente.nombre LIKE '%$campo%' OR
    cliente.correo LIKE '%$campo%' OR 
    servicio.nombre LIKE '%$campo%' OR
    servicio.precio LIKE '%$campo%' OR
    reserva.patente LIKE '%$campo%' OR
    vehiculo.modelo LIKE '%$campo%' OR
    reserva.fecha LIKE '%$campo%') 
    GROUP BY reserva.id;";

    $resultado = mysqli_query($conexion,$query);
    $salida = array('data' => array());

    if(mysqli_num_rows($resultado) > 0){
        
        while($row = mysqli_fetch_array($resultado)) {
            $salida['data'][] = array($row['id'], $row['Cliente'], $row['correo'], $row['ServicioNombre'], $row['precio_final'], $row['patente'], $row['modelo'], $row['fecha'], $row['hora']);
        } 
    }
    mysqli_close($conexion);
    echo json_encode($salida);
?>