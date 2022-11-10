<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="StyleSheet" href="estilo_inicio_cliente.css">
</head>
<body>
    <header class="cima">
       <p>🏋🏽 LIFT WEIGHTS-HOME 🏋🏽</p> 
        </div>
            </div>
        <div class="dropdown" id="esconder">

            <button><?php include("listar_usuario_conectado.php"); echo '<img height="80px" width="80px" src="' .$informacoes_usuario['imagem_usuario']. '">'; ?></button>

            <button><?php include("listar_usuario_inicio.php"); echo '<img height="160px" width="160px" style="position: relative; right: 1.25rem; bottom: 0.6rem; border-radius: 80px" src="' .$informacoes_usuario['imagem_usuario']. '">'; ?></button>
            <div>
                <a href="tela_Perfil.php">PERFIL</a>
                <a href="tela_Configuracoes_cliente.html" >CONFIGURAÇÕES</a>
                <a href="tela_Listagem_treino.html" >LISTA DE TREINOS</a>
                <a href="tela_site.html">SAIR</a>
            </div>
        </div>
    </header>
</body>
<body class="second-body">
    <div class="container">
        <div class="card">
            <div class="content">
                <br><br><br><br>
                <h2>01</h2>
                <h3>TREINOS DE MUSCULAÇÃO</h3>
                <p>TREINOS PERSONALIZADOS PARA VOCÊ FAZER NA CONFORTO DA SUA CASA.</p>
                <br><br>
                <a href="tela_musculacao_cliente.html">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br><br><br><br>
                <h2>02</h2>
                <h3>SOBRE O SITE</h3>
                <p>SOBRE O NOSSO SITE DE ATIVIDADES FÍSICAS</p>
                <br>
                <a href="tela_Informacao.html">Mais informações</a>
            </div>
        </div> 
        <div class="card">
            <div class="content">
                <br><br><br><br><br>
                <h2>03</h2>
                <h3>SUPORTE AO CLIENTE</h3>
                <p>CASO QUEIRA MANDAR ALGUM E-MAIL</p>
                <br> <br>
                <a href="tela_Contato.html">Mais informações</a>
            </div>
        </div> 
    </div>
    <script type="text/javascript" src="vanilla-tilt.babel.js"></script>
    <script>    
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 0.5,
        });
    </script>
</body>
</html>