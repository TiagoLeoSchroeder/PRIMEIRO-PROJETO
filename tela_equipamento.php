<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="StyleSheet" href="estilo_equipamento.css">
    <title>Tela de cadastro de equipamento</title>
</head>
<body>
    <h1 class="textocima">CADASTRO DE EQUIPAMENTOS</h1>
    <form action="cadastrar_equipamento.php" method="post">
        <h1></h1>
        <label for="Nome"></label>
        <input type="text" name="Nome" id="Nome" placeholder="Nome do Equipamento: ">
        <br>
        <label for="descricao"></label>
        <textarea name="descricao" id="descricao" placeholder="Descrição: "></textarea>
        <br>
        <input type="submit" value="Enviar">
        <button onclick="Voltar();">Voltar</button>
</form>
<script>
    function Voltar(){
        window.close('tela_equipamento.php');
        window.open('tela_inicio_admin.php');
    }
</script>
</body>
</html>
