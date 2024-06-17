<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../CSS/Login.css">
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <a href="../HTML/index.html" class="volver"><i class="fa-solid fa-arrow-left"></i></a>
        <h2>Iniciar sesión</h2>
        <span class="line"></span>
        <div class="info_inicio_sesion">
            <label for="correo">DNI</label>
            <input type="text" id="inputDNI" name="usu_dni" placeholder="DNI">
            <label for="contraseña">Contraseña</label>
            <input type="password" id="inputContraseña" name="usu_contra" placeholder="Contraseña">
            <?php
            require '../SQL/conexionDB.php';
            session_start();

            if ($_POST) {
                $usu_dni = $_POST['usu_dni'];
                $usu_contra = $_POST['usu_contra'];

                $sql = "SELECT usu_dni, usu_nombrecom, usu_contra FROM usuarios WHERE usu_dni='$usu_dni'";
                $resultado = $conexion->query($sql);
                $num = $resultado->num_rows;

                if ($num > 0) {

                    $row = $resultado->fetch_assoc();
                    $password_bd = $row['usu_contra'];

                    $pass_c = $usu_contra;

                    if ($password_bd == $pass_c) {

                        $_SESSION['usu_dni'] = $row['usu_dni'];
                        $_SESSION['usu_nombrecom'] = $row['usu_nombrecom'];
                        $_SESSION['usu_contra'] = $row['usu_contra'];

                        echo '<script type="text/javascript">';
                        echo 'window.location.href = "../DASHBOARD/index.php";';
                        echo '</script>';

                    } else {
                        echo "La contraseña no coincide";
                    }

                } else {
                    echo "NO existe usuario";
                }
            }
            ?>
            <a><input type="submit" class="boton_iniciar_sesion" value="INGRESAR"></a>
        </div>
    </form>
</body>

</html>