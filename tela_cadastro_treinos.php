
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_cadastro_treinamento.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela Cadastro de Treinos</title>
</head>
<body>

    <form action="cadastrar_treino.php" method="post">
    <p>CADASTRAR TREINOS🏋🏽</p>
        <input type="text" placeholder="Nome do Treino" name="nome" id="nome">
        <br>
        <textarea placeholder="Descrição" name="descricao" id="descricao"></textarea>
        <br>
        <input type="submit">
        <input type="button" value="Voltar" onclick="Voltar()">
    </form>
<script>
    function Voltar(){
        window.close('tela_cadastro_treinos.php');
        window.open('tela_inicio_admin.php');
    }
</script>
</body>
</html>