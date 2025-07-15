<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se o número é perfeito (soma dos divisores = número).</title>
</head>

<body>
<form method="POST" action="">
    <label for="num">Número: </label>
    <input type="number" id="num" name="num" required>
    <button type="submit" name="perfeitos">Verificar</button>
</form>

<?php

    function verificar_perfeitos($n){
        $perfeito = 0;

        for ($i = 1; $i < $n; $i++) { 
            if ($n % $i == 0) {
                $perfeito += $i; 
            }
        }
        return $perfeito;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['perfeitos'])){
        $numero = (int)$_POST['num'];

        if($numero <= 0){
            echo "Insira um valor positivo!";
        }else{
            $perfeito = verificar_perfeitos($numero);

            if($perfeito == $numero){
                echo "O número $numero é perfeito.";
            }else{
                echo "O número $numero não é perfeito";
            }
        }
        
    }
?>

</body>
</html>