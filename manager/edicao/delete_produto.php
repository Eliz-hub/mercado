<?php
include ('protect.php');
if (!empty($_GET['cod_produto'])) {

    include_once("../../connect.php");

    $cod = $_GET['cod_produto'];

    $sqlselect = "SELECT * FROM produto WHERE cod_produto='$cod'";

    $result = $mysqli->query($sqlselect);

    if ($result->num_rows > 0) {
        $sqldelete = "DELETE FROM produto WHERE cod_produto='$cod'";
        $resultdelete = $mysqli->query($sqldelete);
    }
    header('Location: ../produtos.php');

}


?>