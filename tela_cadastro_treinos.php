<?php 
    //IMPORTAR PHP QUE CONECTA COM O BANCO DE DADOS
    include("conexao.php");

    // COMANDO SQL
    $comando = $pdo->prepare("SELECT pk_treino, nome_treino, descricao_treino FROM treino");

    // CÓDIGO PARA EXECUTAR O COMANDO ACIMA 
    $comando->execute();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_treinamento.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela Cadastro de Treinos</title>
</head>
<body>

    <form action="cadastrar_treino.php" method="post">
    <p>CADASTRAR TREINOS🏋🏽</p>
        <input type="text" placeholder="Nome do Treino:" name="nome">
        <br>
        <textarea placeholder="Descrição" name="descricao" id="descricao"></textarea>
        <br>
        <input type="submit">
        <input type="button" value="Voltar" onclick="Voltar()">
    </form>
    <table class="table table-dark table-striped table-hover w-50 p-3">
    <tr>
            <th scope="col">Num. Registro do treino</th>
            <th scope="col">Nome do Treino</th>
            <th scope="col">Descrição do Treino</th>
            <th scope="col">Editar Treino</th>
            <th scope="col">Excluir Treino</th>
        </tr>
        <?php while($dado = $comando->fetch( PDO::FETCH_ASSOC )){ ?>
        <tr>
            <td><?php echo $dado["pk_treino"]; ?></td>
            <td><?php echo $dado["nome_treino"]; ?></td>
            <td><?php echo $dado["descricao_treino"]; ?></td>
            <td> <a href="editar_treino.php?codigo=<?php echo $dado['pk_treino'] ?>">
                <input type="button" class="btn btn-outline-secondary" value="Editar">
                </a>
            </td>
            <td> <a href="excluir_treino.php?codigo=<?php echo $dado['pk_treino'] ?>">
                <input type="button" class="btn btn-outline-secondary" value="Excluir">
                </a>
            </td>
        </tr>
        <?php } ?>
        <br>
<script>
    function Voltar(){
        window.close('tela_cadastro_treinos.php');
        window.open('tela_inicio_admin.php');
    }
</script>
</body>
</html>