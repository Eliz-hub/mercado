<?php
include ('protect.php');
    include_once("../../connect.php"); 

    if (isset($_POST['update'])) {
        $cod = filter_input(INPUT_POST, 'cod_produto', FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
        $entrada = filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_STRING);

        $sqlUpdate = "UPDATE produto SET descricao='$descricao',quantidade='$quantidade', data_registro ='$entrada' WHERE cod_produto='$cod'";

        $result = $mysqli->query($sqlUpdate);
    }
    echo "<script>
                window.alert('Edição Feita com Sucesso!');
                window.location='../stock.php';
            </script>";
?>