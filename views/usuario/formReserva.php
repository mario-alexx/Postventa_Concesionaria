<?php
    include_once "../../config/conexion.php";
    $consulta = mysqli_query($conexion, "SELECT * FROM vehiculo; ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    
    <style>
        #contenedor {
            background-image: url(../../assets/img/2019-chevrolet-silverado-004.jpg);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
        }

        label span{color: grey;}
        label input:checked + span{color: black;}
    </style>
</head>
<body>

    <?php include '../../templates/nav3.php';?>
    <div class="container-fluid" id="contenedor">
        <form action="../../controllers/ServicioController.php" method="post" id="formulario">
            <div class="row justify-content-end">
                <div class="col-md-6 p-3 ">
                    <h3 class="text-center pt-2 text-white-50 fw-bold">Reserve una cita <i class="bi bi-calendar-check"></i></h3>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="patente" name="patente" placeholder="Ingrese su patente(ABC-123)" required maxlength="7">
                        <label for="patente">Patente (ABC-123)</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="modelo" name="modelo" aria-label="Floating label select example">
                        <?php
                            $id_modelo=1;
                            while($fila = mysqli_fetch_assoc($consulta)){
                                echo "<option value='".$id_modelo."'>".$fila['modelo']."</option>";
                                $id_modelo ++;
                            }
                        ?>
                        </select>
                        <label for="modelo">Eliga su Modelo</label>
                    </div>
                    <div class="form-floating mb-3">            
                        <ul class="list-group overflow-auto mt-3" style="max-height: 150px;">    
                            <?php
                                $sql2 = mysqli_query($conexion,"SELECT * FROM servicio");
                                $id_servicio=1;
                                while($fila = mysqli_fetch_assoc($sql2)){
                            ?>      
                                <li class="list-group-item">
                                    <label class="form-check-label fs-5" for="opcion[]">
                                        <input class="form-check-input me-1" type="checkbox" name="opcion[]" value="<?php echo $id_servicio; ?>" id="opciones" min="1">
                                        <span><?php echo $fila['nombre']. ' $' . $fila['precio']; ?></span>
                                    </label>
                                </li>
                            <?php
                                $id_servicio++;
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="name@example.com"
                            min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>" required max="2030-12-31">
                        <label for="fecha">Seleccione una fecha para reservar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control" id="hora" name="hora" required placeholder="name@example.com">
                        <label for="hora">Seleccione la Hora</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="kilometraje" name="kilometraje" placeholder="name@example.com" required min="0" max="400000">
                        <label for="kilometraje">Ingrese el km del vehículo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="anio" name="anio" placeholder="name@example.com" required min="2000" max="2024">
                        <label for="anio">Ingrese el año</label>
                    </div>
                    <?php
                        if(!isset($_SESSION['usuario'])) {                         
                    ?>
                        <div class="d-grid col-6 mx-auto mt-3">
                            <button type="submit" id="reservaNo" class="btn btn-lg btn-primary">Reservar</button>
                        </div>

                    <?php }else { ?>
                            <div class="d-grid col-6 mx-auto mt-3">
                                <button type="submit" id="reserva" class="btn btn-lg btn-primary">Reservar</button>
                            </div>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>

    <?php include '../../templates/footer.php';?>
<?php
    mysqli_free_result($consulta);
    mysqli_close($conexion);
?>

    <script type="text/javascript">
        var btnNoEnviar = document.getElementById("reservaNo").addEventListener("click", function(e) {
            e.preventDefault();
            Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Debes iniciar sesión para poder reservar un turno',
            })
            return;
        });
        
    </script>

    <script src="../../assets/js/appJS.js"></script>
    <script src="../../assets/js/appFecha.js"></script>
    <script src="../../assets/js/appLogin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
