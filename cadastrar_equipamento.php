<?php 

include('conexao.php');
//------------------------------------------//
$nome = $_POST["nome"];
//------------------------------------------//
$descricao = $_POST["descricao"];
//------------------------------------------//
$comando = $pdo->prepare("INSERT INTO equipamento(nome_equipamento,descricao_equipamento) VALUES(:nome,:descricao)");
//------------------------------------------//
$comando->bindValue(":nome",$nome);
$comando->bindValue(":descricao",$descricao);
//------------------------------------------//
$comando->execute();
//------------------------------------------//
header("Location:tela_equipamento.php");
//------------------------------------------//
unset($comando);
unset($pdo);
?>