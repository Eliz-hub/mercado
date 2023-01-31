<?php
include ('protect.php');
    include_once("../../connect.php");

    if (isset($_POST['update'])) {
        $id = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_STRING);
        $pnome = filter_input(INPUT_POST, 'primeiro_nome',FILTER_SANITIZE_STRING);
        $unome = filter_input(INPUT_POST, 'ultimo_nome',FILTER_SANITIZE_STRING);
        $data_nascimento = filter_input(INPUT_POST, 'data_nasc',FILTER_SANITIZE_STRING);
        $nr_bi = filter_input(INPUT_POST, 'bi',FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade',FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
        $cell = filter_input(INPUT_POST, 'cell',FILTER_SANITIZE_STRING);
        $cell_alt = filter_input(INPUT_POST, 'cell_alter',FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'user',FILTER_SANITIZE_STRING);

        $sqlUpdate = "UPDATE cliente SET primeiro_nome='$pnome',ultimo_nome='$unome',data_nascimento='$data_nascimento',nr_bi='$nr_bi', cidade='$cidade',endereco='$endereco',email='$email', cell='$cell',cell_alternativo='$cell_alt', username='$username' WHERE id_cliente='$id'";

        $result = $mysqli->query($sqlUpdate);
    }
    echo "<script>
                window.alert('Edição Feita com Sucesso!');
                window.location='../clientes.php';
            </script>";