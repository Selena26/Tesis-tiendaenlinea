$(document).ready(function () {
    $('#formulario-correo').submit(function (event) {
        event.preventDefault(); // Prevenir el envío del formulario por defecto

        // Obtener los datos del formulario
        var formData = $(this).serialize();

        // Enviar el formulario mediante AJAX
        $.ajax({
            type: 'POST',
            url: 'procesar_correo.php',
            data: formData,
            beforeSend: function () {
                // Ocultar el botón de enviar mientras se envía el formulario
                $('#formulario-correo button[type="submit"]').prop('disabled', true);
            },
            success: function (response) {
                // Ocultar el formulario con una animación de desvanecimiento
                $('.contenedor-formulario').fadeOut('slow', function () {
                    // Mostrar el mensaje de confirmación después de que se complete la animación
                    $('#mensaje-enviado').html(response);
                });
            },
            error: function () {
                // Manejar errores en caso de que ocurran
                $('#mensaje-enviado').html('Error al enviar el mensaje.');
            }
        });
    });
});
