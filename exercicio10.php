<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber um número e exibir a sequência de Fibonacci até esse número.</title>
</head>

<body>
<form method="POST" action="">
    <label for="num">Número</label>
    <input type="number" id="num" name="num" required>
    <button type="submit" name="fibonacci">Fibonacci</button>
</form>

<?php

        function fibonacci($numero){
            if ($numero == 0){
                return 0;    
            }elseif($numero == 1){
                return 1;
            } else{
                    return (fibonacci($numero - 1)
                           + fibonacci($numero - 2));
            }
        }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fibonacci'])) {
        $numero = (int)$_POST['num'];

        for ($i = 0; $i < $numero; $i++ ) {
            echo fibonacci($i) . ', ';
        }
    }
?>

</body>
</html>