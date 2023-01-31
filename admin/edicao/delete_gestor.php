<?php
include ('protect.php');
if (!empty($_GET['id_gestor'])) {

    include_once("../../connect.php");

    $id = $_GET['id_gestor'];

    $sqlselect = "SELECT * FROM gestor WHERE id_gestor='$id'";

    $result = $mysqli->query($sqlselect);

    if ($result->num_rows > 0) {
        $sqldelete = "DELETE FROM gestor WHERE id_gestor='$id'";
        $resultdelete = $mysqli->query($sqldelete);
    }
    header('Location: ../gestor.php');
}

?>