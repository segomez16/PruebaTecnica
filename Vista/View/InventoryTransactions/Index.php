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
    <div id="layoutSidenav_content">
        <main>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow text-center">
                            <h2>Lista de movientos al inventario</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#newTransaction">Nueva movimiento<i class="fa-solid fa-plus ps-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table  table-hover" id="transactionsTable">
                        <thead >
                        <tr>
                            <th scope="col" >Producto</th>
                            <th scope="col">Tipo de movimiento</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha del movimiento</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if ($tinventory != null) {
                            ?>
                            <?php foreach ($tinventory as $e) { ?>
                                <tr>
                                    <td><?php echo $e["ProductName"]; ?></td>
                                    <td><?php echo $e["TransactionType"]; ?></td>
                                    <td>
                                        <?php
                                            if($e["TRANSACTIONTYPE"]==1){
                                        ?>
                                            <p class="text-success"> <i class="fa-solid fa-plus pe-2"></i> <?php echo $e["QUANTITY"] ?>  </p>
                                        <?php
                                            }else if($e["TRANSACTIONTYPE"]==2){
                                        ?>
                                                <p class="text-danger"><i class="fa-solid fa-minus pe-2"></i> <?php echo $e["QUANTITY"] ?>  </p>
                                        <?php
                                            }
                                        ?>

                                    </td>
                                    <td><?php echo $e["TRANSACTIONDATE"]; ?></td>
                                </tr>
                            <?php } ?>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<div class="modal fade" id="newTransaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva transaccion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Tipo Movimiento</label>
                    <select id="typeTransactionSelect" class="form-select">
                        <option>Disabled select</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Producto</label>
                    <select id="productSelect" class="form-select">
                        <option>Disabled select</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="quantity" aria-describedby="emailHelp">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" id="addTransaction">Agregar transaccion</button>
            </div>
        </div>
    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="./Vista/js/scripts.js"></script>
<script src="./Vista/js/Transactions/main.js"></script>
</body>
</html>


