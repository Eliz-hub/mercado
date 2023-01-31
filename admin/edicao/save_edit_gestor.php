<?php
include ('protect.php');
    include_once("../../connect.php"); 

    if (isset($_POST['update'])) {
        $id = filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
        $data_nascimento = filter_input(INPUT_POST, 'data_nasc',FILTER_SANITIZE_STRING);
        $nr_bi = filter_input(INPUT_POST, 'bi',FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade',FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco',FILTER_SANITIZE_STRING);
        $cell = filter_input(INPUT_POST, 'cell',FILTER_SANITIZE_STRING);
        $cell_emerg = filter_input(INPUT_POST, 'cell_emergency',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);

        $sqlUpdate = "UPDATE gestor SET nome_completo='$nome',data_nascimento='$data_nascimento',numero_bi='$nr_bi', cidade='$cidade',endereco='$endereco',cell='$cell',cell_emergencia='$cell_emerg', email='$email' WHERE id_gestor='$id'";

        $result = $mysqli->query($sqlUpdate);
    }
    echo "<script>
                window.alert('Edição Realizada com Sucesso!');
                window.location='../gestor.php';
            </script>";