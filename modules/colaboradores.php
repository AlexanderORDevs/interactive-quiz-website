<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Administración</title>
    <link href="../css/portal.css" rel="stylesheet" />
    <link href="../css/colaborador.css" rel="stylesheet" />
    <script src="../js/colaborador.js" defer></script>
    <script src="../js/helpers/jquery-3.7.1.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="../index.php">Inicio</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Sector Laboral</div>
                        <a class="nav-link" href="../modules/colaboradores.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Trabajadores
                        </a>
                        <div class="sb-sidenav-menu-heading">Contenido</div>
                        <a class="nav-link" href="../modules/preguntas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Preguntas
                        </a>
                        <a class="nav-link" href="../modules/participantes.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Participantes
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Usuario:</div>
                    alex
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Agregar Trabajador</h1><br>
                    <div class="formulario">
                        <form class="register" id="addColaborador" method="POST">
                            <div class="form-container">
                                <div class="form-column">
                                    <div class="form-group">
                                        <label for="fullname">Nombres Completos:</label>
                                        <input type="text" id="fullname" name="fullname" maxlength="20"
                                            pattern="[A-Za-z\s]{1,20}"
                                            title="Solo se permiten letras y un máximo de 20 caracteres" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dni">Número de DNI:</label>
                                        <input type="text" id="dni" name="dni" pattern="\d{8}"
                                            title="Debe contener exactamente 8 dígitos" required>
                                    </div>
                                </div>
                                <div class="form-column">
                                    <div class="form-group">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" id="password" name="password" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo Electrónico:</label>
                                        <input type="email" id="correo" name="correo"
                                            title="Debe ser un correo de @gmail.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-button">
                                <button type="submit" id="sendColab">Agregar Colaborador</button>
                            </div>
                        </form><br>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Listado
                        </div>
                        <div>
                            <?php include ("../php/tables.php"); ?>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; MINEDU 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>