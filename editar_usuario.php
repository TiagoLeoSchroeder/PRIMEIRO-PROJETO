<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $genero = $_POST["genero"];
    $biotipo = $_POST["biotipo"];

    //comando sql.
    $comando = $pdo->prepare("UPDATE usuario SET nome_usuario = :nome, email_usuario = :email, genero_usuario = :genero, biotipo_usuario = :biotipo WHERE pk_usuario = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':email',$email);
    $comando->bindValue(':genero',$genero);
    $comando->bindValue(':biotipo',$biotipo);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:tela_Admin.php");
?>