<?php 
//-- CONECTAR COM O BANCO DE DADOS --//
include('conexao.php');
//---INSERIR OS DADOS --//
$nome = $_POST['nome'];
$descricao = $_POST["descricao"];
//--- COMANDO SQL --//
$comando = $pdo->prepare("INSERT INTO treino(nome_treino,descricao_treino) VALUES(:nome,:descricao)");
//-- COMANDO PARA INSERIR OS DADOS --//
$comando->bindValue(":nome",$nome);
$comando->bindValue(":descricao",$descricao);
//--- EXECUTAR OS COMANDOS ACIMA ----//
$comando->execute();
//-- ATUALIZAR TELA ATUAL --//
header("Location:tela_cadastro_treinos.php");
//--- FINALIZAR OS COMANDOS----//
unset($comando);
unset($pdo);
?>