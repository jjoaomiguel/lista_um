    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular a tabuada de um número informado.</title>
    </head>
    <body>
        </head>
    <body>

    <form method="POST" action="">
            <label for="numero">Calcular a tabuada de um número informado.</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $numero = $_POST['numero'];


        function tabuada($numero) {
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado <br>";
            }
        }
    }

    tabuada($numero);

    ?>
    
    </body>
    </body>
    </html>