/**
 * MÉTODO PARA INICIAR SESIÓN
 **/
$(document).ready(function () {
    $('#sdfs').validate({
        rules: {
            emailUser: { required: true },
            passwordUser: { required: true }
        },
        messages: {
            emailUser: { required: "Debe de completar los campos." },
            passwordUser: { required: "Debe de completar los campos." }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function () {
            var datos = {
                emailUser: $("#emailUser").val(),
                passwordUser: $("#passwordUser").val(),
                ingresarRol: $("#ingresarRol").val()
            }
            console.log(datos)
            $.ajax({
                url: 'model/login.php',
                data: datos,
                dataType: "json",
                type: 'POST',
                beforeSend: function () {
                    respuestaInfoEspera("Iniciando sesión... ¡Espere por favor!");
                },
                success: function (data) {
                    console.log(data)
                    if (data.respuesta == 'exito') {
                        ingresoExitoso("Exito!", "Se ha iniciado sesión correctamente.");
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    } else if (data.respuesta == 'error') {
                        respuestaError("¡Error!", "Usuario, contraseña y/ o rol incorrectos");
                    }
                }
            });
        }
    });
});

/*
document.getElementById("login").addEventListener('click', function () {
    window.location.href = "Administracion";
});*/