<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Administración</title>
    <link href="../css/portal.css" rel="stylesheet" />
    <link href="../css/pregunta.css" rel="stylesheet" />
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
                        <a class="nav-link" href="../modules/colaboradores.php"">
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
                    <h1 class="mt-4">Lista De Preguntas</h1><br>
                    <div class="card mb-4">
                        <div class="card-header">
                        </div>
                        <div>
                            <?php include ("../php/pregunta.php"); ?>
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