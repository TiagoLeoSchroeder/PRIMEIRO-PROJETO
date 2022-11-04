<?php 
    //IMPORTAR PHP QUE CONECTA COM O BANCO DE DADOS
    include("conexao.php");

    // COMANDO SQL
    $comando = $pdo->prepare("SELECT pk_equipamento, nome_equipamento, descricao_equipamento FROM equipamento");

    // CÓDIGO PARA EXECUTAR O COMANDO ACIMA 
    $comando->execute();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="StyleSheet" href="estilo_equipamento.css">
    <title>Tela de cadastro de equipamento</title>
</head>
<body>
    <h1 class="textocima">CADASTRO DE EQUIPAMENTOS</h1>
    <form action="cadastrar_equipamento.php" method="POST">
        <h1></h1>
        <label for="Nome"></label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Equipamento: ">
        <br>
        <label for="descricao"></label>
        <textarea name="descricao" id="descricao" placeholder="Descrição: "></textarea>
        <br>
        <input type="submit" value="Enviar">
        <button onclick="Voltar();">Voltar</button>
</form>
<table class="table table-dark table-striped table-hover w-50 p-3">
    <tr>
            <th scope="col">Cod do Equipamento</th>
            <th scope="col">Nome do Equipamento</th>
            <th scope="col">Descrição</th>
            <th scope="col">Editar Equipamento</th>
            <th scope="col">Excluir Equipamento</th>
        </tr>
        <?php while($dado = $comando->fetch( PDO::FETCH_ASSOC )){ ?>
        <tr>
            <td><?php echo $dado["pk_equipamento"]; ?></td>
            <td><?php echo $dado["nome_equipamento"]; ?></td>
            <td><?php echo $dado["descricao_equipamento"]; ?></td>
            <td> <a href="editar_equipamento.php?codigo=<?php echo $dado['pk_equipamento'] ?>">
                <input type="button" class="btn btn-outline-secondary" value="Editar">
                </a>
            </td>
            <td> <a href="excluir_equipamento.php?codigo=<?php echo $dado['pk_equipamento'] ?>">
                <input type="button" class="btn btn-outline-secondary" value="Excluir">
                </a>
            </td>
        </tr>
        <?php } ?>
        <br>
    </table>
<script>
    function Voltar(){
        window.open('tela_inicio_admin.php');
        window.close('tela_equipamento.php');
    }
</script>
</body>
</html>
