<?php 
    //IMPORTAR PHP QUE CONECTA COM O BANCO DE DADOS
    include("conexao.php");

    // COMANDO SQL
    $comando = $pdo->prepare("SELECT nome_treino, descricao_treino FROM treino");

    // CÓDIGO PARA EXECUTAR O COMANDO ACIMA 
    $comando->execute();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="estilo_cliente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>LISTA DOS TREINOS</title>
</head>
<body>
    <div class="rodape"><h1 class="fonte">LISTAGEM DOS TREINOS.</h1></div>
    <p class="paragraph-2">LISTA DE EXERCÍCIOS REGISTRADOS</p>

    <form action="listar_treinos.php">
        <table class="table table-dark table-striped table-hover" style="position: relative; top: 5rem; font-family: 'Courier New', Courier, monospace; text-align: center;">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Equipamento</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Músculo</th>
                </tr>
            </thead>
            <tbody>
            <?php while($dado = $comando->fetch( PDO::FETCH_ASSOC )){ ?>
        <tr>
            <td><?php echo $dado["nome_treino"]; ?></td>
            <td><?php echo $dado["descricao_treino"]; ?></td>
        </tr>
        <?php } ?>
            </tbody>
          </table>
    <button type="submit" class="Listar">LISTAR TREINOS</button>
    <div class="voltar"><p><a href="tela_Inicio_cliente.php">VOLTAR</p></a></div>
    </form>
    
   
</body>
</html>