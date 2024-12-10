
document.addEventListener("DOMContentLoaded", function () {

 
    const formularioRegistro = document.querySelector("form");  
    
    const btnRegistro = document.getElementById("btn_inicio_registro");


    formularioRegistro.addEventListener("submit", function (event) {
       
        const username = document.querySelector("input[name='nombre']").value;

        const email = document.querySelector("input[name='correo']").value;

        const password = document.querySelector("input[name='contraseña']").value;

     
        if (username === "" || email === "" || password === "") {
           
            event.preventDefault();
            alert("complete los campos");
        } else {
            
            console.log("Formulario listo para enviarse");
        }
    });

});
