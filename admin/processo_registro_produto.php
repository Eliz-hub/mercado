<?php
include ('protect.php');
include_once("../connect.php");

$descricao = filter_input(INPUT_POST, 'descricao',FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria',FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco',FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade',FILTER_SANITIZE_STRING);
$fabricante = filter_input(INPUT_POST, 'fabric',FILTER_SANITIZE_STRING);
$validade = filter_input(INPUT_POST, 'validade',FILTER_SANITIZE_STRING);

$result_users = "INSERT INTO produto (descricao,categoria, preco, quantidade, fabricante, validade, data_registro) VALUES ('$descricao','$categoria', '$preco','$quantidade', '$fabricante', '$validade', NOW())";
$resultado_users = mysqli_query($mysqli, $result_users);

if(mysqli_insert_id($mysqli)){
    echo "<script>
                window.alert('Registro Feito com sucesso!');
                window.location='registro_produto.php';
            </script>";
}else{
    header("Location:homepage_admin.php");
}
?>