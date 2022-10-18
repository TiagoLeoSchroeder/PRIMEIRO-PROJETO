<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT nome_treino, nivel_treino, equipamento_treino, musculo_treino FROM treino");

    $comando->execute();

?>