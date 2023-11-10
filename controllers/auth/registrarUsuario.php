<?php
    require '../../config/conexion.php';
    session_start();
    
    $valido['success'] = array('success'=>false, 'mensaje'=>'');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];
        $password = md5($_POST['password']);
        
        //Verificar si el correo ya esta en la db
        $validar_mail = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo='$correo'");

        if(mysqli_num_rows($validar_mail) == 0) {
            $query = "INSERT INTO cliente(nombre, apellido, telefono, correo, password, admin)
                         VALUES('$nombre', '$apellido', '$telefono', '$correo', '$password', '0')";
            
            if(mysqli_query($conexion, $query) === true){
                
                $valido['success'] = true;
                $valido['mensaje'] = 'Usuario registrado correctamente';
            }
            else {
                $valido['success'] = false;
                $valido['mensaje'] = 'No se pudo registrar al usuario';
            }
        }
        else {
            $valido['success'] = false;
            $valido['mensaje'] = 'El correo ya esta registrado, pruebe con otro';
        }
    }
    else {
        $valido['success'] = false;
        $valido['mensaje'] = 'No se guardo';
    }
    
    mysqli_free_result($validar_mail);
    mysqli_close($conexion);
    echo json_encode($valido);
?>