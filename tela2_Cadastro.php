<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="StyleSheet" href="estilo2 - Cadastro e Login.css">
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
                <input type="text" id="senha" name="email" placeholder="alguma coisa" required>
                <label for="senha">Email:</label>
            </div>

            <div class="input-field">
                <input type="password" id="senha" name="senha" placeholder="alguma coisa" required>
                <label for="senha">Senha:</label>
            </div>

            <div class="container-2">
                <select name="genero" id="format" required>
                <option value="0" selected disabled>Seu Gênero:</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
                </select>

                <select name="biotipo" id="format" required>
                        <option value="0" selected disabled>Seu Biotipo:</option>
                        <option value="Endomorfo">Endomorfo</option>
                        <option value="Mesomorfo">Mesomorfo</option>
                        <option value="Ectomorfo">Ectomorfo</option>
                </select>
            </div>
           
            <div class="center">
                <button>Cadastrar</button>
            </div>
            <div class="center">
                <button onclick="Voltar()">Sair</button>
            </div>
        </form>
    </div>
    <script>
        function Voltar(){
            window.close('tela2_Cadastro.html');
            window.open('tela1_Site.html');
        }
    </script>
</body>
</html>