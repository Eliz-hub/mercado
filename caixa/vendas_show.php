<?php
include ('protect.php');
include('../connect.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM venda WHERE cod_venda LIKE '$data' or cod_produto LIKE '$data' or quantidade LIKE '$data' or data_venda LIKE '$data%' ORDER BY cod_venda DESC";
}else{
    $sql = "SELECT * FROM venda ORDER BY cod_venda DESC";
}
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vendas - Caixa</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../sidebars.css" rel="stylesheet">
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
                    <a href="homepage_caixa.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                        <img src="../icon/home0.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="vendas.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Vendas" data-bs-original-title="Vendas">
                        <img src="../icon/venda.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="produtos.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page"
                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Produtos"
                    data-bs-original-title="Produtos">
                        <img src="../icon/produtos.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../icon/caixa.png" style="width: 20px; height: 20px;">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item text-center sair" href="../logout.php">Sair</a></li>
                </ul>
            </div>
        </div>

        <!---------------------------------------------------------------------------------------------------------------------------------->

        <div class="text-center" style="width: 100vw; height: 100%; min-height: 100vh;">
            <h2 style="margin-top: 70px;">Lista de Vendas</h2>
            <div class="box-search" style="display: flex; justify-content:left; margin: 30px 20px 30px 50px;">
                <input type="search" class="form-control w-25" id="pesquisar" placeholder="Pesquisar" style="border-radius: 10px 0 0 10px;">
                <button onclick="searchData()" class="btn btn-primary" style="border-radius: 0 10px 10px 0"><img src="../icon/lupa.png" height=18 width=18></button>
            </div>
            <div class="bd-example-snippet bd-code-snippet" style="margin: 30px 20px 30px 20px;">
                <div class="bd-example text-center">
                    <table class="table table-striped">
                        <thead style="font-size: 14px">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Preço unitário (MZN)</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor Total (MZN)</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 13px">
                            <?php
                                while ($venda_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $venda_data['cod_venda'] . "</td>";
                                    echo "<td>" . $venda_data['cod_produto'] . "</td>";
                                    echo "<td>" . $venda_data['descricao'] . "</td>";
                                    echo "<td>" . $venda_data['preco'] . "</td>";
                                    echo "<td>" . $venda_data['quantidade'] . "</td>";
                                    echo "<td>" . $venda_data['preco_total'] . "</td>";
                                    echo "<td>" . $venda_data['data_venda'] . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <?php 
                        if($result->num_rows == 0){
                            echo "Nenhum Resultado Encontrado";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/sidebars.js"></script>

</body>

<script>
    var search = document.getElementById('pesquisar');
    
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter"){
            searchData();
        }
    })
        
    function searchData(){
        window.location = 'vendas_show.php?search='+search.value;
    }
</script>

</html>