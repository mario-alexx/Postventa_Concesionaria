<?php
    session_start();
    // if(!isset($_SESSION['usuario'])) {
    //     header('Location: ../../views/usuario/index.php');
    //     exit();
    // }
    require '../../config/conexion.php';

    $query = "SELECT cliente.id, CONCAT(cliente.nombre,' ',cliente.apellido) AS Cliente, 
                cliente.correo, cliente.telefono, contacto.descripcion, contacto.id
                FROM contacto  LEFT OUTER JOIN cliente ON cliente.id = contacto.cliente_id ORDER BY contacto.id DESC;";

    $resultado = mysqli_query($conexion,$query);

    $salida = array('data' => array());

    if(mysqli_num_rows($resultado) > 0){
        
        while($row = mysqli_fetch_array($resultado)) {
            $salida['data'][] = array($row['id'], $row['Cliente'], $row['correo'], $row['telefono'], $row['descripcion'], $row['id']);
        } 
    }

    mysqli_close($conexion);
    echo json_encode($salida);
?>