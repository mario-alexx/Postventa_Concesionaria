// $fecha = $_GET['fecha'] ?? date('Y-m-d');
//         $fechas = explode('-', $fecha);

document.addEventListener('DOMContentLoaded', function() {
    seleccionarFecha();
    seleccionarHora();
});

function seleccionarFecha() {
    const inputFecha = document.querySelector('#fecha');
    inputFecha.addEventListener('input', function(e) {

        // Obtener el dia que el usuario ingreso
        const dia = new Date(e.target.value).getUTCDay();

        // validar que Sabados y Domingos no se puedan elegir
        if( [6, 0].includes(dia)) {
            e.target.value = '';
            Swal.fire({
                icon: 'warning',
                text: 'Fines de semana no permitidos',
            })
        } 
        else {
            fecha = e.target.value;
        }
    });
}

function seleccionarHora() {

    const inputHora = document.querySelector('#hora');
    inputHora.addEventListener('input', function(e) {

        const horaCita = e.target.value;
        const hora = horaCita.split(":")[0]; //split separa un string : la hora 
        
        if(hora < 10 || hora > 18) {
            e.target.value = '';
            Swal.fire({
                icon: 'warning',
                text: 'El horario de atención es de 10-18',
            })
        }
        else {
            hora = e.target.value;
        }
    });
}
    // Formatear la fecha en español
    // const fechaObj = new Date(fecha);
    // const mes = fechaObj.getMonth();
    // const dia = fechaObj.getDate() + 2;
    // const year = fechaObj.getFullYear();

    // const fechaUTC = new Date( Date.UTC(year, mes, dia));

    // const opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
    // const fechaFormateada = fechaUTC.toLocaleDateString('es-AR', opciones);
    

    // const fechaCita = document.createElement('P');
    // fechaCita.innerHTML = `<span>Fecha:</span> ${fechaFormateada}`;

    // const horaCita = document.createElement('P');
    // horaCita.innerHTML = `<span>Hora:</span> ${hora} Horas`;

    // resumen.appendChild(fechaCita);
    // resumen.appendChild(horaCita);