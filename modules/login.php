<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../css/Login.css">
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <a href="index.php" class="volver"><i class="fa-solid fa-arrow-left"></i></a>
        <h2>Iniciar sesión</h2>
        <span class="line"></span>
        <div class="info_inicio_sesion">
            <label for="correo">DNI</label>
            <input type="text" id="inputDNI" name="dni" placeholder="DNI">
            <label for="contraseña">Contraseña</label>
            <input type="password" id="inputContraseña" name="password" placeholder="Contraseña">
            <?php
            require '../database/conexionDB.php';
            session_start();

            if ($_POST) {
                $dni = $_POST['dni'];
                $password = $_POST['password'];

                $sql = "SELECT dni, full_name, password FROM colaboradores WHERE dni='$dni'";
                $resultado = $conexion->query($sql);
                $num = $resultado->num_rows;

                if ($num > 0) {

                    $row = $resultado->fetch_assoc();
                    $password_bd = $row['password'];

                    $pass_c = $password;

                    if ($password_bd == $pass_c) {

                        $_SESSION['dni'] = $row['dni'];
                        $_SESSION['full_name'] = $row['full_name'];
                        $_SESSION['password'] = $row['password'];

                        echo '<script type="text/javascript">';
                        echo 'window.location.href = "../modules/colaboradores.php";';
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