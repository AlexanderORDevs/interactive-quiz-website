
$(document).ready(function () {
    $('#addColaborador').submit(function (event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario

        let fullname = $('#fullname').val().toLowerCase();
        let dni = $('#dni').val();
        let correo = $('#correo').val().toLowerCase();
        let password = $('#password').val();

        // Enviar datos al servidor mediante AJAX
        $.ajax({
            url: '../php/colaborador.php',
            type: 'POST',
            data: {
                fullname,
                dni,
                password, 
                correo,
            },
            success: function () {
                alert("Cliente Agregado")
                location.reload();
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});


