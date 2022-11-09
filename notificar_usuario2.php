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
    <h1>NOTIFICAR CLIENTE 📧</h1>
    <form action="notificar_usuario.php" method="POST" >
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" required />
        <label for="Email">Assunto</label>
        <input type="text" name="subject" required />
        <label for="Mensagem">Mensagem</label>
        <textarea name="Mensagem" id="message" required></textarea>
        <input type="hidden" name="_captcha" value="false"/>
        <br>
        <button type="submit">ENVIAR</button>
   </form>

   <div class="voltar"><p><a href="tela_Inicio_cliente.php">VOLTAR</p></a></div>
</body>
</html>