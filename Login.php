<style>
    body{
        background-image: url('fundo4.jpg');
        background-size: cover;
        background-attachment: fixed;
    }
    p{
        width: 90%;
        height: 20%;
        background-color: rgba(255,255,255,0.418);
        font-size: 7rem;
        font-style: italic;
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        top: 30%;
        left: 5%;
        color: #000;
        text-shadow: 3px 5px 10px #fff;
        box-shadow: 3px 5px 10px #fff;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border-style: solid;
        border-color: #fff;
        border-width: 1px;
        border-radius: 20px;
    }
    button{
        width: 30%;
        height: 12%;
        position: relative;
        top: 30%;
        left: 35%;
        font-size: 3.6rem;
        font-style: italic;
        font-family: 'Times New Roman', Times, serif;  
        background-color: rgba(255,255,255,255);
        text-align:center;
        text-shadow:3px 5px 10px white;
        box-shadow: 3px 5px 10px white;
        text-decoration: none;
        color: black;
        border-style: solid;
        border-color: white;
        border-width: 1px;
        border-radius: 15px;
        transition: 0.3s;
        opacity: 0.4;
    }
    button:hover{
        opacity: 1;
    }
    button:active{
        background-color: rgba(255,255,255,255); 
        transform: translateY(10px);
    }

</style>

<?php
    include("conexao.php");

    //atribuindo valores dos campos a variaveis.
    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    //comando sql.
    $comando = $pdo->prepare("SELECT pk_usuario, senha_usuario, is_adm_usuario FROM usuario WHERE email_usuario = :email");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(":email", $email);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Se a consulta retornar uma única linha significa que o email inserido existe.
    if ($comando->RowCount() == 1) {
        $resultado = $comando->fetch();

        //Comparar senha informada com a senha armazenado no banco de dados.
        if ($resultado['senha_usuario'] == MD5($set_senha)) {
            //inicia uma sessão.
            session_start();

            //insere informações na sessão.
            $_SESSION['pk_usuario'] = $resultado['pk_usuario'];
            $_SESSION['senha_usuario'] = $resultado['senha_usuario'];
            $_SESSION['is_adm_usuario'] = $resultado['is_adm_usuario'];
            $_SESSION['loggedin'] = true;

            //redireciona para a pagina informada.
            header("Location:tela4_Inicio.php");
        } else {
            echo "<p>Email ou Senha Inválida</p>";
        }
    } else {
        echo ("<p>Email ou Senha Inválida!</p>");
    }
    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>

<button onclick="Voltar()">Voltar</button>
<script>
    function Voltar(){
        window.open('tela3_Logar.html');
        window.close('Login.php');
    }
</script>