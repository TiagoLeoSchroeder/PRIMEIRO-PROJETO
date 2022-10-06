<?php
    include("conexao.php");

    //atribuindo valores dos campos a variaveis.
    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    //comando sql.
    $comando = $pdo -> prepare("SELECT senha_usuario, FROM usuario; WHERE email_usuario = :email");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":email",$email);                                                         
    
    //executa a consulta no banco de dados.
    $comando->execute();
    $get_senha = $comando->fetchColumn();    
    
    //Comparar senha informada com a senha armazenado no banco de dados.
    if($get_senha == MD5($set_senha)){
        header("Location:tela4_Inicio.php");
    }else{
        echo("Email ou Senha Inválida");
    }

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>