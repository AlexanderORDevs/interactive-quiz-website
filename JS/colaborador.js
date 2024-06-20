


function desactivarUsuario(dni) {
    if (confirm('¿Estás seguro de que deseas desactivar este usuario?')) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../php/colaborador.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                alert(xhr.responseText);
                // Recargar la página o eliminar la fila
                location.reload();
            }
        };
        xhr.send("dni=" + encodeURIComponent(dni));
    }
}
