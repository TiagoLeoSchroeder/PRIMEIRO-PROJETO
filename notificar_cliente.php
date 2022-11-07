<?php 
    //IMPORTAR PHP QUE CONECTA COM O BANCO DE DADOS
    include("conexao.php");

    $dado = $_GET['pk_usuario'];

    // COMANDO SQL
    $comando = $pdo->prepare("SELECT pk_usuario, nome_usuario, email_usuario, senha_usuario, genero_usuario, biotipo_usuario FROM usuario");

    // CÓDIGO PARA EXECUTAR O COMANDO ACIMA 
    $comando->execute();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOS MANDE UM E-MAIL</title>
    <link rel="Stylesheet" href="estilo_contato.css">
</head>
<body>
    <h1>NOTIFICAR CLIENTE:<?php echo $dado['pk_usuario']; ?> 📧</h1>
    <form action="https://formsubmit.co/tiago_l_schroeder@estudante.sc.senai.br" method="POST" >
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" required />
        <label for="Email">Email</label>
        <input type="email" name="Email" required />
        <label for="Mensagem">Mensagem</label>
        <textarea name="Mensagem" id="Mensagem"required></textarea>
        <input type="hidden" name="_captcha" value="false"/>
        <br>
        <button type="submit">ENVIAR</button>
   </form>

   <div class="voltar"><p><a href="tela_Inicio_cliente.php">VOLTAR</p></a></div>
</body>
</html>