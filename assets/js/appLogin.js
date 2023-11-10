const registrarUsuario = async() => {

    var nombre = document.querySelector('#cnombre').value;
    var apellido = document.querySelector('#capellido').value;
    var telefono = document.querySelector('#ctelefono').value;
    var correo = document.querySelector('#ccorreo').value;
    var password = document.querySelector('#cpassword').value;


    var emailValido = /^[a-zA-Z]+@[a-zA-Z]+\.com$/;
    var telefonoValido = /^11\d{8}$/;
    var passwordValido = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).{8,}$/;

    if(!emailValido.test(correo)) {
        Swal.fire({
            icon: 'warning',
            text: 'El email debe ser: texto@texto.com',
        })
        return;
    }
    if (!telefonoValido.test(telefono)) {
        Swal.fire({
            icon: 'warning',
            text: 'El numero de telefono debe ser: 11XXXXXXXX',
        })
        return;
    }
    // if (!passwordValido.test(password)) {
    //     Swal.fire({
    //         icon: 'warning',
    //         text: 'El password debe ser de 8 digitos y debe contener al menos una mayuscula, minuscula, digito y caracter especial',
    //     })
    //     return;
    // }

    if(nombre.trim() === '' || apellido.trim() === '' || password.trim() === '') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'El nombre y apellido son obligatorios',
        })
        return;
    }


    //Insertar a la BD
    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("apellido", apellido);
    datos.append("telefono", telefono);
    datos.append("email", correo);
    datos.append("password", password);

    var respuesta = await fetch("../../controllers/auth/registrarUsuario.php", {
        method: 'POST',
        body:datos
    });
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Respuesta' + respuesta
    })
    
    var resultado = await respuesta.json();

    if(resultado.success == true) {
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: resultado.mensaje
        })
        setTimeout(() => {
            window.location.reload();
        }, 2000);
    }
    else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: resultado.mensaje
        })
    }
}

const loginUsuario = async() => {

    var correo = document.querySelector('#correo').value;
    var password = document.querySelector('#password').value;

    if(correo.trim() === '' || password.trim() === '' ) 
    {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Los campos no pueden estar vacios',
        })
        return;
    }
    //Insertar a la BD
    const datos = new FormData();
    datos.append("email", correo);
    datos.append("password", password);

    var respuesta = await fetch("../../controllers/auth/loginUsuario.php", {
        method: 'POST',
        body:datos
    });
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Respuesta' + respuesta
    })
    
    var resultado = await respuesta.json();

    if(resultado.success == true) {
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: resultado.mensaje
        })
        document.querySelector('#formIniciar').reset();
        
        setTimeout(() => {
            window.location.href = "../../views/admin/historico.php";
        }, 2000);   
    }
    else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: resultado.mensaje
        })
    }
}