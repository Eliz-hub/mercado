<?php
include('../connect.php');

$sqlUpdate = "DELETE FROM venda WHERE cod_venda = (SELECT MAX(cod_venda) FROM venda)";
$result = $mysqli->query($sqlUpdate);
header("Location: venda0.php");