<?php
include ('protect.php');
    include_once("../../connect.php"); 

    if (isset($_POST['update'])) {
        $cod = filter_input(INPUT_POST, 'cod_produto', FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
        $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
        $validade = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING);

        $sqlUpdate = "UPDATE produto SET descricao='$descricao',categoria='$categoria',preco='$preco',fabricante='$fabricante',validade='$validade' WHERE cod_produto='$cod'";

        $result = $mysqli->query($sqlUpdate);
    }
    echo "<script>
                window.alert('Edição Feita com Sucesso!');
                window.location='../produtos.php';
            </script>";
?>