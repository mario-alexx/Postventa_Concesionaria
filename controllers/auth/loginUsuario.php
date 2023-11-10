<?php
    session_start();
    require '../../config/conexion.php';

    $valido['success'] = array('success'=>false, 'mensaje'=>'', 'nombre'=>'');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $correo = $_POST['email'];
        $password = md5($_POST['password']);
        
        //Verificar si el correo ya esta en la db
        $query = "SELECT * FROM cliente WHERE correo='$correo' AND password='$password'";
        $resultado = mysqli_query($conexion, $query);
        $fila = mysqli_fetch_array($resultado);

        if(mysqli_num_rows($resultado) > 0) {
            $valido['success'] = true;
            $valido['mensaje'] = 'Login exitoso';

            $_SESSION['idcliente'] =$fila['id'];
            $_SESSION['admin'] = $fila['admin'];
            $_SESSION['usuario'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['apellido'];
            $_SESSION['telefono'] =$fila['telefono'];
            $_SESSION['correo'] =$fila['correo'];
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'El email o pasword no son correctos';
        }
    }
    else {
        $valido['success'] = false;
        $valido['mensaje'] = 'No se guardo';
    }

    mysqli_close($conexion);
    echo json_encode($valido);
?>