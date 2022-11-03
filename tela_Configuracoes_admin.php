<?php 
    //IMPORTAR PHP QUE CONECTA COM O BANCO DE DADOS
    include("conexao.php");

    // COMANDO SQL
    $comando = $pdo->prepare("SELECT pk_usuario, nome_usuario, email_usuario, senha_usuario, genero_usuario, biotipo_usuario FROM usuario");

    // CÓDIGO PARA EXECUTAR O COMANDO ACIMA 
    $comando->execute();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_configuracoes.css">
    <title>Configurações</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <p class="paragraph">🔔  Notificar Clientes 📫</p>
        </div>
    </div>
        
    <table class="table table-dark table-striped table-hover" style="height: 10rem;">
    <tr>
            <th scope="col">Id_Usuário</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Gender</th>
            <th scope="col">Biotype</th>
            <th scope="col">Notificar</th>
        </tr>
        <?php while($dado = $comando->fetch( PDO::FETCH_ASSOC )){ 
        /* While: Ele dirá ao PHP para executar as declarações aninhadas repetidamente. */
        /* PDO::FETCH_ASSOC: retorna uma matriz indexada pelo nome da coluna conforme retornado em seu conjunto de resultados. */
        /* <tr>: um elemento <tr> vai conter um ou mais elementos. Ex: <td> <th>. */
        /* <td>: tag que gera uma célula de dados que fica abaixo da tabela. */
        /* <th>: gera uma célula de cabeçalho para a tabela */
        ?>
        <tr>
            <td><?php echo $dado["pk_usuario"]; ?></td>
            <td><?php echo $dado["nome_usuario"]; ?></td>
            <td><?php echo $dado["email_usuario"]; ?></td>
            <td><?php echo $dado["senha_usuario"]; ?></td>
            <td><?php echo $dado["genero_usuario"]; ?></td>
            <td><?php echo $dado["biotipo_usuario"]; ?></td>
            <td> <a href="notificar_usuario.php?codigo=<?php echo $dado['pk_usuario'] ?>">
                <input type="button" class="btn btn-outline-secondary" style="width: 10rem; margin: auto;" value="Notificar Usuário">
                </a>
            </td>
        </tr>
        <?php } ?>
        <br>
    </table>
    <input type="button" class="Voltar" value="Voltar" onclick="Voltar()">
    <script>
        function Voltar(){
            window.close('tela_Configuracoes_admin.php');
            window.open('tela_inicio_admin.php');
        }
    </script>
</body>
</html>