<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simular um formulário de login: comparar usuário e senha com valores fixos.</title>
</head>

<body>
    <form action="" method="POST">

        <label for="texto_usuario">Usuário: </label>
        <input type="text" name="texto_usuario" id="texto_usuario" required>
        <label for="texto_senha">Senha: </label>
        <input type="text" name="texto_senha" id="texto_senha" required>
        <button type="submit" name="validar_login">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['validar_login'])){
                $usuario = $_POST['texto_usuario'];
                $senha = $_POST['texto_senha'];

                if($senha == 'Admin' && $usuario == 'root'){
                    echo 'Você fez login!';
                }else{
                    echo 'Usuário ou senha incorretos!';
                }
            }
        }
    
    ?>
</body>
</html>