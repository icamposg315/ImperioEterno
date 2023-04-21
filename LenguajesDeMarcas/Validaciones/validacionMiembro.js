function validarNombre() {
    //Comprobamos el nombre, para validarlo
    let valor = document.getElementById("nombre").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[0];
    //Le asigno una estructura, donde le limito a 20 caracteres máximo, dando posibilidad de 2 nombres. 
    let estructura = /^(?=.{3,40}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/gm;

    if (estructura.test(valor)) {
        span.textContent = "¡Encantado!";
        span.style.color = "Green";
    } else {
        span.textContent = "Formato incorrecto";
        span.style.color = "Red";
    }
}

function validarUsuario() {
    //Comprobamos el apellido, para validarlo
    let valor = document.getElementById("user").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[1];
    //Le asigno una estructura, donde le limito a 20 caracteres máximo, dando posibilidad de 2 nombres. 
    let estructura = /^\w{3,20}$/;

    if (estructura.test(valor)) {
        span.textContent = "¡Genial, no queda nada!";
        span.style.color = "Green";
    } else {
        span.textContent = "Nombre de usuario en uso, pruebe de nuevo";
        span.style.color = "Red";
    }
}

function validarEmail() {
    //Comprobamos el nombre, para validarlo
    let valor = document.getElementById("email").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[2];
    let input = document.getElementById("email");
    //Le asigno una estructura, que se compone del nombre del usuario, arroba, nombre del proovedor y el tipo de correo.
    let estructura = /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}$/;

    if (estructura.test(valor)) {
        span.textContent = "Solo un paso más para formar parte del imperio";
        span.style.color = "Green";
    } else {
        span.textContent = "Dirección de correo no válida";
        span.style.color = "Red";
    }
}

function validarContrasena() {

    let valor = document.getElementById("contraseña").value

    let span = document.getElementsByClassName("mensajeError")[0];

    let estructura = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2})(?=.*[-_.+]){10,}/;

    if (estructura.test(valor)) {
        span.textContent = "¡Grata civis!";
        span.style.color = "Green";
    } else {
        span.textContent = "Formato no correcto, recuerda, la contraseña debe contener una letra mayúscula, una letra minúscula, un caracter especial y dos números seguidos, y la longuitud debe ser igual o mayor de 10."
        span.style.color = "Red";
    }
}

function validarCheckBox() {
    //Le asignamos a la variable elemento, el input del checkBox mediante el id
    let elemento = document.getElementById("check");
    // //Igual que en los otros casos, le asigno un span para interactuar con el usuario

    if (!elemento.checked) {
        alert("Debe aceptar los términos y condiciones para poder continuar");
        document.getElementById("enviar").style.display = "none";
    } else {
        document.getElementById("enviar").style.display = "flex";
    }
}