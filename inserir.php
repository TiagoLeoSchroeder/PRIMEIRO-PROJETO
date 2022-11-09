<?php
    include("conexao.php");

    //atribuindo valores dos campos a variaveis.

    $nome = $_POST["nome"];

    $email = $_POST["email"];

    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    $senha = MD5($_POST["senha"]);

    $genero = $_POST["genero"];

    $biotipo = $_POST["biotipo"];

    $imagem = $_FILES['imagem'];

    $extensao = $imagem['type'];

    $conteudo = file_get_contents($imagem['tmp_name']);

    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO usuario(nome_usuario, email_usuario, senha_usuario, genero_usuario, biotipo_usuario, imagem_usuario, is_adm_usuario) VALUES(:nome,:email,:senha,:genero,:biotipo,:conteudo, 0)");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);     
    $comando->bindValue(":genero",$genero);                                  
    $comando->bindValue(":biotipo",$biotipo);  
    $comando->bindValue(":conteudo",$base64);    
    
    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:tela_Cadastro.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>