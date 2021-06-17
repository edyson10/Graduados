$(document).ready(function () {
    $("#FormLogin").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/logueo.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se ha iniciado sesión correctamente.");
                    if (data.rol == '1') {
                      setTimeout(function () {
                        window.location.href="Administracion";
                      }, 1000);
                    } else {
                      setTimeout(function () {
                        window.location.href="Perfil";
                      }, 1000);
                    }
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Usuario, contraseña y/ o rol incorrectos");
                }
            }
        });
    });
});

