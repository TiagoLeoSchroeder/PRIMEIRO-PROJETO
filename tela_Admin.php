<?php 
    
    include("conexao.php");

    $comando = $pdo->prepare("SELECT pk_usuario, nome_usuario, email_usuario, senha_usuario, genero_usuario, biotipo_usuario FROM usuario");

    $comando->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="StyleSheet" href="estilo_listar_usuarios.css">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <p>BEM-VINDO ADMINISTRADOR</p>
    <table class="table table-dark table-striped table-hover">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Genero</th>
            <th scope="col">Biotipo</th>
        </tr>
        <?php while($dado = $comando->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td><?php echo $dado["pk_usuario"]; ?></td>
            <td><?php echo $dado["nome_usuario"]; ?></td>
            <td><?php echo $dado["email_usuario"]; ?></td>
            <td><?php echo $dado["senha_usuario"]; ?></td>
            <td><?php echo $dado["genero_usuario"]; ?></td>
            <td><?php echo $dado["biotipo_usuario"]; ?></td>
        </tr>
        <?php } ?>
    </table>
    <div class="voltar"><h1><a href="tela_inicio_admin.php">VOLTAR</h1></a></div>
</body>
</html>