<?php include_once('../connect.php');
include ('protect.php');
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM produto WHERE cod_produto LIKE '$data' or descricao LIKE '%$data%' or categoria LIKE '%$data%' or preco LIKE '$data' or fabricante LIKE '%$data%' or validade LIKE '$data%' ORDER BY cod_produto DESC";
}else{
    $sql = "SELECT * FROM produto ORDER BY cod_produto DESC";
}
$result = $mysqli->query($sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Gestor</title>
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
                    <a href="homepage_gestor.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                        <img src="../icon/home0.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="collabs.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Colaboradores" data-bs-original-title="Colaboradores">
                        <img src="../icon/collabs.png" style="width: 20px; height: 20px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="produtos.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Produtos" data-bs-original-title="Produtos">
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
            </ul>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../icon/gestor.png" style="width: 20px; height: 20px;" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item text-center sair" href="../logout.php">Sair</a></li>
                </ul>
            </div>
        </div>

        <!---------------------------------------------------------------------------------------------------------------------------------->

        <div class="text-center" style="width: 100vw; height: 100%; min-height: 100vh;">
            <h2 style="margin-top: 70px;">Produtos</h2>
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
                                <th scope="col">Descrição</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Preço (MZN)</th>
                                <th scope="col">Fabricante</th>
                                <th scope="col">Validade</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 13px">
                            <?php
                                while ($produto_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $produto_data['cod_produto'] . "</td>";
                                    echo "<td>" . $produto_data['descricao'] . "</td>";
                                    echo "<td>" . $produto_data['categoria'] . "</td>";
                                    echo "<td>" . $produto_data['preco'] . "</td>";
                                    echo "<td>" . $produto_data['fabricante'] . "</td>";
                                    echo "<td>" . $produto_data['validade'] . "</td>";
                                    echo "<td>
                                        <a class='btn btn-sm btn-primary' style='margin:2px' href='edicao/editar_produto.php?cod_produto=$produto_data[cod_produto]'><img src='../icon/edit.png' width=14 height:14></a>
                                        <a class='btn btn-sm btn-danger' style='margin:2px' href='edicao/delete_produto.php?cod_produto=$produto_data[cod_produto]'><img src='../icon/lixeira.png' width=14 height:14></a>
                                    </td>";
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
        window.location = 'produtos.php?search='+search.value;
    }
</script>

</html>