<?php

session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: tela_Logar.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="estilo_edicao_treinos.css">
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <!--O action determina para onde será enviado os dados do formulário.-->
    <form action="editar_treino.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST" enctype="multipart/form-data">
    <p>CADASTRAR TREINOS🏋🏽</p>
        <input type="text" placeholder="Nome do Treino:" name="nome">
        <br>
        <textarea placeholder="Descrição" name="descricao" id="descricao"></textarea>
        <br>
        <input type="submit" value="Atualizar" name="submit">
        <input type="button" value="Voltar" onclick="Voltar()">
    </form>
    <script>
        function Voltar(){
            window.close('editar_treino2.php');
            window.open('tela_cadastro_treinos.php');
        }
    </script>
</body>
</html>