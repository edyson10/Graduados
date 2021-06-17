/**
 * METODO PARA ELIMINAR EL ESTUDIO
 */
function eliminarEstudio(id) {
  console.log(id);
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar el estudio?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminarEstudio", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            Swal.fire("Eliminado!", "Su estudio ha sido eliminado.", "success");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "No se pudo eliminar!",
            });
          }
        },
      });
    }
  });
}

/**
 * METODO PARA ELIMINAR EL EXPERIENCIA
 */
function eliminarExperiencia(id) {
  console.log(id);
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar el experiencia?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminarExperiencia", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            Swal.fire(
              "Eliminado!",
              "Su experiencia ha sido eliminado.",
              "success"
            );
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "No se pudo eliminar!",
            });
          }
        },
      });
    }
  });
}

/**
 * METODO PARA ELIMINAR EL NOTICIA
 */
function eliminarNoticia(id) {
  console.log(id);
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar la noticia?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminarNoticia", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            Swal.fire(
              "Eliminado!",
              "La noticia ha sido eliminado.",
              "success"
            );
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "No se pudo eliminar!",
            });
          }
        },
      });
    }
  });
}

/**
 * METODO PARA ELIMINAR EL EVENTO
 */
function eliminarEvento(id) {
  console.log(id);
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar el evento?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminarEvento", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            Swal.fire(
              "Eliminado!",
              "El evento ha sido eliminado.",
              "success"
            );
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "No se pudo eliminar!",
            });
          }
        },
      });
    }
  });
}
