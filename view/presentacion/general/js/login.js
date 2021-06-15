/**
 * MÉTODO PARA INICIAR SESIÓN
 **/
$(document).ready(function () {
  $("#FormLog").validate({
    rules: {
      emailUser: { required: true },
      passwordUser: { required: true },
    },
    messages: {
      emailUser: { required: "Debe de completar los campos." },
      passwordUser: { required: "Debe de completar los campos." },
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass("is-invalid");
    },
    submitHandler: function () {
      var datos = {
        emailUser: $("#emailUser").val(),
        passwordUser: $("#passwordUser").val(),
        ingresarRol: $("#ingresarRol").val(),
      };
      console.log(datos);
      $.ajax({
        url: "model/login.php",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Iniciando sesión... ¡Espere por favor!");
        },
        success: function (data) {
          console.log(data);
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se ha iniciado sesión correctamente.");
            //setTimeout(function () { location.reload(); }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "¡Error!",
              "Usuario, contraseña y/ o rol incorrectos"
            );
          }
        },
      });
    },
  });
});

/*
document.getElementById("login").addEventListener('click', function () {
    window.location.href = "Administracion";
});*/


$(document).ready(function () {
    $("#FormLogin").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: 'model/logueo.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                console.log(data)
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente la movilidad estudiantil saliente.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'noactividad') {
                    respuestaError("Error!", "Seleccione una actividad correcta.");
                } else if (data.respuesta == 'noprograma') {
                    respuestaError("Error!", "Seleccione un programa correcto.");
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar la movilidad estudiantil.");
                }
            }
        });
    });
});

