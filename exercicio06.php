<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir todos os divisores de um número.</title>
</head>

<body>
<form method="POST" action="">
    <label for="num">Número: </label>
    <input type="number" id="num" name="num" required>
    <button type="submit" name="divisores">Verificar</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['divisores'])){;
            $numero = (int)$_POST['num'];
           for ($i = 1; $i <= $numero; $i++) { 
                if ($numero % $i == 0) {
                    echo "O número $i é um divisor";
                    echo "<br>";
                };
       };
    };
};
?>

</body>
</html>