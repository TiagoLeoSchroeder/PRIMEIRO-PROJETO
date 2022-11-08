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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="StyleSheet" href="estilo_edicao_equipamento.css">
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <!--O action determina para onde será enviado os dados do formulário.-->
    <form action="editar_equipamento.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST" enctype="multipart/form-data">
    <h1 class="textocima">EDITAR CADASTRO DE EQUIPAMENTO </h1>
        <input type="text" placeholder="Nome do Equipamento:" name="nome">
        <br>
        <textarea placeholder="Descrição" name="descricao" id="descricao"></textarea>
        <br>
        <input type="submit"  value="Atualizar" name="submit">
        <button onclick="Voltar();">Voltar</button>
    </form>
    <script>
        function Voltar(){
            window.close('editar_treino2.php');
            window.open('tela_cadastro_treinos.php');
    
    </script>
</body>
</html>