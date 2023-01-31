<?php
include ('protect.php');
if (!empty($_GET['id_cliente'])) {

    include_once("../../connect.php");

    $id = $_GET['id_cliente'];

    $sqlselect = "SELECT * FROM cliente WHERE id_cliente='$id'";

    $result = $mysqli->query($sqlselect);

    if ($result->num_rows > 0) {
        $sqldelete = "DELETE FROM cliente WHERE id_cliente='$id'";
        $resultdelete = $mysqli->query($sqldelete);
    }
    header('Location: ../clientes.php');
}


?>