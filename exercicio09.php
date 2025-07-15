<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber dois números e exibir a soma de todos os números entre eles.</title>
</head>

<body>
<form method="POST" action="">
    <label for="num1">Número 1:</label>
    <input type="number" id="num1" name="num1" required>
    <label for="num2">Número 2:</label>
    <input type="number" id="num2" name="num2" required>
    <button type="submit" name="somatoria">Somatoria</button>
</form>

<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['somatoria'])) {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];

        $soma = 0;
        for ($i = $num1; $i <= $num2; $i++) { 
        $soma += $i;
    }
    echo "A soma dos número entre eles é: $soma";
    }
?>

</body>
</html>