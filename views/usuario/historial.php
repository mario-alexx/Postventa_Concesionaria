<!doctype html>
<html lang="es">
<head>
  <title>Historial de Reservas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php include '../../templates/nav3.php';?>

    <div class="container">
        <h1 class="text-center">MIS RESERVAS</h1>
<?php

    if(!isset($_SESSION['usuario'])) {
        header('Location: ../../index.php');
        exit();
    }
    include '../../config/conexion.php';
    $idcliente = $_SESSION['idcliente'];    

    $consulta = mysqli_query($conexion,"SELECT reserva.id , reserva.fecha, reserva.hora, vehiculo.modelo, reserva.anio_vehiculo, reserva.patente, reserva.kilometraje,
    GROUP_CONCAT(servicio.nombre) AS nombreServicio, SUM(servicio.precio) AS precioTotal FROM reserva 
    LEFT OUTER JOIN cliente ON reserva.cliente_id = cliente.id
    LEFT OUTER JOIN vehiculo ON reserva.vehiculo_id = vehiculo.id 
    LEFT OUTER JOIN reservaservicio ON reservaservicio.reserva_id= reserva.id
    LEFT OUTER JOIN servicio ON servicio.id = reservaservicio.servicio_id
    WHERE(cliente_id = $idcliente) GROUP BY reserva.id ORDER BY reserva.id DESC;");

    if($resultado = mysqli_num_rows($consulta) > 0){
        while($fila = mysqli_fetch_assoc($consulta)){ // por cada reserva
        ?>
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body" >
                            <h5 class="card-title"><strong>RESERVA N°:</strong> <?php echo $fila['id']; ?></h5>
                            <p class="card-text"><strong>FECHA:</strong> <?php echo $fila['fecha']; ?></p>
                            <p class="card-text"><strong>Hora:</strong> <?php echo $fila['hora']; ?></p>
                            <p class="card-text"><strong>MODELO:</strong><?php echo $fila['modelo']; ?></p>
                            <p class="card-text"><strong>AÑO:</strong> <?php echo $fila['anio_vehiculo']; ?></p>
                            <p class="card-text"><strong>PATENTE:</strong> <?php echo $fila['patente']; ?></p>
                            <p class="card-text"><strong>KM:</strong> <?php echo $fila['kilometraje']; ?></p>
                            <p class="card-text"><strong>SERVICIO(S):</strong> &nbsp;<?php echo $fila['nombreServicio']; ?> &nbsp;</p>
                            <p class="card-text"><strong>TOTAL:</strong> $<?php echo $fila['precioTotal']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="text-black my-2"></hr>
        <?php } ?>
    <?php } else{
            echo "<h2>Aun no tiene ninguna reserva :( </h2>";
    }
?>
    </div>
    <?php include '../../templates/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
