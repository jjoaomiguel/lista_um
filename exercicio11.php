<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo (ex: “arara”).</title>
</head>

<body>
<form method="POST" action="">
    <label for="palavra">Palavra: </label>
    <input type="string" id="string" name="string" required>
    <button type="submit" name="palindromo">Palindromo</button>
</form>

<?php

        function palindromo($string){
            $string = strtolower(trim($string));
            $reversedString = strrev($string);
            return $string === $reversedString;
        }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fibonacci'])) {
        $string = (string)$_POST['string'];

        if (palindromo($string)) {
            echo "$string é um palíndromo.\n";
            } else {
            echo "$string não é um palíndromo.\n";
            }
        }
?>

</body>
</html>