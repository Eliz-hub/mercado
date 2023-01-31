<?php
include ('protect.php');

if (!empty($_GET['id_caixa'])) {

    include_once("../../connect.php");

    $id = $_GET['id_caixa'];

    $sqlselect = "SELECT * FROM caixa WHERE id_caixa='$id'";

    $result1 = $mysqli->query($sqlselect);

    if ($result1->num_rows > 0) {
        while ($caixa_data = mysqli_fetch_assoc($result1)) {
            $nome = $caixa_data['nome_completo'];
            $data_nascimento = $caixa_data['data_nascimento'];
            $bi = $caixa_data['nr_bi'];
            $cidade = $caixa_data['cidade'];
            $endereco = $caixa_data['endereco'];
            $cell = $caixa_data['cell'];
            $cell_emerg = $caixa_data['cell_emergencia'];
            $email = $caixa_data['email'];
        }
    } else {
        header('Location: ../collabs.php');
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Caixa - Gestor</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/form-validation.css" rel="stylesheet">
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
                        <img src="../../icon/logo.jpg" style="width: 53px; height: 53px; margin-bottom:10px">
                </li>
                <li class="nav-item">
                    <a href="../homepage_gestor.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                        <img src="../../icon/home0.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../collabs.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Colaboradores" data-bs-original-title="Colaboradores">
                        <img src="../../icon/collabs.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../produtos.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Produtos" data-bs-original-title="Produtos">
                        <img src="../../icon/produtos.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../vendas.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Vendas" data-bs-original-title="Vendas">
                        <img src="../../icon/venda.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../stock.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Estoque" data-bs-original-title="Estoque">
                        <img src="../../icon/stock.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../icon/gestor.png" style="width: 20px; height: 20px;" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item text-center sair" href="../../logout.php">Sair</a></li>
                </ul>
            </div>
        </div>

        <!---------------------------------------------------------------------------------------------------------------------------------->

        <div style="width: 93%; height: 100%; min-height: 100vh;">
            <div class="text-center mb-3" style="margin: 30px 0 0 15px;">
                <h3 class="font-weight-normal">Editar Caixa</h3> <br>
            </div>
            <div class="row">
                <div class="col-md-7" style="margin: 30px 0 0 30px;">
                    <form action="save_edit_caixa.php" method="POST" class="needs-validation" novalidate="">
                        <div class="col-md-9">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" value="<?php echo "$nome"; ?>" required>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Data de Nascimento:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="data_nasc" value="<?php echo "$data_nascimento"; ?>" required>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label for="bi">Número de B.I:</label>
                            <input type="text" class="form-control" name="bi" value="<?php echo "$bi"; ?>" required>
                            <br>
                        </div>
                        <div class="col-md-9">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="cidade" value="<?php echo "$cidade"; ?>" required>
                            <br>
                        </div>
                        <div class="col-md-9">
                            <label>Endereço</label>
                            <input type="text" class="form-control" name="endereco" value="<?php echo "$endereco"; ?>" required>
                            <br>
                        </div>
                        <div class="col-md-9">
                            <label>Telemovel</label>
                            <input type="contact" class="form-control" name="cell" value="<?php echo "$cell"; ?>" required>
                            <br>
                        </div>
                        <div class="col-md-9">
                            <label>Telemovel (Emergência)</label>
                            <input type="contact" class="form-control" name="cell_emergency" value="<?php echo "$cell_emerg"; ?>" required>
                            <br>
                        </div>
                        <div class="col-md-9">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="eu@exemplo.com" value="<?php echo "$email"; ?>" required>
                            <br>
                        </div>
                        <input type="hidden" class="form-control" name="id" value="<?php echo "$id"; ?>" required>
                        <div class="col-md-9 text-center">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" id="update" name="update">Guardar</button>
                        </div>
                        <br>
                        <br>
                        <br>
                    </form>

                    <script src="../../js/form-validation.js"></script>
                </div>
                <div class="col-md-4" style="justify-content: left; margin: 20% 0 0 20px;">
                    <p>NOTA IMPORTANTE: Todos os campos devem ser preenchidos obrigatoriamene de modo a alcancar as
                        metas pretendidas.</p>
                </div>
            </div>
        </div>


    </main>

    <script src="../../js/bootstrap.bundle.min.js"></script>

    <script src="../../js/sidebars.js"></script>


</body>

</html>