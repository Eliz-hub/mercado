<?php
include ('protect.php');
if (!empty($_GET['id_caixa'])) {

    include_once("../../connect.php");

    $id = $_GET['id_caixa'];

    $sqlselect = "SELECT * FROM caixa WHERE id_caixa='$id'";

    $result1 = $mysqli->query($sqlselect);

    if ($result1->num_rows > 0) {
        $sqldelete = "DELETE FROM caixa WHERE id_caixa='$id'";
        $resultdelete = $mysqli->query($sqldelete);
    }
    header('Location: ../caixa.php');
}


?>