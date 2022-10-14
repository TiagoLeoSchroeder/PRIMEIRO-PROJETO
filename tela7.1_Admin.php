<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="estilo7.1_admin.css">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <?php 
        include("listar_usuarios.php");

        echo("<p>Bem-vindo ".$informacoes_usuario['nome_usuario']);
    
    ?>

    <h3>Listar Usuários:</h3>
    <table>
        
    </table>
   
    <div class="voltar"><p><a href="tela4.1_Inicio2.php">VOLTAR</p></a></div>
</body>
</html>