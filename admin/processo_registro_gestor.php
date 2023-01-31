<?php
include ('protect.php');
include_once("../connect.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$data_nascimento = filter_input(INPUT_POST, 'data_nasc',FILTER_SANITIZE_STRING);
$nr_bi = filter_input(INPUT_POST, 'bi',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade',FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco',FILTER_SANITIZE_STRING);
$cell = filter_input(INPUT_POST, 'cell',FILTER_SANITIZE_STRING);
$cell_emerg = filter_input(INPUT_POST, 'cell_emergency',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'pass',FILTER_SANITIZE_STRING);

$pass_crypt = md5($password); 

$sql = "INSERT INTO gestor (nome_completo, data_nascimento, numero_bi, cidade, endereco, cell, cell_emergencia, email, pass, data_registro) VALUES ('$nome','$data_nascimento','$nr_bi', '$cidade', '$endereco','$cell','$cell_emerg', '$email', '$pass_crypt', NOW())";
$result = mysqli_query($mysqli, $sql);

if(mysqli_insert_id($mysqli)){
    echo "<script>
                window.alert('Registro Feito com sucesso!');
                window.location='registro_gestor.php';
            </script>";
}else{
    header("Location:homepage_admin.php");
}
?>