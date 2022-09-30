<?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $comando = $pdo->prepare("SELECT idusuario,senha_usuario,is_adm_usuario FROM usuario WHERE email_usuario = :email");
    $comando->bindValue(":email",$email);
    $comando->execute();

    if($comando->rowCount() == 1)
    {
        $resultado = $comando->fetch();
        
        if($resultado['senha_usuario'] == MD5($set_senha){

            session_start();
            $_SESSION['pk_usuario'] - $resultado['pk_usuario'];
            $_SESSION['is_adm_usuario'] - $resultado['is_adm_usuario'];
            $_SESSION['loggedin'] = true;
            
            header("Location: pagina_inicial.php");

        }
    }else{
        echo("Email ou senha incorreto!");
    }

?>