<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    echo "<script>
                window.alert('Não tem permissão para acessar esta página! Faça o login');
                window.location='../../index.php';
            </script>";
}

?>