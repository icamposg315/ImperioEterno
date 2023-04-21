//Validaciones para el formulario de opiniones.

function validarNombre() {
    //Comprobamos el nombre, para validarlo
    let valor = document.getElementById("nombre").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[0];
    let input = document.getElementById("nombre");
    //Le asigno una estructura, donde le limito a 20 caracteres máximo, dando posibilidad de 2 nombres. 
    let estructura = /^(?=.{3,}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/gm;

    if (estructura.test(valor)) {
        span.textContent = "Correcto";
        span.style.color = "Green";
        input.style.border = "2px solid Green";
    } else {
        span.textContent = "Recuerda, debe iniciar en mayúscula y no contener números o caracteres especiales";
        span.style.color = "Red";
        input.style.border = "2px solid Red";
    }
}

function validarApellido() {
    //Comprobamos el apellido, para validarlo
    let valor = document.getElementById("apellido").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[1];
    let input = document.getElementById("apellido");
    //Le asigno una estructura, donde le limito a 20 caracteres máximo, dando posibilidad de 2 nombres. 
    let estructura = /^(?=.{3,}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/gm;

    if (estructura.test(valor)) {
        span.textContent = "Correcto";
        span.style.color = "Green";
        input.style.border = "2px solid Green";
    } else {
        span.textContent = "Recuerda, debe iniciar en mayúscula y no contener números o caracteres especiales";
        span.style.color = "Red";
        input.style.border = "2px solid Red";
    }
}

function validarEmail() {
    //Comprobamos el nombre, para validarlo
    let valor = document.getElementById("email").value
    //Accedemos al contenido de la casilla mediante el ID, y evaluando el contenido con value.
    let span = document.getElementsByClassName("mensaje")[2];
    let input = document.getElementById("email");

    //Le asigno una estructura, que se compone del nombre del usuario, arroba, nombre del proovedor y el tipo de correo.
    /**
     * Validacion email: 
     * Características
     * 
     * Dirección: Sin espacios ni @ en la parte de dirección usuario
     * @ debe ir fijo
     * Dominio: Puede haber punto y números, y deben ir fijos sin espacios
     * Tipo de correo: No números ni espacios (Longitud mayor a 1)
     */

    let estructura = /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}$/;

    if (estructura.test(valor)) {
        span.textContent = "Correcto";
        span.style.color = "Green";
        input.style.border = "2px solid Green";
    } else {
        span.textContent = "Dirección de correo no válida";
        span.style.color = "Red";
        input.style.border = "2px solid Red";
    }
}

function validarSeleccion() {
    //Verificamos que se haya realizado alguna selección del desplegable
    let indice = document.getElementById("seleccion").selectedIndex
    //Las etiquetas que utilizaremos para confirmar que está correcto
    let span = document.getElementsByClassName("mensaje")[3];
    let input = document.getElementById("seleccion");
    if (indice == null || indice == 0) {
        span.textContent = "Debe seleccionar una opción";
        span.style.color = "Red";
    }
}

function validarCheckBox() {
    //Le asignamos a la variable elemento, el input del checkBox mediante el id
    let elemento = document.getElementById("check");
    // //Igual que en los otros casos, le asigno un span para interactuar con el usuario
    // let deshabilitado = document.getElementById("enviar");

    if (!elemento.checked) {
        alert("Debe aceptar los términos y condiciones para poder continuar");
        document.getElementById("enviar").style.display = "none";
    } else {
        document.getElementById("enviar").style.display = "flex";
    }

}
