<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar quantos números pares existem entre 1 e o número informado.</title>
</head>

<body>
<form method="POST" action="">
    <label for="num">Número: </label>
    <input type="number" id="num" name="num" required>
    <button type="submit" name="contar">Contar</button>
</form>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contar'])){
    $numero = (int)$_POST['num'];
        $soma = 0;
        for ($i = 1; $i <= $numero; $i++) { 
            if ($i % 2 == 0) { 
            $soma += 1;
            }
    }
    echo "Existem $soma pares entre esse número.";
    }
?>

</body>
</html>