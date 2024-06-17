<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="../CSS/registro.css">

</head>

<body>
    <form>
        <h2>Registrarse</h2>
        <span class="line"></span>
        <div class="info_registrarse">
            <label for="correo">Nombre</label>
            <input type="text" name="Nombre" placeholder="Nombre">

            <label for="correo">DNI</label>
            <input type="number" name="dni" placeholder="DNI">

            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" placeholder="Contraseña">

            <label for="contraseña2">Repetir contraseña</label>
            <input type="password" name="contraseña" placeholder="Repetir contraseña">
            <div class="registrarte_is">
                <span>¿Ya tienes cuenta?</span>
                <a href="Login.php"> Iniciar sesión</a>
            </div>
            <a><input type="submit" class="boton_iniciar_sesion" value="INGRESAR"></a>
        </div>
    </form>
</body>

</html>