function validarEmail() {
    //Comprobamos el nombre, para validarlo
    let valor = document.getElementById("email").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[0];
    //Le asigno una estructura, que se compone del nombre del usuario, arroba, nombre del proovedor y el tipo de correo.
    let estructura = /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}$/;

    if (!estructura.test(valor)) {
        span.textContent = "Se ha producido un error. Por favor, comprueba tu cuenta de correo electrónico y vuelve a intentarlo.";
        span.style.color = "Red";
    } else {
        span.textContent = "¡Bienvenido de nuevo al imperio!";
        span.style.color = "Green";
    }
}


function validarContrasena() {

    let valor = document.getElementById("contraseña").value

    let span = document.getElementsByClassName("mensaje")[1];

    let a = document.getElementById("log").value

    let estructura = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2})(?=.*[-_.+]){10,}/;

    if (estructura.test(valor)) {
        span.textContent = "¡Adelante!";
        span.style.color = "Green";
        document.getElementById("log").style.display = "flex";
    } else {
        span.textContent = "Se ha producido un error. Por favor, comprueba tu contraseña y vuelve a intentarlo."
        span.style.color = "Red";
        document.getElementById("log").style.display = "none";
    }
}