/*
document.getElementById("logi").addEventListener('click', function () { 
    var nombre = document.getElementById("emailUser").value;
    var pass = document.getElementById("passwordUser").value;
    var rol_sistema = document.getElementById("ingresarRol");
    var rol = rol_sistema.options[rol_sistema.selectedIndex].value;

    console.log(rol);
    ingresoExitoso("Exito!", "Se ha iniciado sesión correctamente.");
});*/


/**
 * MÉTODO PARA REGISTRAR EL GRADUADO
 */
$(document).ready(function () {
    $('#FormRegistrarGraduados').validate({
        rules: {
            nombreGraduado: { required: true },
            apellidoGraduado: { required: true },
            fechaNacimientoGraduado: { required: true },
            identificacionGraduado: { required: true, number: true },
            codigoGraduado: { required: true, number: true },
            correoGraduado: { required: true, email: true },
            contrasenaGraduado: { required: true },
            repContrasenaGraduado: { required: true },
            fechaGraduado: { required: true }
        },
        messages: {
            nombreGraduado: { required: "Debe de completar los campos." },
            apellidoGraduado: { required: "Debe de completar los campos." },
            fechaNacimientoGraduado: { required: "Debe de completar los campos" },
            identificacionGraduado: { required: "Debe de completar los campos.", number: "Solo se aceptan numero." },
            codigoGraduado: { required: "Debe de completar los campos", number: "Solo se aceptan numero." },
            correoGraduado: { required: "Debe de completar los campos", email: "Digite un correo correcto." },
            contrasenaGraduado: { required: "Debe de completar los campos", },
            repContrasenaGraduado: { required: "Debe de completar los campos" },
            fechaGraduado: { required: "Debe de completar los campos" }
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
                nombreGraduado: $("#nombreGraduado").val(),
                apellidoGraduado: $("#apellidoGraduado").val(),
                fechaNacimientoGraduado: $("#fechaNacimientoGraduado").val(),
                identificacionGraduado: $("#identificacionGraduado").val(),
                codigoGraduado: $("#codigoGraduado").val(),
                correoGraduado: $("#correoGraduado").val(),
                contrasenaGraduado: $("#contrasenaGraduado").val(),
                repContrasenaGraduado: $("#repContrasenaGraduado").val(),
                fechaGraduado: $("#fechaGraduado").val(),
                carreraGraduado: $("#carreraGraduado").val()
            }
            console.log(datos);
            $.ajax({
                url: 'model/registrarPersona.php',
                method: 'post',
                data: datos,
                dataType: "json",
                type: 'POST',
                beforeSend: function () {
                    respuestaInfoEspera("Registrando... ¡Espere por favor!");
                },
                success: function (data) {
                    console.log(data)
                    if (data.respuesta == 'exito') {
                        ingresoExitoso("Exito!", "Se registro correctamente el graduado.");
                        setTimeout(function () {
                            window.location.href = "Registrar-graduados"
                        }, 1000);
                    } else if (data.respuesta == 'error') {
                        respuestaError("Error!", "Ocurrio un error al registrar el graduado.");
                    }
                }
            });
        }
    });
});

/**
 * MÉTODO PARA REGISTRAR UNA NOTICIA
 */
$(document).ready(function () {
    $("#FormRegistrarNoticia").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/registrarNoticia.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                console.log(data);
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente la noticia.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar.");
                } else if (data.respuesta == 'vacio') {
                    respuestaError("Error!", "Debe de completar los campos.");
                }
            }
        });
    });
});

/**
 * MÉTODO PARA REGISTRAR UN EVENTO
 */
$(document).ready(function () {
    $("#FormRegistrarEvento").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/registrarEvento.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                console.log(data);
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente la noticia.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar.");
                } else if (data.respuesta == 'vacio') {
                    respuestaError("Error!", "Debe de completar los campos.");
                }
            }
        });
    });
});

/**
 * MÉTODO PARA REGISTRAR UN EVENTO
 */
 $(document).ready(function () {
    $("#FormRegistrarCarrera").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/registrarCarrera.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                console.log(data);
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente el evento.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar.");
                } else if (data.respuesta == 'vacio') {
                    respuestaError("Error!", "Debe de completar los campos.");
                }
            }
        });
    });
});

/**
 * MÉTODO PARA REGISTRAR UN ESTUDIO
 */
 $(document).ready(function () {
    $("#FormRegistrarEstudio").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/registrarEstudios.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                console.log(data);
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente su estudio.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar.");
                } else if (data.respuesta == 'vacio') {
                    respuestaError("Error!", "Debe de completar los campos.");
                }
            }
        });
    });
});

/**
 * MÉTODO PARA REGISTRAR UN EXPERIENCIA
 */
 $(document).ready(function () {
    $("#FormRegistrarExperiencia").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/registrarExperiencia.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                console.log(data);
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente su experiencia.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar.");
                } else if (data.respuesta == 'vacio') {
                    respuestaError("Error!", "Debe de completar los campos.");
                }
            }
        });
    });
});