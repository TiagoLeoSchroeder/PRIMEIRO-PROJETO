<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    //comando sql.
    $comando = $pdo->prepare("UPDATE equipamento SET nome_equipamento = :nome, descricao_equipamento = :descricao WHERE pk_equipamento = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':descricao',$descricao);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:tela_equipamento.php");
?>