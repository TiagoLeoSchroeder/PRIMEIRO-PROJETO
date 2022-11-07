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
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <!--O action determina para onde será enviado os dados do formulário.-->
    <form action="editar_usuario.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST" enctype="multipart/form-data">
        <label>Nome:</label>
        <br>
        <input type="text" name="nome" value="<?php echo $usuario['nome_usuario']?>" required>
        <br>
        <label>Email:</label>
        <br>
        <input type="text" name="email" value="<?php echo $usuario['email_usuario']?>" required>
        <br>
        <label>Senha:</label>
        <br>
        <input type="password" name="senha">
        <br>
        <div class="container-2">
                <select name="genero" class="format" required>
                <option value="0" selected disabled>Seu Gênero:</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
                </select>

                <select name="biotipo" class="format" required>
                        <option value="0" selected disabled>Seu Biotipo:</option>
                        <option value="Endomorfo">Endomorfo</option>
                        <option value="Mesomorfo">Mesomorfo</option>
                        <option value="Ectomorfo">Ectomorfo</option>
                </select>
            </div>
        <!--Necessário um input do tipo submit.-->
        <input type="submit" value="Atualizar" name="submit">
    </form>
    <br>
    <a href="tela_Admin.php">Voltar</a>
</body>
</html>