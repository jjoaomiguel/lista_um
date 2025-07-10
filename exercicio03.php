    <html lang="pt-BR">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Informar se um número é positivo, negativo ou zero.</title>
    </head>
    <body>
        <form method="POST" action="">
                <label for="numero">Informar se um número é positivo, negativo ou zero.</label>
                <input type="number" id="numero" name="numero" required>
                <button type="submit" name="informar">Informar</button>
        </form>

        <?php
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $numero = $_POST['numero'];

            if($numero >= 1){
                echo 'É postivo';
            }elseif($numero == 0){
                echo 'É zero';
            }elseif($numero <= -1){
                echo 'É negativo';
            }
        }
        ?>
    </body>
</html>