<?php include ('protect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaboradores - Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>
    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 bg-light text-center" style="width: 3.5%; min-width: 53px;">
            <ul class="nav nav-pills nav-flush mb-auto">
                <li class="nav-item">
                        <img src="../icon/logo.jpg" style="width: 53px; height: 53px; margin-bottom:10px">
                </li>    
                <li class="nav-item">
                    <a href="homepage_admin.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home"
                    data-bs-original-title="Home">
                        <img src="../icon/home0.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="collabs.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Colaboradores"
                    data-bs-original-title="Colaboradores">
                        <img src="../icon/collabs.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="produtos.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Produtos"
                    data-bs-original-title="Produtos">
                        <img src="../icon/produtos.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="vendas.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Vendas"
                    data-bs-original-title="Vendas">
                        <img src="../icon/venda.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="stock.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Estoque"
                    data-bs-original-title="Estoque">
                        <img src="../icon/stock.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="registar.php" class="nav-link py-3 rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Novo Registo"
                    data-bs-original-title="Novo Registo">
                        <img src="../icon/add.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#"
                    class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../icon/admin.jpg" style="width: 20px; height: 20px;" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item text-center sair" href="../logout.php">Sair</a></li>
                </ul>
            </div>
        </div>

<!---------------------------------------------------------------------------------------------------------------------------------->

        <div class="text-center" style="width: 93%; height: 100vh;">
            <div class="row mb-4 text-center" style="margin: 30px 0 0 40px;">
                <div class="col-1" style="background-color: rgba(1,1,1,0.15); margin:8px; min-width: 100px">
                    <a href="gestor.php" class="text-decoration-none" style="color: black; font-size:14px">
                        <img src="../icon/gestor.png" style="width: 63px; height: 69px; margin: 5px;"><br>
                    Gestor
                    </a>
                </div>
                <div class="col-1" style="background-color: rgba(1,1,1,0.15); margin:8px; min-width: 100px">
                    <a href="caixa.php" class="text-decoration-none" style="color: black; font-size:14px">
                        <img src="../icon/caixa.png" style="width: 70px; height: 70px; margin: 5px;"><br>
                        Caixa
                    </a>
                </div>
            </div>
        </div>

        
    </main>

    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/sidebars.js"></script>


</body>

</html>