<?php
    include("conexao.php");

    //$_GET: É usada para coletar dados de formulário depois de enviar um formulário HTML.
    //$_POST: É usada para coletar dados de formulário depois de enviar um formulário HTML.
    //MD5: metódo php de criptografia.
    $codigo = $_GET['codigo'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = MD5($_POST['senha']);
    $genero = $_POST["genero"];
    $biotipo = $_POST["biotipo"];
    $equipamento = $_POST['equipamento'];
    $imagem = $_FILES['imagem']; 
    $extensao = $imagem['type'];
    $conteudo = file_get_contents($imagem['tmp_name']);
    $base64 = "data:".$extensao.";base64,".base64_encode($conteudo);

    //comando sql.
    $comando = $pdo->prepare("UPDATE usuario SET nome_usuario = :nome, email_usuario = :email, senha_usuario = :senha, genero_usuario = :genero, biotipo_usuario = :biotipo, equipamento_usuario = :equipamento, imagem_usuario = :conteudo WHERE pk_usuario = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    $comando->bindValue(':nome',$nome);
    $comando->bindValue(':email',$email);
    $comando->bindValue(':senha',$senha);
    $comando->bindValue(':genero',$genero);
    $comando->bindValue(':biotipo',$biotipo);
    $comando->bindValue(':equipamento',$equipamento);
    $comando->bindValue(':conteudo',$base64);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);

    header("location:editar_usuario2.php");
?>