<?php 
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_cadastro_treino.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela Cadastro de Treinos</title>
</head>
<body>

    <form action="cadastrar_treino.php" method="post">
    <p>CADASTRAR TREINOS🏋🏽</p>
        <input type="text" placeholder="Nome do Treino">
        <br>
        <textarea placeholder="Descrição"></textarea>
        <br>
        <input type="submit">
        <input type="button" value="Voltar">
    </form>
</div>
</body>
</html>