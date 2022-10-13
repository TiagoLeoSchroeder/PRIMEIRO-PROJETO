
<?php
    include("conexao.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT nome_usuario FROM usuario WHERE pk_usuario = :pk_usuario");
    $comando = bindValue(":pk_usuario", $_SESSION["pk_usuario"]);       
    //executa a consulta no banco de dados.
    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $informacoes_usuario = $comando->fetch();
    }else {
        echo("Não há usuários Cadastrados!");
    }
?>