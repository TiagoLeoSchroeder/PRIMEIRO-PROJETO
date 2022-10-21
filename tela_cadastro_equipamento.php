<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="StyleSheet" href="estilo_equipamento.css">
    <title>Tela de cadastro de equipamento</title>
</head>
<body>
    <h1 style="position: relative; left: 30%;">CADASTRO DE EQUIPAMENTOS</h1>
    <form action="cadastrar_equipamento.php" method="post">
        <label for="Nome"></label>
        <input type="text" name="Nome" placeholder="Nome do Equipamento: ">
        <br>
        <label for="descricao"></label>
        <input type="textarea" name="descricao" placeholder="Descrição: ">
        <br>
        <input type="submit" value="enviar">
</form>
</body>
</html>
