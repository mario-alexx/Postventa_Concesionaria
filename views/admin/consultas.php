<?php  
    session_start();    
    if(!isset($_SESSION['usuario']) ) { 
        header('Location: ../../index.php');
        exit();
    }
    if($_SESSION['admin'] === '0'){
        header('Location: ../../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta | Clientes</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/icons8-servicio-de-coche-48.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body onload="cargarPreguntas();">
    
    <?php include '../../templates/navegacion.php'; ?>    
    
    <div class="container-fluid">
        <div class="card text-center m-2">
            <div class="card-header">
                <h3>Consulta de Clientes</h3>
            </div>
            <div class="card-body">
                    <table class="table mt-4">
                    <thead class="table table-dark">
                        <tr>
                            <td>ID Cliente</td>
                            <td>Cliente</td>
                            <td>Correo</td>
                            <td>Telefono</td>
                            <td>Preguntas</td>
                        </tr>
                    </thead>
                    <tbody id="contenido">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include '../../templates/footerAdmin.php'; ?>

    <script src="../../assets/js/appJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>