<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo (ex: “arara”).</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto_palindromo">Palavra: </label>
        <input type="text" name="texto_palindromo" id="texto_palindromo" required>
        <button type="submit" name="verificar_palindromo">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_palindromo'])){
                $palavra = $_POST['texto_palindromo'];
                $palavra_invertida = strrev($palavra);

                echo "A palavra $palavra ".(($palavra_invertida == $palavra)? ' é um palíndromo':'não é um palíndromo');
                
            }
        }

    ?>
</body>
</html>
