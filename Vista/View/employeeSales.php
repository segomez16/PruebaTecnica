<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio</title>
    <link href="./Vista/css/styles.css" rel="stylesheet" />
    <?php include './Vista/Layout/Link.html' ?>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Supermercado<i class=" ps-2 fa-solid fa-cart-shopping"></i></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    Input para buscar

    <!-- Navbar-->
    <ul class="navbar-nav d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./index.php?controlador=employees&accion=userProfile">Ajustes</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="./index.php?controlador=index&accion=Cerrar">Cerrar Seccion</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Opciones</div>
                    <a class="nav-link" href="./index.php?controlador=index&accion=Sales">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Inicio
                    </a>


                    <a class="nav-link" href="./index.php?controlador=Costumers&accion=Sales">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users-between-lines"></i></div>
                        Clientes
                    </a>


                    <a class="nav-link" href="./index.php?controlador=Inventory&accion=Sales">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Inventario
                    </a>


                    <a class="nav-link" href="./index.php?controlador=Sales&accion=Sales">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Ventas
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Inicio</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Inicio</li>
                </ol>
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card border-primary mb-3">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Total de ventas</h5>
                                    <p class="card-text" id="totalSales">71,897 <span class="text-muted d-none">(5.4%)</span></p>
                                </div>
                                <i class="fa-solid fa-cart-shopping text-end fs-4 text-primary"></i>
                            </div>
                        </div>

                    </div>
<!--                    <div class="col-xl-4 col-md-6">-->
<!--                        <div class="card border-success mb-3">-->
<!--                            <div class="card-body d-flex justify-content-between align-items-center">-->
<!--                                <div>-->
<!--                                    <h5 class="card-title">Total de ganancias</h5>-->
<!--                                    <p class="card-text" id="Profits">71,897 <span class="text-muted d-none">(5.4%)</span></p>-->
<!--                                </div>-->
<!--                                <i class="fa-solid fa-money-bill-trend-up text-end fs-4 text-success"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="col-xl-6 col-md-6">
                        <div class="card border-info mb-3">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Total de clientes</h5>
                                    <p class="card-text" id="totalCostumers">71,897 <span class="text-muted d-none">(5.4%)</span></p>
                                </div>
                                <i class="fa-solid fa-users text-end fs-4 text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>


<!--                <div class="row">-->
<!--                    <div class="col-xl-12">-->
<!--                        <div class="card mb-4">-->
<!--                            <div class="card-header">-->
<!--                                <i class="fas fa-chart-area me-1"></i>-->
<!--                                Ventas a lo largo del Tiempo-->
<!--                            </div>-->
<!--                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xl-12">-->
<!--                        <div class="card mb-4">-->
<!--                            <div class="card-header">-->
<!--                                <i class="fas fa-chart-bar me-1"></i>-->
<!--                                Ventas por dia-->
<!--                            </div>-->
<!--                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </main>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="./Vista/js/scripts.js"></script>
<script src="./Vista/js/charts/Graficos.js"></script>
<script src="./Vista/js/Home/main.js"></script>
</body>
</html>

