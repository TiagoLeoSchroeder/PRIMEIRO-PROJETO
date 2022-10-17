<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="StyleSheet" href="estilo_cadastro.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="inserir.php" method="post">
            <div class="input-field">
                <input type="text" id="nome" name="nome" placeholder="alguma coisa" required>
                <label for="nome">Nome:</label>
            </div>

            <div class="input-field">
                <input type="text" id="email" name="email" placeholder="alguma coisa" required>
                <label for="senha">Email:</label>
            </div>

            <div class="input-field">
                <input type="password" id="senha" name="senha" placeholder="alguma coisa" required>
                <label for="senha">Senha:</label>
            </div>

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
           
            <label for="imagem"
        style="position: relative;
             left: 2rem;
             margin-top: 2rem; 
             padding: 10px 10px; 
             width: 17rem; 
             background-color: #333; 
             color: #FFF; 
             text-transform: uppercase; 
             text-align: center; 
             display: block; 
             margin-top: 10px; 
             cursor: pointer; 
             border: solid #fff; 
             border-radius: 10rem; 
             border-witdth: 1px; 
             font-style: italic; 
             box-shadow: 3px 5px 10px #fff; 
             transition: 0.5s;            
             label:hover{background: rgba(255, 0, 0, 0.459);}
             ">
            <input type="file" class="input-field" name="imagem" id="imagem" style="display: none;" multiple accept="image/*">ENVIAR ARQUIVO</input>
    </label>

    <br>
            <div class="center">
                <button>Cadastrar</button>
            </div>
            <div class="center">
                <a href="tela_site.html" class="voltar">SAIR</a>
            </div>
        </form>
    </div>
    <script>
    </script>
</body>
</html>