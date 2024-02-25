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
                    <a class="nav-link" href="./index.php?controlador=index&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Inicio
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Employees&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Empleados
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Costumers&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users-between-lines"></i></div>
                        Clientes
                    </a>

                    <a class="nav-link" href="./index.php?controlador=EmployeePosition&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                        Posiciones
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Inventory&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Inventario
                    </a>

                    <a class="nav-link" href="./index.php?controlador=InventoryTransactions&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-exchange-alt"></i></div>
                        Transciones de inventario
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Category&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                        Categorias
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Products&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                        Producto
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Sales&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Ventas
                    </a>

                    <a class="nav-link" href="./index.php?controlador=Supplier&accion=Principal">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                        Proveedores
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content"><main>
            <div class="container text-center mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <h2>Inventario</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control rounded-pill" id="searchsInventory" placeholder="Buscar producto">
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="true" aria-controls="collapseOne">
                                                Categorias
                                            </button>
                                        </h2>
                                        <div id="category" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div id="checkCategory">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="accordion mt-3 mb-3" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#proveedor" aria-expanded="true" aria-controls="collapseOne">
                                                Proveedores
                                            </button>
                                        </h2>
                                        <div id="proveedor" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div id="checkProveedor">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-10">
                        <div class="row" id="inventoryList">
                            <?php foreach ($inventory as $e) { ?>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                    <div class="card">
                                        <img src="<?php echo $e["imagen"] ?>" class="card-img-top img-fluid" alt="<?php echo $e["nombreProducto"] ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $e["nombreProducto"] ?></h5>
                                            <p class="card-text">Cantidad: <?php echo $e["cantidadProduct"] ?></p>
                                            <p class="card-text">Categoria: <?php echo $e["categoria"] ?></p>
                                            <p class="card-text">Proveedor: <?php echo $e["proveedor"] ?></p>

                                            <?php
                                           
                                            if ($e["estadePromotion"] == 1) {
                                                ?>
                                                <?php
                                                if ($e["descuento"] != 0.00) {

                                                    $precioOriginal = $e["precio"]; // Puedes cambiar esto con tu precio original
                                                    $descuento = $e["descuento"]; // Puedes cambiar esto con tu descuento
                                                    $precioFinal = $precioOriginal - ($precioOriginal * ($descuento / 100));

                                                    ?>

                                                    <div class="d-flex flex-row mb-3">
                                                        <div class="p-2"><p class="card-text">Precio:</p></div>
                                                        <div class="p-2"><p
                                                                    class="card-text text-decoration-line-through text-danger"> <?php echo $e["precio"] ?></p>
                                                        </div>
                                                        <div class="p-2"><p
                                                                    class="card-text text text-success"> <?php echo $precioFinal ?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="d-flex flex-row mb-3">
                                                        <div class="p-2"><p class="card-text">
                                                                Precio: <?php echo $e["precio"] ?></p></div>
                                                        <div class="p-2">Articulo con promocion</div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                            } else {
                                                ?>
                                                <p class="card-text">Precio: <?php echo $e["precio"] ?></p>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="./Vista/js/scripts.js"></script>
<script src="./Vista/js/Inventory/main.js"></script>

</body>
</html>


