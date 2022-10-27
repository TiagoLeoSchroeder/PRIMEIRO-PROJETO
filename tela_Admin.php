<?php 
    //IMPORTAR PHP QUE CONECTA O BANCO DE DADOS
    include("conexao.php");

    // COMANDO SQL
    $comando = $pdo->prepare("SELECT pk_usuario, nome_usuario, email_usuario, senha_usuario, genero_usuario, biotipo_usuario FROM usuario");

    // CÓDIGO PARA EXECUTAR O COMANDO ACIMA 
    $comando->execute();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="StyleSheet" href="estilo_listar_usuario.css">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <p>BEM-VINDO ADMINISTRADOR</p>
    <h1 class="text1">Tabela de usuários cadastrados</h1>
    <table class="table table-dark table-striped table-hover">
        <tr>
            <th scope="col">ID_User</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Biotype</th>
        </tr>
        <?php while($dado = $comando->fetch(PDO::FETCH_ASSOC )){ 
        /* While: Ele dirá ao PHP para executar as declarações aninhadas repetidamente. */
        /* PDO::FETCH_ASSOC: retorna uma matriz indexada pelo nome da coluna conforme retornado em seu conjunto de resultados. */
        ?>
        <tr>
            <td><?php echo $dado["pk_usuario"]; ?></td>
            <td><?php echo $dado["nome_usuario"]; ?></td>
            <td><?php echo $dado["email_usuario"]; ?></td>
            <td><?php echo $dado["senha_usuario"]; ?></td>
            <td><?php echo $dado["genero_usuario"]; ?></td>
            <td><?php echo $dado["biotipo_usuario"]; ?></td>
        </tr>
        <?php } ?>
        <br>
    </table>
    <br><br><br>
    <h1 class="text1">Tabela de Treinos registrados por clientes</h1>
    <br>
    <table class="table table-dark table-striped table-hover">
        <tr>
            <th scope="col">User</th>
            <th scope="col">Name</th>
            <th scope="col">Difficult</th>
            <th scope="col">Equipment</th>
            <th scope="col">Muscle</th>
        </tr>
    </table>
    <div class="voltar"><h1><a href="tela_inicio_admin.php">VOLTAR</h1></a></div>
</body>
</html>