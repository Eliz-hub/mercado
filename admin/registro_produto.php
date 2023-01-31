<?php include ('protect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Produto - Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sidebars.css" rel="stylesheet">
    <link href="../css/form-validation.css" rel="stylesheet">
    <style>
        label {
            margin-bottom: 8px;
            margin-left: 2px;
        }

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
                    <a href="homepage_admin.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                        <img src="../icon/home0.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="collabs.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Colaboradores" data-bs-original-title="Colaboradores">
                        <img src="../icon/collabs.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="produtos.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Produtos" data-bs-original-title="Produtos">
                        <img src="../icon/produtos.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="vendas.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Vendas" data-bs-original-title="Vendas">
                        <img src="../icon/venda.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="stock.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Estoque" data-bs-original-title="Estoque">
                        <img src="../icon/stock.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="registar.php" class="nav-link active py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Novo Registo" data-bs-original-title="Novo Registo">
                        <img src="../icon/add.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../icon/admin.jpg" style="width: 20px; height: 20px;" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item text-center sair" href="../logout.php">Sair</a></li>
                </ul>
            </div>
        </div>

        <!---------------------------------------------------------------------------------------------------------------------------------->
        <div style="width: 93%; height: 100%; min-height: 100vh;">
            <div class="text-center mb-3" style="margin: 30px 0 0 15px;">
                <h3 class="font-weight-normal">Registo de Novo Produto</h3> <br>
            </div>
            <div class="col-md-12" style="margin: 30px 0 0 30px;">
                <form action="processo_registro_produto.php" method="POST" class="needs-validation" novalidate="">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-5">
                                <label>Descrição:</label>
                                <input type="text" class="form-control" name="descricao" required>
                                <br>
                            </div>
                            <div class="col-md-3">
                                <label>Categoria:</label>
                                <select class="form-select" id="state" required="" name="categoria">
                                    <option value="">Escolher...</option>
                                    <option value="Fruta">Fruta</option>
                                    <option value="Higiene e Limpeza">Higiene e Limpeza</option>
                                    <option value="Alimentos">Alimentos</option>
                                    <option value="Ferramentas">Ferramentas</option>
                                    <option value="Eletrodomésticos">Eletrodomésticos</option>
                                </select>
                                <br>
                            </div>
                            <div class="col-md-2">
                                <label>Preço:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="border-radius: 0;">MZN</span>
                                    </div>
                                    <input type="text" class="form-control" name="preco" required>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Quantidade:</label>
                                <input type="number" class="form-control" name="quantidade" required>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <label>Fabricante:</label>
                                <input type="text" class="form-control" name="fabric" required>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>Validade</label>
                            <input type="date" class="form-control" name="validade" required>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-bottom: 2px;">Registar</button>
                    </div>
                    <br>
                </form>
                <script src="../js/form-validation.js"></script>
            </div>
        </div>
    </main>

    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/sidebars.js"></script>


</body>

</html>