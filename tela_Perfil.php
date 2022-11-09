<?php
session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: tela_Logar.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_Perfil.css">
    <title>Perfil do Cliente</title>
</head>
<body>
    <h1>PERFIL</h1>
    <?php include("listar_usuario_conectado.php"); echo '<img height="80px" width="80px" style=" width: 25rem; height: 21rem; position: relative; left: 6rem; margin-top: 5rem; border-radius: 20rem;" src="' .$informacoes_usuario['imagem_usuario']. '">'; ?>
    <p class="paragraph"> <?php include("listar_usuario_conectado.php"); echo "".$informacoes_usuario['nome_usuario'].""; ?></p>
    <form class="container" style="position: relative; bottom: 43rem;">
        <br>
        <div class="mb-3">
        <br>
        <p class="paragraph2">Nome</p>
        <input class="form-control" type="text" value=" <?php include("listar_usuario_conectado.php"); echo "".$informacoes_usuario['nome_usuario'].""; ?>" aria-label="Disabled input example" disabled readonly>
          <br>    
        <p class="paragraph2">Email</p>
            <input class="form-control" type="text" value=" <?php include("listar_usuario_conectado.php"); echo "".$informacoes_usuario['email_usuario'].""; ?>" aria-label="Disabled input example" disabled readonly>
          </div>
          <br>
          <div class="mb-3">
            <p class="paragraph2">Genero</p>
            <input class="form-control" type="text" value=" <?php include("listar_usuario_conectado.php"); echo "".$informacoes_usuario['genero_usuario'].""; ?>" aria-label="Disabled input example" disabled readonly>
          </div>
          <br>
          <p class="paragraph2">Biotipo</p>
          <div class="mb-3">
            <p class="paragraph2"></p>
            <input class="form-control" type="text" value=" <?php include("listar_usuario_conectado.php"); echo "".$informacoes_usuario['biotipo_usuario'].""; ?>" aria-label="Disabled input example" disabled readonly>
          </div>
          <div class="button" style="position: relative; top: 1.5rem;"><a href="tela_Inicio_cliente.php">VOLTAR</a></div>
    </form>
    
</body>
</html>