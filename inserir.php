<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);
    $genero = $_POST['genero'];
    $biotipo = $_POST['biotipo'];
    $comando = $pdo -> prepare("INSERT INTO usuario(email_usuario,senha_usuario, genero_usuario,biotipo_usuario) VALUES(:email,:senha,:genero,:biotipo)");
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);  
    $comando->bindValue(':genero',$genero);
    $comando->bindValue(':biotipo',$biotipo);  
    $comando->execute();  

    header("Location:tela2 - Cadastro.html");
?>