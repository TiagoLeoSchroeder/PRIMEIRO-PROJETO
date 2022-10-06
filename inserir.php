<?php
    include("conexao.php");

    //atribuindo valores dos campos a variaveis.

    $nome = $_POST["nome"];

    $email = $_POST["email"];

    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    $senha = MD5($_POST["senha"]);

    $genero = $_POST["genero"];

    $biotipo = $_POST["biotipo"];

    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO usuario(nome_usuario, email_usuario, senha_usuario, genero_usuario, biotipo_usuario) VALUES(:email,:senha)");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);                                  
    
    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:tela2_Cadastro.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>